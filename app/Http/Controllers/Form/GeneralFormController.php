<?php

namespace App\Http\Controllers\Form;

use App\Helpers\BibClass;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GeneralFormController extends Controller
{
    public function create()
    {
        $tables = DB::select('SHOW TABLES');
        try {
            $databasdeName =   DB::connection()->getDatabaseName();
            $allTables = [];
            foreach ($tables as $table) {
                $table_field = "Tables_in_$databasdeName";
                $allTables[$table->$table_field] = $table->$table_field;
            }
            return view('omis.form.create', compact('allTables'));
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'type' => 'required',
            'tableName' => 'required',
        ]);

        $name = trim($request->type);
        $command = $name;

        $tableName = trim($request->tableName);
        $directoryName = trim($request->directoryName);

        switch ($command) {
            case 'dictonary':
                $data['tableName'] = "tbl_dictonary";
                if ($tableName != "") {
                    switch ($tableName) {
                        case 'add':
                            $data['TableCols'] = DB::select("describe " . $data['tableName']);
                            return view("omis.settings.dictonary/add", $data);
                        default:
                            $data['TableRows'] = DB::select("select * from " . $data['tableName']);
                            return view("omis.settings.dictonary.list", $data);
                    }
                }
                $data['TableName'] = "tbl_dictonary";
                $data['TableRows'] = DB::select("select * from " . $data['TableName']);
                return view("omis.settings.dictonary", $data);



            case 'curd':
                $data['tableName'] = $tableName;
                $data['directoryName'] = $directoryName;
                BibClass::ajaxListContent($tableName, $directoryName);
                BibClass::ajaxAddContent($tableName, $directoryName);
                BibClass::ajaxEditContent($tableName, $directoryName);
                BibClass::ajaxShowContent($tableName, $directoryName);
                return view("omis.settings.curd", $data);
                break;
            case 'ajax-curd':
                $data['tableName'] = $tableName;
                $data['directoryName'] = $directoryName;
                $columns =  DB::select("describe $tableName"); // users table
                BibClass::migrationContent($tableName, $directoryName);
                BibClass::ajaxListContent($tableName, $directoryName);
                BibClass::ajaxAddContent($tableName, $directoryName);
                BibClass::ajaxEditContent($tableName, $directoryName);
                BibClass::ajaxEditSimpleContent($tableName, $directoryName);
                BibClass::ajaxShowContent($tableName, $directoryName);
                return view("omis.settings.ajax-curd", $data);
                break;
            case 'make-table-nullable':
                nullableFields($tableName);
                return redirect()->back();
                break;
            default:

                return view("omis.settings.home");
        }
    }

    public function getTableNullablecreate()
    {
        return view("omis.settings.ajax-curd");
    }
}
