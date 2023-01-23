<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class BibClass
{
    public static function pre($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    public static function addButton($path, $text)
    {
?>
        <a href="<?php echo url($path); ?>" class="btn btn-primary btn-sm pull-right">
            <em class="icon ni ni-plus"></em><span><?php echo $text; ?></span>
        </a>
    <?php
    }
    public static function addRowActions($pk)
    {
        return '<ul class="d-flex flex-wrap ">
        <li><a href="#" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
        <li><a href="form2.php" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
        <li><button type="button" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>

        </ul>';

        BibClass::addButton("edit/$pk", 'Edit');
        BibClass::addButton("view/$pk", 'View');
        BibClass::addButton("destroy/$pk", 'Delete');
    }

    public static function getController()
    {
        $routeArray = app('request')->route()->getAction();
        $controllerAction = class_basename($routeArray['controller']);
        list($controller, $action) = explode('@', $controllerAction);

        print_r($controller);
    }
    public static function createSidebarMenu($link, $name, $target = "")
    {
    ?>
        <li class="nk-menu-item"><a href="<?php echo $link; ?>" class="nk-menu-link" <?php echo ($target != "") ? "target=\"_blank\"" : ""; ?>><span class="nk-menu-text"><?php echo $name; ?></span></a></li>
    <?php
    }

    public static function modelContent($tableName, $directoryName)
    {
        $modelPath = '';
        if (!empty($directoryName)) {
            $modelPath .= "\\" . ucfirst($directoryName);
        }

        $modelClass = ucfirst(str_replace("tbl_", "", $tableName));
        $pkField = str_replace("tbl_", "", $tableName) . "_id";

        $tableFields = DB::select("describe $tableName");

        $skipPRimaryKey = 1;
        $tableColumns = '';
        foreach ($tableFields as $tableField) :
            if ($skipPRimaryKey == 1) {
                $skipPRimaryKey = 2;
                continue;
            }
            $tableColumns .= "'" . $tableField->Field . "',\n";

        endforeach;

        $contentString = "<?php
        namespace App\Models$modelPath;

        use App\Models\User;
        use Illuminate\Database\Eloquent\Casts\Attribute;
        use Illuminate\Database\Eloquent\Factories\HasFactory;
        use Illuminate\Database\Eloquent\Model;
        use App\Traits\CreatedUpdatedBy;

        class $modelClass extends Model
        {
            use HasFactory, CreatedUpdatedBy;

            protected \$table = '$tableName';
            protected \$primaryKey = '$pkField';
            public \$timestamps = true;
            protected \$fillable =[
                $tableColumns
            ];

            protected \$appends = ['status_name'];

            protected function getStatusNameAttribute()
            {
                return \$this->status == 1 ? '<span class=\"badge text-bg-success-soft\"> Active </span>' : '<span class=\"badge text-bg-danger-soft\">Inactive</span>';
            }

    protected function createdBy(): Attribute
    {
        return Attribute::make(
            get: fn (\$value) =>  User::find(\$value) ? User::find(\$value)->name : '',
        );
    }

    protected function updatedBy(): Attribute
    {
        return Attribute::make(
            get: fn (\$value) => User::find(\$value) ? User::find(\$value)->name : '',
        );
    }
        }";

        $modelPath = '';
        if (!empty($directoryName)) {
            $modelPath .=  ucfirst($directoryName) . '/';
        }

        if (!file_exists(base_path() .'/app/Models/' . $modelPath)) {
            mkdir(base_path() .'/app/Models/' . $modelPath, 0777, true);
        }
        $filename = $modelClass . ".php";
        if (!file_exists(base_path() ."/app/Models/" . $modelPath . $filename)) {
            $file = fopen(base_path() ."/app/Models/" . $modelPath . $filename, 'w');
            fwrite($file, $contentString);
            fclose($file);
        }
        return $contentString;
    }


    public static function controllerContent($tableName, $directoryName)
    {
        $tableFields = DB::select("describe $tableName");
        $pkField = str_replace("tbl_", "", $tableName) . "_id";
        $controllerName = ucfirst(str_replace("tbl_", "", $tableName)) . "Controller";
        $viewName = '';
        $controllerPath = '';
        $modelName = '';
        if (!empty($directoryName)) {
            $viewName .= strtolower($directoryName) . '.';
            $controllerPath .= "\\" . ucfirst($directoryName);
            $modelName .=  ucfirst($directoryName) . '\\';
        }
        $modelName .= ucfirst(str_replace("tbl_", "", $tableName));
        $viewName .= strtolower(str_replace("tbl_", "", $tableName));
        $modelClass = ucfirst(str_replace("tbl_", "", $tableName));
        $tableAliasColumnName = str_replace("tbl_", "", $tableName) . 'Name';

        $contentString = "<?php
        namespace App\Http\Controllers$controllerPath;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\\$modelName;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class $controllerName extends Controller
        {
           public function index(Request \$request)
            {
                \$data = $modelClass::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if (\$request->ajax()) {
                    \$html = view(\"omis.$viewName.ajax.index\", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => \$html], 200);
                }
                return view(\"omis.$viewName.ajax_index\", compact('data'));
            }

            public function create(Request \$request)
            {
                if (\$request->ajax()) {
                    \$html = view(\"omis.$viewName.ajax.create\")->render();
                    return response()->json(['status' => true, 'content' => \$html], 200);
                }
                return view(\"omis.$viewName.create\");
            }

            public function store(Request \$request)
            {
                \$request->request->add(['alias' => slugify(\$request->$tableAliasColumnName)]);
                $modelClass::create(\$request->all());
                if (\$request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The $modelClass Created Successfully.'], 200);
                }
                return redirect()->route('$viewName.index')->with('success','The $modelClass created Successfully.');
            }

            public function show(Request \$request, \$id)
            {
                \$data = $modelClass::findOrFail(\$id);
                if (\$request->ajax()) {
                    \$html = view(\"omis.$viewName.ajax.show\", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => \$html], 200);
                }
                return view(\"omis.$viewName.show\", compact('data'));
            }


            public function edit(Request \$request, \$id)
            {
                \$data = $modelClass::findOrFail(\$id);
                if (\$request->ajax()) {
                    \$html = view(\"omis.$viewName.ajax.edit\", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => \$html], 200);
                }
                return view(\"omis.$viewName.edit\", compact('data'));
            }


            public function update(Request \$request, \$id)
            {
                \$data = $modelClass::findOrFail(\$id);
                \$request->request->add(['alias' => slugify(\$request->$tableAliasColumnName)]);
                \$data->update(\$request->all());
                if (\$request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The $modelClass updated Successfully.'], 200);
                }
                return redirect()->route('$viewName.index')->with('success','The $modelClass updated Successfully.');
            }

            public function destroy(Request \$request,\$id)
            {
                \$data = $modelClass::findOrFail(\$id);
                \$data->status = -1;
                \$data->save();
                return response()->json(['status'=>true,'message'=>'The $modelClass Deleted Successfully.'],200);
            }

            public static function getAjaxContent(\$type, \$id = '', \$option = '')
            {
                switch (\$type) {
                    case 'index':
                        \$data = $modelClass::where('status', '<>', -1)->get();
                        return view(\"omis.$viewName.ajax.index\", compact('data'))->render();
                        break;
                    case 'create':
                        return view(\"omis.$viewName.ajax.create\")->render();
                        break;
                    case 'edit':
                        \$data = $modelClass::findOrFail(\$id);
                        return view(\"omis.$viewName.ajax.edit\", compact('data'))->render();
                        break;
                    default:
                        return 'Not Found';
                }
            }

            public function api(Request \$request, \$action, \$authCode = null)
            {
                \$id = \$request->primary_id;

                \$route = \$request->route()->uri;
                \$route = explode('/', \$route);
                if (\$route[0] == 'api') {
                    switch (\$action) {
                        case 'index':
                            \$data = $modelClass::where('status', '<>', -1)->get();
                            \$html = view(\"omis.$viewName.ajax.index\", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => \$html], 200);
                            break;
                        case 'store':
                            $modelClass::create(\$request->all());
                            if (\$request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The $modelClass Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            \$data = $modelClass::findOrFail(\$id);
                            \$html = view(\"omis.$viewName.ajax.edit\", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => \$html], 200);
                            break;
                        case 'update':
                            \$data = $modelClass::findOrFail(\$id);
                            \$data->update(\$request->all());
                            return response()->json(['status' => true, 'message' => 'The $modelClass updated Successfully.'], 200);
                            break;
                        case 'delete':
                            \$data = $modelClass::findOrFail(\$id);
                            \$data->status = -1;
                            \$data->save();
                            return response()->json(['status' => true, 'message' => 'The $modelClass Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        ";
        // $filename = ($controllerPath != "") ? $controllerPath . "/" : "";
        $controllerDirectory = '';
        if (!empty($controllerPath)) {
            $controllerDirectory = ucfirst($directoryName) . '/';
        }
        $filename = $controllerName . ".php";
        if (!file_exists($filename)) {
            if (!file_exists(base_path() . '/app/Http/Controllers/' . $controllerDirectory)) {
                mkdir(base_path() . '/app/Http/Controllers/' . $controllerDirectory, 0777, true);
            }
            $file = fopen(base_path() . "/app/Http/Controllers/" . $controllerDirectory . $filename, 'w');
            fwrite($file, $contentString);
            fclose($file);
        }
        return $contentString;
    }

    public static function migrationContent($tableName)
    {
        $columns = Schema::getColumnListing($tableName);
        $tableFields = DB::select("describe $tableName");
        // foreach($tableFields as $tableField){
        //     dd($tableField->Field);
        // }
        $pkField = str_replace("tbl_", "", $tableName) . "_id";
        //BibClass::pre($tableFields);

        $contentString = "<?php\n
        use Illuminate\Database\Migrations\Migration;\n
        use Illuminate\Database\Schema\Blueprint;\n
        use Illuminate\Support\Facades\Schema;\n
        return new class extends Migration\n
        {\n
            public function up()\n
            {\nSchema::create(\"$tableName\", function (Blueprint \$table) {\n";
        foreach ($tableFields as $tableField) {
            $Type = $tableField->Type;
            //WRITE CODE HERE TO IDENTIFY THE TYPES OF FIELDS
            switch ($Type) {
                case 'int(11)':
                    if ($tableField->Field == $pkField) :
                        $contentString .= "\$table->integer(\"$tableField->Field\")->autoIncrement();\n";
                    else :
                        $contentString .= "\$table->integer(\"$tableField->Field\")->default(0);\n";
                    endif;
                    break;

                case 'varchar(255)':
                    $contentString .= "\$table->string(\"$tableField->Field\")->nullable();\n";
                    break;

                case 'datetime':
                    $contentString .= "\$table->datetime(\"$tableField->Field\")->nullable();;\n";
                    break;

                case 'text':
                    $contentString .= "\$table->text(\"$tableField->Field\")->nullable();;\n";
                    break;

                default:
            }
        }
        $contentString .= "\$table->timestamps();\n });\n   }\n    public function down()\n    {\n     Schema::dropIfExists(\"$tableName\");\n    }\n};";
        // dd(base_path());
        $file = fopen(base_path() . "/database/migrations/" . date('Y_m_d_his') . "_create_" . $tableName . "_table.php", 'w');
        fwrite($file, $contentString);
        fclose($file);
        return $contentString;
        //        return $tableFields;
    }

    public static function routeContent($TableName, $directoryName)
    {
        $TableName = str_replace("tbl_", "", $TableName);
        $routePrefixName = '';
        $ControllerName = '';
        if (!empty($directoryName)) {
            // $ControllerName .= ucwords($directoryName) . '/';
            $routePrefixName .= strtolower($directoryName) . '.';
        }
        $ControllerName .= ucwords($TableName) . "Controller";
        $routePrefixName .=   strtolower($TableName);

        $RouteContent = "Route::prefix(\"$TableName\")->group(function () {
            Route::get('/', [$ControllerName::class, 'index'])->name('$routePrefixName.index');
            Route::get('/create', [$ControllerName::class, 'create'])->name('$routePrefixName.create');
            Route::post('/store', [$ControllerName::class, 'store'])->name('$routePrefixName.store');
            Route::get('/show/{id}', [$ControllerName::class, 'show'])->name('$routePrefixName.show');
            Route::get('/edit/{id}', [$ControllerName::class, 'edit'])->name('$routePrefixName.edit') ;
            Route::put('/update/{id}', [$ControllerName::class, 'update'])->name('$routePrefixName.update');
            Route::delete('/destroy/{id}', [$ControllerName::class, 'destroy'])->name('$routePrefixName.destroy');
        });";
        return $RouteContent;
    }

    public static function listContent($TableName, $directoryName)
    {
        $TableCols = DB::select("describe " . $TableName);
        $TableRows = DB::select("select * from " . $TableName);
        $folder = '';
        $routeName = '';
        if (!empty($directoryName)) {
            $folder .= strtolower($directoryName) . '/';
            $routeName .= strtolower($directoryName) . '.';
        }
        $folder .= str_replace("tbl_", "", $TableName);
        $Table_pk = str_replace("tbl_", "", $TableName) . "_id";
        $title = ucwords(str_replace("tbl_", "", $TableName));
        $routeName .= strtolower(str_replace("tbl_", "", $TableName)) . '.';

        $columns = Schema::getColumnListing($TableName);
        $primaryKey = $columns[0];
        $tableFields = DB::select("describe $TableName");

        $listContent = '@extends(\'omis.partials.layouts\')
        @section(\'content\')
            <div class="nk-content">
                <div class="container">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <div class="nk-block-head-between flex-wrap gap g-2">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title">' . $title . ' List</h1>
                                            <nav>
                                                <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                    <li class="breadcrumb-item"><a href="#">' . $title . '</a></li>
                                                    <li class="breadcrumb-item"><a href="#">' . $title . ' Manage</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">' . $title . '
                                                    </li>
                                                </ol>
                                            </nav>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <ul class="d-flex">
                                            <li><a href="{{route(' . "'" . $routeName . "create'" . ')}}" class="btn btn-md d-md-none btn-primary" data-bs-toggle="modal"
                                                    data-bs-target=""><em
                                                        class="icon ni ni-plus"></em><span>Add</span></a></li>
                                            <li><a href="{{route(' . "'" . $routeName . "create'" . ')}}"
                                                    class="btn btn-primary d-none d-md-inline-flex"><em
                                                        class="icon ni ni-plus"></em><span>Add ' . $title . '</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-block">
                                <div class="card">
                                    <table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
                                        <thead class="table-light">
                                            <tr>
                                            <th class="tb-col"><span class="overline-title">S.N.</span></th>' . PHP_EOL;

        foreach ($columns as $key => $column) {
            if ($key == 0 || $column == 'remarks' || $column == 'createdOn' || $column == 'createdBy' || $column == 'updatedBy' || $column == 'created_at' || $column == 'updated_at')
                continue;
            $listContent .= '<th class="tb-col"><span class="overline-title">' . $column . '</span></th>' . PHP_EOL;
        }
        $listContent .= '<th class="tb-col" data-sortable="false"><span
                                                                                                class="overline-title">Action</span>
                                            </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($data as $item)
                                            <tr>
                                                <td class="tb-col">{{ $i++ }}</td>';
        foreach ($columns as $key => $column) {
            if ($key == 0 || $column == 'remarks' || $column == 'createdOn' || $column == 'createdBy' || $column == 'updatedBy' || $column == 'created_at' || $column == 'updated_at')
                continue;
            if ($column == 'status')
                $listContent .= '<td class="tb-col">{!! $item->status_name !!}</td>' . PHP_EOL;
            else
                $listContent .= '<td class="tb-col">{{ $item->' . $column . ' }}</td>' . PHP_EOL;
        }
        $listContent .= '<td class="tb-col">
                                                    <ul class="d-flex flex-wrap ">
                                                    <li><a href="{{route(' . "'" . $routeName . 'show' . "'" . ',[$item->' . $primaryKey . '])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                                                     <li><a href="{{route(' . "'" . $routeName . 'edit' . "'" . ',[$item->' . $primaryKey . '])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                                                    <li><button type="button" data-route="{{route(' . "'" . $routeName . 'destroy' . "'" . ',[$item->' . $primaryKey . '])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
                                                   </ul> </td>
                                                   </tr>

                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        ';

        $path = base_path() . "/resources/views/omis/$folder/";
        $file = $path . "index.blade.php";
        if (!file_exists("$path")) {
            mkdir("$path", 0777, true);
        }
        if (!file_exists($file)) {
            $file = fopen($file, 'w');
            fwrite($file, $listContent);
            fclose($file);
        }
        return $listContent;
    } //End of list code content

    //ajax complete List
    public static function ajaxCompleteListContent($TableName, $directoryName)
    {
        $folder = '';
        $routeName = '';
        $controllerName = '';
        if (!empty($directoryName)) {
            $folder .= strtolower($directoryName) . '/';
            $routeName .= strtolower($directoryName) . '.';
            $controllerName .= ucwords($directoryName) . '\\';
        }
        $folder .= str_replace("tbl_", "", $TableName);
        $title = ucwords(str_replace("tbl_", "", $TableName));
        $controllerName .= $title . 'Controller';
        $routeName .= strtolower(str_replace("tbl_", "", $TableName)) . '.';

        $columns = Schema::getColumnListing($TableName);
        $primaryKey = $columns[0];
        $tableFields = DB::select("describe $TableName");

        $listContent = '@extends(\'omis.partials.layouts\')
    @section(\'content\')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title">' . $title . ' List</h1>
                                        <nav>
                                            <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                <li class="breadcrumb-item"><a href="#">' . $title . '</a></li>
                                                <li class="breadcrumb-item"><a href="#">' . $title . ' Manage</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">' . $title . '
                                                </li>
                                            </ol>
                                        </nav>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="d-flex">
                                        {!!createCanvasButton("customBtnAdd","","' . $title . '","' . $routeName . 'create") !!}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="card">
                                <table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
                                    <thead class="table-light">
                                        <tr>
                                        <th class="tb-col"><span class="overline-title">S.N.</span></th>' . PHP_EOL;

        foreach ($columns as $key => $column) {
            if ($key == 0 || $column == 'remarks' || $column == 'createdOn' || $column == 'createdBy' || $column == 'updatedBy' || $column == 'created_at' || $column == 'updated_at')
                continue;
            $listContent .= '<th class="tb-col"><span class="overline-title">' . $column . '</span></th>' . PHP_EOL;
        }
        $listContent .= '<th class="tb-col" data-sortable="false"><span
                                                    class="overline-title">Action</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($data as $item)
                                        <tr>
                                            <td class="tb-col">{{ $i++ }}</td>';
        foreach ($columns as $key => $column) {
            if ($key == 0 || $column == 'remarks' || $column == 'createdOn' || $column == 'createdBy' || $column == 'updatedBy' || $column == 'created_at' || $column == 'updated_at')
                continue;
            if ($column == 'status')
                $listContent .= '<td class="tb-col">{!! $item->status_name !!}</td>' . PHP_EOL;
            else
                $listContent .= '<td class="tb-col">{{ $item->' . $column . ' }}</td>' . PHP_EOL;
        }
        $listContent .= '<td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                <li>    
                                                    {!! actionCanvasButton("","btn-showCanvas","showoffcanvas","eye",' . "'" . $routeName . 'show' . "'" . ',$item->' . $primaryKey . ') !!}
                                                </li>
                                               <li> 
                                                        {!! actionCanvasButton("","btn-editCanvas","editoffcanvas","edit",' . "'" . $routeName . 'edit' . "'" . ',$item->' . $primaryKey . ') !!}
                                                </li>
                                                <li>{!! deleteCanvasButton("","btn-hover-danger",' . "'" . $routeName . 'destroy' . "'" . ',$item->' . $primaryKey . ') !!}</li>
                                               </ul> </td>
                                               </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                                {{-- Add Modal --}}
                       <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                        <div class="offcanvas-header border-bottom border-light">
                            <h5 class="offcanvas-title" id="offcanvasTopLabel">Add ' . $title . '</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body" data-simplebar>
                          <div class="card h-100">
                                <div class="card-body">
                                    <div class="alert alert-danger print-error-msg" style="display:none">
                                        <ul></ul>
                                    </div>
                                    <div id="addConvasByAjax">
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            {{-- Edit Modal --}}
                            <div class="offcanvas offcanvas-end offcanvas-size-xxlg editoffcanvas" id="editoffcanvas">
                            <div class="offcanvas-header border-bottom border-light">
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit ' . $title . '<h5><button type="button" class="btn-close"
                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body" data-simplebar>
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="alert alert-danger print-error-msg" style="display:none">
                                            <ul></ul>
                                        </div>
                                        <div id="editConvasByAjax">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Edit Modal --}}

                            {{-- Edit Modal --}}
                            <div class="offcanvas offcanvas-end offcanvas-size-xxlg showoffcanvas" id="showoffcanvas">

                            </div>
                            {{-- Edit Modal --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    ';

        $path = base_path() . "/resources/views/omis/$folder/";
        $file = $path . "ajax_index.blade.php";
        if (!file_exists("$path")) {
            mkdir("$path", 0777, true);
        }
        if (!file_exists($file)) {
            $file = fopen($file, 'w');
            fwrite($file, $listContent);
            fclose($file);
        }
        return $listContent;
    } //End of ajax complete list code content


    public static function ajaxListContent($TableName, $directoryName)
    {
        $TableCols = DB::select("describe " . $TableName);
        $TableRows = DB::select("select * from " . $TableName);
        $folder = '';
        $routeName = '';
        if (!empty($directoryName)) {
            $folder .= strtolower($directoryName) . '/';
            $routeName .= strtolower($directoryName) . '.';
        }
        $folder .= str_replace("tbl_", "", $TableName);
        $Table_pk = str_replace("tbl_", "", $TableName) . "_id";
        $title = ucwords(str_replace("tbl_", "", $TableName));
        $routeName .= strtolower(str_replace("tbl_", "", $TableName)) . '.';

        $columns = Schema::getColumnListing($TableName);
        $primaryKey = $columns[0];
        $tableFields = DB::select("describe $TableName");

        $listContent = '<table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
    <thead class="table-light">
        <tr>
        <th class="tb-col"><span class="overline-title">S.N.</span></th>' . PHP_EOL;

        foreach ($columns as $key => $column) {
            if ($key == 0 || $column == 'remarks' || $column == 'createdOn' || $column == 'createdBy' || $column == 'updatedBy' || $column == 'created_at' || $column == 'updated_at')
                continue;
            $listContent .= '<th class="tb-col"><span class="overline-title">' . $column . '</span></th>' . PHP_EOL;
        }
        $listContent .= '<th class="tb-col" data-sortable="false"><span
                    class="overline-title">Action</span></th>
        </tr>
    </thead>
    <tbody>
        @php
            $i = 1;
        @endphp
        @foreach ($data as $item)
        <tr>
            <td class="tb-col">{{ $i++ }}</td>';
        foreach ($columns as $key => $column) {
            if ($key == 0 || $column == 'remarks' || $column == 'createdOn' || $column == 'createdBy' || $column == 'updatedBy' || $column == 'created_at' || $column == 'updated_at')
                continue;
            if ($column == 'status')
                $listContent .= '<td class="tb-col">{!! $item->status_name !!}</td>' . PHP_EOL;
            else
                $listContent .= '<td class="tb-col">{{ $item->' . $column . ' }}</td>' . PHP_EOL;
        }
        $listContent .= '<td class="tb-col">
                <ul class="d-flex flex-wrap ">
                <li><a href="{{route(' . "'" . $routeName . 'show' . "'" . ',[$item->' . $primaryKey . '])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                 <li><a href="{{route(' . "'" . $routeName . 'edit' . "'" . ',[$item->' . $primaryKey . '])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                <li><button type="button" data-route="{{route(' . "'" . $routeName . 'destroy' . "'" . ',[$item->' . $primaryKey . '])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
               </ul> </td>
               </tr>

        @endforeach

    </tbody>
</table>';

        $path = base_path() . "/resources/views/omis/$folder/ajax/";
        $file = $path . "index.blade.php";
        if (!file_exists("$path")) {
            mkdir("$path", 0777, true);
        }
        if (!file_exists($file)) {
            $file = fopen($file, 'w');
            fwrite($file, $listContent);
            fclose($file);
        }
        return $listContent;
    }

    public static function addContent($TableName, $directoryName)
    {
        $TableCols = DB::select("describe " . $TableName);
        $TableRows = DB::select("select * from " . $TableName);
        $folder = '';
        $routeName = '';
        if (!empty($directoryName)) {
            $folder .= strtolower($directoryName) . '/';
            $routeName .= strtolower($directoryName) . '.';
        }
        $routeName .= strtolower(str_replace("tbl_", "", $TableName));
        $folder .= str_replace("tbl_", "", $TableName);
        $Table_pk = str_replace("tbl_", "", $TableName) . "_id";
        $title = ucwords(str_replace("tbl_", "", $TableName));

        $addContent = "@extends('omis.partials.layouts')
        @section('content')
        <div class=\"nk-content\">
            <div class=\"container\">
                <div class=\"nk-content-inner\">
                <div class=\"nk-content-body\">
                <div class=\"nk-block-head\">
                <div class=\"nk-block-head-between flex-wrap gap g-2\">
                    <div class=\"nk-block-head-content\">
                        <h2 class=\"nk-block-title\">Add $title</h1>

                    </div>
                    <div class=\"nk-block-head-content\">
                    <ul class=\"d-flex\"> <li>
                        <a href=\"{{ route('$routeName" . ".index') }}\" class=\"btn btn-md d-md-none btn-primary\">
                                <em class=\"icon ni ni-plus\"></em>
                                <span>View Cities</span>
                            </a>
                        </li>

                    </ul>
                </div>
                </div>
            </div>

            <div class=\"nk-block\">

                        <div class=\"card\">
                            <div class=\"card-body\">
                <form method=\"POST\" action=\"{{route('$routeName.store')}}\" enctype=\"multipart/form-data\">\n @csrf \n";
        $addContent .= '<div class="row">';

        $all_columns = master_getColumn($TableName);
        $all_foreign_table =  getForeignTable($all_columns);
        $all_foreignKey = [];
        if ($all_foreign_table)
            foreach ($all_foreign_table as $key => $tablename) {
                $all_foreignKey[$tablename] = master_getColumn($tablename);
                $all_foreignKey[$tablename] = $all_foreignKey[$tablename][0] ?? null;
            }
        foreach ($TableCols as $key => $TableCol) :
            $TableCol = $TableCol->Field;
            if ($key == 0 || $TableCol == 'alias' || $TableCol == 'createdOn' || $TableCol == 'createdBy' || $TableCol == 'updatedBy' || $TableCol == 'created_at' || $TableCol == 'updated_at')
                continue;
            $TableColLabel = ucwords(str_replace("_", " ", $TableCol));
            $addContent .= '<div class="col-lg-6">';
            if ($TableCol == 'status')
                $addContent .= "{{customCreateSelect(\"$TableCol\",\"$TableCol\",'',\"$TableColLabel\",['1'=>'Active','0'=>'Inactive'])}}\n";
            else {
                $status = true;
                foreach ($all_foreignKey as $ctable => $cPK) {
                    if ($TableCol == $cPK) {
                        $baseName = str_replace("tbl_", "", $ctable) . 'Name';
                        $addContent .= "{!! getSelectForForeignColumn(\"$ctable\",\"$cPK\",\"$baseName\",'') !!}\n";
                        $status = false;
                        break;
                    }
                }
                if ($status)
                    $addContent .= "{{createText(\"$TableCol\",\"$TableCol\",\"$TableColLabel\")}}\n";
            }

            $addContent .= "</div>";
        endforeach;
        $addContent .= ' <br> <div class="col-md-12">';
        $addContent .= "<?php createButton(\"btn-primary\",\"\",\"Submit\"); ?>\n";
        $addContent .= "</div>";
        $addContent .= " </form></div></div></div></div></div></div></div></div>\n@endsection";

        $path = base_path() . "/resources/views/omis/$folder/";
        $file = $path . "create.blade.php";
        if (!file_exists("$path")) {
            mkdir("$path", 0777, true);
        }
        if (!file_exists($file)) {
            $file = fopen($file, 'w');
            fwrite($file, $addContent);
            fclose($file);
        }

        return $addContent;
    } //End of addContent

    public static function ajaxAddContent($TableName, $directoryName)
    {
        $TableCols = DB::select("describe " . $TableName);
        $TableRows = DB::select("select * from " . $TableName);
        $folder = '';
        $routeName = '';
        if (!empty($directoryName)) {
            $folder .= strtolower($directoryName) . '/';
            $routeName .= strtolower($directoryName) . '.';
        }
        $routeName .= strtolower(str_replace("tbl_", "", $TableName));
        $folder .= str_replace("tbl_", "", $TableName);
        $Table_pk = str_replace("tbl_", "", $TableName) . "_id";
        $title = ucwords(str_replace("tbl_", "", $TableName));

        $all_columns = master_getColumn($TableName);
        $all_foreign_table =  getForeignTable($all_columns);
        $all_foreignKey = [];
        if ($all_foreign_table)
        foreach ($all_foreign_table as $key => $tablename) {
            $all_foreignKey[$tablename] = master_getColumn($tablename);
            $all_foreignKey[$tablename] = $all_foreignKey[$tablename][0] ?? null;
        }

        $addContent = "
                <form action=\"{{route('$routeName.store')}}\" id=\"storeCustomForm\">\n @csrf \n";
        $addContent .= '<div class="row">';
        foreach ($TableCols as $key => $TableCol) :
            $TableCol = $TableCol->Field;
            if ($key == 0 ||  $TableCol == 'alias' || $TableCol == 'createdOn' || $TableCol == 'createdBy' || $TableCol == 'updatedBy' || $TableCol == 'created_at' || $TableCol == 'updated_at')
                continue;
            $TableColLabel = ucwords(str_replace("_", " ", $TableCol));
            $addContent .= '<div class="col-lg-6">';
            if ($TableCol == 'status')
                $addContent .= "{{customCreateSelect(\"$TableCol\",\"$TableCol\",'',\"$TableColLabel\",['1'=>'Active','0'=>'Inactive'])}}\n";
            else {
                $status = true;
                foreach ($all_foreignKey as $ctable => $cPK) {
                    if ($TableCol == $cPK) {
                        $baseName = str_replace("tbl_", "", $ctable) . 'Name';
                        $addContent .= "{!! getSelectForForeignColumn(\"$ctable\",\"$cPK\",\"$baseName\",'') !!}\n";
                        $status = false;
                        break;
                    }
                }
                if ($status)
                    $addContent .= "{{createText(\"$TableCol\",\"$TableCol\",\"$TableColLabel\")}}\n";
            }


            $addContent .= "</div>";
        endforeach;
        $addContent .= ' <br> <div class="col-md-12">';
        $addContent .= "<?php createButton(\"btn-primary btn-store\",\"\",\"Submit\"); ?>\n";
        $addContent .= "</div>";
        $addContent .= " </form>";

        $path = base_path() . "/resources/views/omis/$folder/ajax/";
        $file = $path . "create.blade.php";
        if (!file_exists("$path")) {
            mkdir("$path", 0777, true);
        }
        if (!file_exists($file)) {
            $file = fopen($file, 'w');
            fwrite($file, $addContent);
            fclose($file);
        }

        return $addContent;
    } //End of ajax addContent


    public static function editContent($TableName, $directoryName)
    {
        $TableCols = DB::select("describe " . $TableName);
        $TableRows = DB::select("select * from " . $TableName);
        $folder = '';
        $routeName = '';
        if (!empty($directoryName)) {
            $folder .= strtolower($directoryName) . '/';
            $routeName .= strtolower($directoryName) . '.';
        }
        $routeName .= strtolower(str_replace("tbl_", "", $TableName));
        $folder .= str_replace("tbl_", "", $TableName);
        $Table_pk = str_replace("tbl_", "", $TableName) . "_id";
        $title = ucwords(str_replace("tbl_", "", $TableName));
        $editContent = "@extends('omis.partials.layouts')
        @section('content')
        <div class=\"nk-content\">
            <div class=\"container\">
                <div class=\"nk-content-inner\">
                <div class=\"nk-content-body\">
                <div class=\"nk-block-head\">
                <div class=\"nk-block-head-between flex-wrap gap g-2\">
                    <div class=\"nk-block-head-content\">
                        <h2 class=\"nk-block-title\">Edit $title</h1>

                    </div>
                    <div class=\"nk-block-head-content\">
                    <ul class=\"d-flex\"> <li>
                        <a href=\"{{ route('$routeName" . ".index') }}\" class=\"btn btn-md d-md-none btn-primary\">
                                <em class=\"icon ni ni-plus\"></em>
                                <span>View Cities</span>
                            </a>
                        </li>

                    </ul>
                </div>
                </div>
            </div>

            <div class=\"nk-block\">

                        <div class=\"card\">
                            <div class=\"card-body\">
                <form method=\"POST\" action=\"{{route('$routeName.update',[\$data->$Table_pk])}}\" enctype=\"multipart/form-data\">\n @csrf \n @method('PUT')\n";
        $editContent .= '<div class="row">';
        $all_columns = master_getColumn($TableName);
        $all_foreign_table =  getForeignTable($all_columns);
        $all_foreignKey = [];
        if ($all_foreign_table)
        foreach ($all_foreign_table as $key => $tablename) {
            $all_foreignKey[$tablename] = master_getColumn($tablename);
            $all_foreignKey[$tablename] = $all_foreignKey[$tablename][0] ?? null;
        }
        foreach ($TableCols as $key => $TableCol) :
            $TableCol = $TableCol->Field;
            if ($key == 0 || $TableCol == 'alias' || $TableCol == 'createdOn' || $TableCol == 'createdBy' || $TableCol == 'updatedBy' || $TableCol == 'created_at' || $TableCol == 'updated_at')
                continue;
            $TableColLabel = ucwords(str_replace("_", " ", $TableCol));
            $editContent .= '<div class="col-lg-6">';
            if ($TableCol == 'status')
                $editContent .= "{{customCreateSelect(\"$TableCol\",\"$TableCol\",'',\"$TableColLabel\",['1'=>'Active','0'=>'Inactive'],\$data->$TableCol)}}\n";
            else {
                $status = true;
                foreach ($all_foreignKey as $ctable => $cPK) {
                    if ($TableCol == $cPK) {
                        $baseName = str_replace("tbl_", "", $ctable) . 'Name';
                        $editContent .= "{!! getSelectForForeignColumn(\"$ctable\",\"$cPK\",\"$baseName\",'',\$data) !!}\n";
                        $status = false;
                        break;
                    }
                }
                if ($status)
                    $editContent .= "{{createText(\"$TableCol\",\"$TableCol\",\"$TableColLabel\",'',\$data->$TableCol)}}\n";
            }

            $editContent .= "</div>";
        endforeach;
        $editContent .= '  <div class="col-md-12">';
        $editContent .= "<?php createButton(\"btn-primary\",\"\",\"Submit\"); ?>\n";
        $editContent .= "</div>";
        $editContent .= " </form></div></div></div></div></div></div></div></div>\n@endsection";

        $path = base_path() . "/resources/views/omis/$folder/";
        $file = $path . "edit.blade.php";
        if (!file_exists("$path")) {
            mkdir("$path", 0777, true);
        }
        if (!file_exists($file)) {
            $file = fopen($file, 'w');
            fwrite($file, $editContent);
            fclose($file);
        }

        return $editContent;
    } //end of editContent method

    public static function ajaxEditContent($TableName, $directoryName)
    {
        $TableCols = DB::select("describe " . $TableName);
        $TableRows = DB::select("select * from " . $TableName);
        $folder = '';
        $routeName = '';
        if (!empty($directoryName)) {
            $folder .= strtolower($directoryName) . '/';
            $routeName .= strtolower($directoryName) . '.';
        }
        $routeName .= strtolower(str_replace("tbl_", "", $TableName));
        $folder .= str_replace("tbl_", "", $TableName);
        $Table_pk = str_replace("tbl_", "", $TableName) . "_id";
        $title = ucwords(str_replace("tbl_", "", $TableName));

        $all_columns = master_getColumn($TableName);
        $all_foreign_table =  getForeignTable($all_columns);
        $all_foreignKey = [];
        if ($all_foreign_table)
        foreach ($all_foreign_table as $key => $tablename) {
            $all_foreignKey[$tablename] = master_getColumn($tablename);
            $all_foreignKey[$tablename] = $all_foreignKey[$tablename][0] ?? null;
        }

        $editContent = "
        <form action=\"{{route('$routeName.update',[\$data->$Table_pk])}}\" id=\"updateCustomForm\">\n @csrf \n @method('PUT')\n";
        $editContent .= '<div class="row">';
        foreach ($TableCols as $key => $TableCol) :

            $TableCol = $TableCol->Field;
            if ($key == 0 || $TableCol == 'alias' || $TableCol == 'createdOn' || $TableCol == 'createdBy' || $TableCol == 'updatedBy' || $TableCol == 'created_at' || $TableCol == 'updated_at')
                continue;
            $TableColLabel = ucwords(str_replace("_", " ", $TableCol));
            $editContent .= '<div class="col-lg-6">';
            if ($TableCol == 'status')
                $editContent .= "{{customCreateSelect(\"$TableCol\",\"$TableCol\",'',\"$TableColLabel\",['1'=>'Active','0'=>'Inactive'],\$data->$TableCol)}}\n";
            else {
                $status = true;
                foreach ($all_foreignKey as $ctable => $cPK) {
                    if ($TableCol == $cPK) {
                        $baseName = str_replace("tbl_", "", $ctable) . 'Name';
                        $editContent .= "{!! getSelectForForeignColumn(\"$ctable\",\"$cPK\",\"$baseName\",'',\$data) !!}\n";
                        $status = false;
                        break;
                    }
                }
                if ($status)
                    $editContent .= "{{createText(\"$TableCol\",\"$TableCol\",\"$TableColLabel\",'',\$data->$TableCol)}}\n";
            }

            $editContent .= "</div>";
        endforeach;
        $editContent .= '  <div class="col-md-12">';
        $editContent .= "<?php createButton(\"btn-primary btn-update\",\"\",\"Submit\"); ?>\n";
        $editContent .= "</div>";
        $editContent .= " </form>";

        $path = base_path() . "/resources/views/omis/$folder/ajax/";
        $file = $path . "edit.blade.php";
        if (!file_exists("$path")) {
            mkdir("$path", 0777, true);
        }
        if (!file_exists($file)) {
            $file = fopen($file, 'w');
            fwrite($file, $editContent);
            fclose($file);
        }

        return $editContent;
    } //end of ajaxEditContent method

    public static function ajaxEditSimpleContent($TableName, $directoryName)
    {
        $TableCols = DB::select("describe " . $TableName);
        $TableRows = DB::select("select * from " . $TableName);
        $folder = '';
        $routeName = '';
        if (!empty($directoryName)) {
            $folder .= strtolower($directoryName) . '/';
            $routeName .= strtolower($directoryName) . '.';
        }
        $routeName .= strtolower(str_replace("tbl_", "", $TableName));
        $folder .= str_replace("tbl_", "", $TableName);
        $Table_pk = str_replace("tbl_", "", $TableName) . "_id";
        $title = ucwords(str_replace("tbl_", "", $TableName));
        $editContent = "
                <form >\n @csrf \n @method('PUT')\n";
        $editContent .= '<div class="row">';
        foreach ($TableCols as $key => $TableCol) :
            $TableCol = $TableCol->Field;
            if ($key == 0 || $TableCol == 'createdOn' || $TableCol == 'createdBy' || $TableCol == 'updatedBy' || $TableCol == 'created_at' || $TableCol == 'updated_at')
                continue;
            $TableColLabel = ucwords(str_replace("_", " ", $TableCol));
            $editContent .= '<div class="col-lg-6">';
            if ($TableCol == 'status')
                $editContent .= "{{customCreateSelect(\"$TableCol\",\"$TableCol\",'',\"$TableColLabel\",['1'=>'Active','0'=>'Inactive'],\$data->$TableCol)}}\n";
            else
                $editContent .= "{{createText(\"$TableCol\",\"$TableCol\",\"$TableColLabel\",'',\$data->$TableCol)}}\n";

            $editContent .= "</div>";
        endforeach;
        $editContent .= '  <div class="col-md-12">';
        $editContent .= "<?php createButton(\"btn-primary\",\"\",\"Submit\"); ?>\n";
        $editContent .= "</div>";
        $editContent .= " </form>";

        $path = base_path() . "/resources/views/omis/$folder/ajax/";
        $file = $path . "simple_edit.blade.php";
        if (!file_exists("$path")) {
            mkdir("$path", 0777, true);
        }
        if (!file_exists($file)) {
            $file = fopen($file, 'w');
            fwrite($file, $editContent);
            fclose($file);
        }
        return $editContent;
    } //end of ajaxEditContent method

    public static function ajaxShowContent($TableName, $directoryName)
    {
        $TableCols = DB::select("describe " . $TableName);
        $TableRows = DB::select("select * from " . $TableName);
        $folder = '';
        $routeName = '';
        if (!empty($directoryName)) {
            $folder .= strtolower($directoryName) . '/';
            $routeName .= strtolower($directoryName) . '.';
        }
        $routeName .= strtolower(str_replace("tbl_", "", $TableName));
        $folder .= str_replace("tbl_", "", $TableName);
        $Table_pk = str_replace("tbl_", "", $TableName) . "_id";
        $title = ucwords(str_replace("tbl_", "", $TableName));
        $showContent = "<div class=\"offcanvas-header border-bottom border-light\">
        <h5 class=\"offcanvas-title\" id=\"offcanvasTopLabel\">Show $title</h5><button type=\"button\" class=\"btn-close\"
            data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
    </div>
    <div class=\"offcanvas-body\" data-simplebar>
        <div class=\"nk-block-head-content w-100\">
            <div class=\"d-flex justify-content-between pb-4\">
    
                <h2>$title Details</h2>
                <button class=\"btn btn-primary print_pdf\">Print PDF</button>
            </div>
            <div class=\"card w-100\">
                <div class=\"p-5\">
    
                    <div class=\"card-head\">
                        <h2 class=\"text-center\">{{\$data['" . $TableCols['1']->Field . "']}}</h2>
                    </div>
                    <div class=\"card-body\">
                ";

        foreach ($TableCols as $key => $TableCol) :
            $TableCol = $TableCol->Field;
            if ($key == 0 || $TableCol == 'createdOn' || $TableCol == 'createdBy' || $TableCol == 'updatedBy' || $TableCol == 'created_at' || $TableCol == 'updated_at')
                continue;
            $TableColLabel = ucwords(str_replace("_", " ", $TableCol));
            if ($TableCol == 'status')
                $showContent .= "<p><b>Status :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span
                class=\"{{\$data->$TableCol == 1 ? 'text-success' : 'text-danger'}}\">{{\$data->$TableCol == 1 ? 'Active' : 'Inactive'}}</span></p>";
            else
                $showContent .= '<p><b>' . $TableColLabel . " :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{\$data->$TableCol}}</span></p>";

        endforeach;
        $showContent .= "<div class=\"d-flex justify-content-between\">
        <div>
            <p><b>Created On :</b>&nbsp;&nbsp;&nbsp;<span>{{\$data->created_at}}</span></p>
            <p><b>Created By :</b>&nbsp;&nbsp;&nbsp;<span>{{\$data->createdBy}}</span></p>
        </div>
        <div>
            <p><b>Updated On :</b>&nbsp;&nbsp;&nbsp;<span>{{\$data->updated_at}}</span></p>
            <p><b>Updated By :</b>&nbsp;&nbsp;&nbsp;<span>{{\$data->updatedBy}}</span></p>

        </div>
    </div>
    </div>
            </div>
        </div>
    </div>
</div>";


        $path = base_path() . "/resources/views/omis/$folder/ajax/";
        $file = $path . "show.blade.php";
        if (!file_exists("$path")) {
            mkdir("$path", 0777, true);
        }
        if (!file_exists($file)) {
            $file = fopen($file, 'w');
            fwrite($file, $showContent);
            fclose($file);
        }
        return $showContent;
    }

    public static function dataTable($TableRows, $TableName)
    {
        $Table_pk = str_replace("tbl_", "", $TableName) . "_id";
        $TableCols = array_keys((array)$TableRows[0]);

        //BibClass::pre($TableCols);
    ?>
        <table class="datatable-init table" data-nk-container="table-responsive table-border">
            <thead>
                <tr>
                    <?php foreach ($TableCols as $TableCol) : //echo $TableCol;
                    ?>
                        <?php switch ($TableCol) {
                            case $Table_pk:
                            case 'created_by':
                            case 'created_on':
                            case 'remarks':
                            case 'status':
                            case 'created_at':
                            case 'updated_at':
                                break;
                            default:
                        ?>
                                <th class="text-nowrap"><span class="overline-title"><?php echo label($TableCol); ?></span>
                                </th>
                        <?php
                        }
                        ?>

                    <?php endforeach; ?>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($TableRows as $TableRow) : ?>
                    <tr>
                        <?php foreach ($TableCols as $TableCol) : //echo $TableCol;
                        ?>
                            <?php switch ($TableCol) {
                                case $Table_pk:
                                case 'created_by':
                                case 'created_on':
                                case 'remarks':
                                case 'status':
                                case 'created_at':
                                case 'updated_at':
                                    break;
                                default:
                            ?>
                                    <th class="text-nowrap"><span class="overline-title"><?php echo $TableRow->$TableCol; ?></span>
                                    </th>
                            <?php
                            }
                            ?>

                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>


            </tbody>
        </table>

<?php
    }
    public static function  tableEntryForm($tableName)
    {
        $Table_pk = str_replace("tbl_", "", $tableName) . "_id";
        $tableFields = DB::select("describe " . $tableName);
        foreach ($tableFields as $tableField) {
            $tableField = $tableField->Field;
            switch ($tableField) {
                case $Table_pk:
                case 'status':
                case 'created_at':
                case 'updated_at':
                    break;
                default:
                    createInput("text", $tableField, $tableField, $tableField, "", "", "");
            }
        }
    }
}
