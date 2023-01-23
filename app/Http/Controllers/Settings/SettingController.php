<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\BibClass;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SettingController extends Controller
{
    public function master($name = "", $params = array())
    {
        $name = trim($name);
        $params = explode("/", $name);
        $command = $params[0];
        $tableName = isset($params[1]) ? $params[1] : "";
        $directoryName = isset($params[2]) ? $params[2] : null;

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
                $data['migrationContent'] = BibClass::migrationContent($tableName);
                $columns =  DB::select("describe $tableName"); // users table
                // dd($columns[0]->Field); // dump the result and die
                return view("omis.settings.curd", $data);


            default:

                return view("omis.settings.home");
        }
        //dd(url());
    }
}
