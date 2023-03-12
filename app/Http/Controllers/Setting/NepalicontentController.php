<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting\Nepalicontent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class NepalicontentController extends Controller
{
    public function index(Request $request)
    {
        $data = Nepalicontent::where('status', '<>', -1)->orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            $html = view("omis.setting.nepalicontent.ajax.index", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.setting.nepalicontent.ajax_index", compact('data'));
    }

    public function create(Request $request)
    {
        if ($request->ajax()) {
            $html = view("omis.setting.nepalicontent.ajax.create")->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.setting.nepalicontent.create");
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // $array = require resource_path('lang/ne/lang.php');
        // foreach ($array as $key => $item) {
        //     Nepalicontent::create(['english_string' => $key, 'nepali_string' => $item]);
        // }
        // $array['ram'] = 'राम';
        $validator = Validator::make($request->all(), [
            'english_string' => 'required|unique:tbl_nepalicontent',
            'nepali_string' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->messages(),
            ], 500);
        }
       
        $nepaliArray = require resource_path('lang/ne/lang.php');
        $data = Nepalicontent::create(['english_string' => $request->english_string, 'nepali_string' => $request->nepali_string]);
        $nepaliArray[$request->english_string] = $request->nepali_string;
        $nepaliArray = '<?php return ' . var_export($nepaliArray, true) . ';' . PHP_EOL;
        file_put_contents(resource_path('lang/ne/lang.php'), $nepaliArray);

        $englishArray = require resource_path('lang/en/lang.php');
        $englishArray[$request->english_string] = $request->english_string;
        $englishArray = '<?php return ' . var_export($englishArray, true) . ';' . PHP_EOL;
        file_put_contents(resource_path('lang/en/lang.php'), $englishArray);

        // $array = Lang::get('lang'); // return entire array
        // $text  = Lang::get('pagination.next'); // return single item
        // $request->request->add(['alias' => slugify($request->nepalicontentName)]);
        // Nepalicontent::create($request->all());

        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Nepalicontent Created Successfully.'], 200);
        }
        return redirect()->route('setting.nepalicontent.index')->with('success', 'The Nepalicontent created Successfully.');
    }

    public function show(Request $request, $id)
    {
        $data = Nepalicontent::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.setting.nepalicontent.ajax.show", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.setting.nepalicontent.show", compact('data'));
    }


    public function edit(Request $request, $id)
    {
        $data = Nepalicontent::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.setting.nepalicontent.ajax.edit", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.setting.nepalicontent.edit", compact('data'));
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'english_string' => 'required|unique:tbl_nepalicontent,english_string,'.$id.',nepalicontent_id',
            'nepali_string' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->messages(),
            ], 500);
        }
       
         //updating 
         $data = Nepalicontent::findOrFail($id);
        // $request->request->add(['alias' => preg_replace('#[ -]+#', '-', $request->nepalicontentName)]);
        $nepaliArray = require resource_path('lang/ne/lang.php');
        if(isset($nepaliArray[$data->english_string]))
            unset($nepaliArray[$data->english_string]);
        $nepaliArray[$request->english_string] = $request->nepali_string;
        $nepaliArray = '<?php return ' . var_export($nepaliArray, true) . ';' . PHP_EOL;
        file_put_contents(resource_path('lang/ne/lang.php'), $nepaliArray);

        $englishArray = require resource_path('lang/en/lang.php');
        if(isset($englishArray[$data->english_string]))
            unset($englishArray[$data->english_string]);
        $englishArray[$request->english_string] = $request->english_string;
        $englishArray = '<?php return ' . var_export($englishArray, true) . ';' . PHP_EOL;
        file_put_contents(resource_path('lang/en/lang.php'), $englishArray);
        $data->update($request->all());

        
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Nepalicontent updated Successfully.'], 200);
        }
        return redirect()->route('setting.nepalicontent.index')->with('success', 'The Nepalicontent updated Successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $data = Nepalicontent::findOrFail($id);
        $data->status = -1;
        $data->save();
        return response()->json(['status' => true, 'message' => 'The Nepalicontent Deleted Successfully.'], 200);
    }

    public static function getAjaxContent($type, $id = '', $option = '')
    {
        switch ($type) {
            case 'index':
                $data = Nepalicontent::where('status', '<>', -1)->get();
                return view("omis.setting.nepalicontent.ajax.index", compact('data'))->render();
                break;
            case 'create':
                return view("omis.setting.nepalicontent.ajax.create")->render();
                break;
            case 'edit':
                $data = Nepalicontent::findOrFail($id);
                return view("omis.setting.nepalicontent.ajax.edit", compact('data'))->render();
                break;
            default:
                return 'Not Found';
        }
    }

    public function api(Request $request, $action, $authCode = null)
    {
        $id = $request->primary_id;

        $route = $request->route()->uri;
        $route = explode('/', $route);
        if ($route[0] == 'api') {
            switch ($action) {
                case 'index':
                    $data = Nepalicontent::where('status', '<>', -1)->get();
                    $html = view("omis.setting.nepalicontent.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'store':
                    Nepalicontent::create($request->all());
                    if ($request->ajax()) {
                        return response()->json(['status' => true, 'message' => 'The Nepalicontent Created Successfully.'], 200);
                    }
                    break;
                case 'edit':
                    $data = Nepalicontent::findOrFail($id);
                    $html = view("omis.setting.nepalicontent.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'update':
                    $data = Nepalicontent::findOrFail($id);
                    $data->update($request->all());
                    return response()->json(['status' => true, 'message' => 'The Nepalicontent updated Successfully.'], 200);
                    break;
                case 'delete':
                    $data = Nepalicontent::findOrFail($id);
                    $data->status = -1;
                    $data->save();
                    return response()->json(['status' => true, 'message' => 'The Nepalicontent Deleted Successfully.'], 200);
                    break;
            }
        } else {
        }
    }

    public function getDatabaseBackupFiles()
    {
        $directory = "backup/";
        $backups = Storage::disk('local')->files($directory);

        return view('omis.setting.backup.index',compact('backups'));
    }

    public function takeDatabaseBackup()
    {
        $DbName = env('DB_DATABASE');
        $get_all_table_query = "SHOW TABLES ";
        $result = DB::select(DB::raw($get_all_table_query));

        $prep = "Tables_in_$DbName";
        foreach ($result as $res) {
            $tables[] = $res->$prep;
        }



        $connect = DB::connection()->getPdo();

        $get_all_table_query = "SHOW TABLES";
        $statement = $connect->prepare($get_all_table_query);
        $statement->execute();
        $result = $statement->fetchAll();


        $output = '';
        foreach ($tables as $table) {
            $show_table_query = "SHOW CREATE TABLE " . $table . "";
            $statement = $connect->prepare($show_table_query);
            $statement->execute();
            $show_table_result = $statement->fetchAll();

            foreach ($show_table_result as $show_table_row) {
                $output .= "\n\n" . $show_table_row["Create Table"] . ";\n\n";
            }
            $select_query = "SELECT * FROM " . $table . "";
            $statement = $connect->prepare($select_query);
            $statement->execute();
            $total_row = $statement->rowCount();

            for ($count = 0; $count < $total_row; $count++) {
                $single_result = $statement->fetch(\PDO::FETCH_ASSOC);
                $table_column_array = array_keys($single_result);
                $table_value_array = array_values($single_result);
                $output .= "\nINSERT INTO $table (";
                $output .= "" . implode(", ", $table_column_array) . ") VALUES (";
                $output .= "'" . implode("','", $table_value_array) . "');\n";
            }
        }
        
        if (!file_exists(storage_path() .'/app/backup')) {
            mkdir(storage_path() .'/app/database-backup', 0777, true);
        }

        $file_name = storage_path() .'/app/backup/'.'backup-' . date('Y-m-d') . '.sql';
        $file_handle = fopen($file_name, 'w+');
        fwrite($file_handle, $output);
        fclose($file_handle);
        echo "Success <br>";
        echo 'database_backup_on_' . date('Y-m-d') . '.sql';
        
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($file_name));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file_name));
        ob_clean();
        flush();
        readfile($file_name);
        // unlink($file_name);

    }
}
