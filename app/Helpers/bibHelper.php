        <?php

        use App\Models\Country\Country;
        use App\Models\Hr\Employee;
        use App\Models\Master\Country as MasterCountry;
        use App\Models\Master\District;
        use App\Models\Master\Module;
        use App\Models\Master\State;
        use App\Models\Role;
        use App\Models\Settings\OrganizationSettings;
        use App\Models\Setting\Setting;
        use App\Models\Settings\NotificationSettings;
        use App\Models\Settings\UserSettings;
        use App\Models\Log\OperationLog;
        use App\Models\Log\ErrorLog;
        use Illuminate\Support\Facades\DB;

        function label($text)
        //here we will write translator code
        //below is only example, we have to use session to check current language setting to use or not using the following dictonary
        //this dictonary must be fetched from settings in main application
        {
            $dictonary = array(
                "Command" => "प्रयोग",
                "Industry Name" => "उद्योगको नाम",
                "Industry Address" => "उद्योगको ठेगाना",
                "Phone No" => "फोन नं "
            );
            if (array_key_exists($text, $dictonary)) $text = $dictonary[$text];
            echo $text;
        }
        function pre($data)
        {
        ?>
            <pre>
                <?php print_r($data); ?>
            </pre>

        <?php
        }

        function nullableFields($table)
        {
            $columns = DB::select("describe $table");
            unset($columns[0]);
            foreach ($columns as $column) {
                if ($column->Type == "varchar(255)") {
                    $q = "ALTER TABLE $table CHANGE $column->Field $column->Field VARCHAR(255) NULL DEFAULT NULL";
                    //echo $q;die;
                    DB::select($q);
                }
                if ($column->Type == "text") {
                    $q = "ALTER TABLE $table CHANGE $column->Field $column->Field text NULL DEFAULT NULL";
                    //echo $q;die;
                    DB::select($q);
                }
                if ($column->Type == "int(11)") {
                    $q = "ALTER TABLE $table CHANGE $column->Field $column->Field int(11) NULL DEFAULT NULL";
                    //echo $q;die;
                    DB::select($q);
                }
                if ($column->Type == "date") {
                    $q = "ALTER TABLE $table CHANGE $column->Field $column->Field date NULL DEFAULT NULL";
                    //echo $q;die;
                    DB::select($q);
                }
            }
        }



        function createInput($type, $name, $id, $display, $class = "", $value = "", $placeHolder = "", $min = "")
        {
        ?>
            <label for="<?php echo $id; ?>" class="<?php echo $class; ?>">
                <?php echo label($display); ?>
            </label>
            <input type="<?php echo $type; ?>" id="<?php echo $id; ?>" min="<?php echo $min; ?>" placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-control <?php $class; ?>" value="<?php echo $value ? $value : ''; ?>">
        <?php
        }
        ?>
        <?php
        function createPassword($name, $id, $display, $class = "", $value = "", $placeHolder = "", $readonly = "")
        {
        ?>
            <label for="<?php echo $id; ?>" class="form-label col-form-label"> <?php echo label($display); ?> </label>
            <div class="form-control-wrap">
                <input type="password" id="<?php echo $id; ?>" <?php echo $readonly; ?> placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-control <?php $class; ?>" value="<?php echo $value; ?>">
            </div>
        <?php
        }
        ?>
        <?php
        function createEmail($name, $id, $display, $class = "", $value = "", $placeHolder = "", $readonly = "")
        {
        ?>
            <label for="<?php echo $id; ?>" class="form-label col-form-label"> <?php echo label($display); ?> </label>
            <div class="form-control-wrap">
                <input type="email" id="<?php echo $id; ?>" <?php echo $readonly; ?> placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-control <?php $class; ?>" value="<?php echo $value; ?>">
            </div>
        <?php
        }
        ?>

        <?php
        function createText($name, $id, $display, $class = "", $value = "", $placeHolder = "", $readonly = "")
        {
            $display = trans('lang.'.$display);
            // $add = trans('lang.Add');
        ?>
            <label for="<?php echo $id; ?>" class="form-label col-form-label"> <?php echo label($display); ?> </label>
            <div class="form-control-wrap">
                <input type="text" id="<?php echo $id; ?>" <?php echo $readonly; ?> placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-control <?php $class; ?>" value="<?php echo $value; ?>">
            </div>
        <?php
        }
        ?>



        <?php
        function createNumber($name, $id, $display, $class = "", $value = "", $placeHolder = "")
        {
        ?>
            <label for="<?php echo $id; ?>" class="form-label col-form-label"> <?php echo label($display); ?> </label>
            <input type="number" id="<?php echo $id; ?>" placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-control <?php $class; ?>" value="<?php echo $value; ?>">
        <?php
        }
        ?>

        <?php
        function createHidden($name, $id, $display, $class = "", $value = "", $placeHolder = "")
        {
        ?>
            <label for="<?php echo $id; ?>" class="form-label col-form-label"> <?php echo label($display); ?> </label>
            <input type="hidden" id="<?php echo $id; ?>" placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-control <?php $class; ?>" value="<?php echo $value; ?>">
        <?php
        }
        ?>

        <?php
        function createColor($name, $id, $display, $class = "", $value = "", $placeHolder = "")
        {
        ?>
            <label for="<?php echo $id; ?>" class="form-label col-form-label"> <?php echo label($display); ?> </label>
            <input type="color" id="<?php echo $id; ?>" placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-control <?php $class; ?>" value="<?php echo $value; ?>">
        <?php
        }
        ?>

        <?php
        function createDate($name, $id, $display, $class = "", $value = "", $placeHolder = "")
        {
        ?>
            <label for="<?php echo $id; ?>" class="form-label col-form-label"> <?php echo $display; ?> </label>
            <input type="date" id="<?php echo $id; ?>" placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-control <?php $class; ?>" value="<?php echo $value; ?>">
        <?php
        }
        ?>

        <?php
        function createRadio($name, $id, $class = "", $values = array())
        {
        ?>
            <?php $sn = 0;
            for ($i = 0; $i < sizeof($values); $i++) : $v = $values[$i][0];
                $d = $values[$i][1];
                $sn++; ?>
                <?php if ($d != "") : ?> <div class="d-flex justify-content-left align-items-center form-check form-check-inline"> <input type="radio" id="<?php echo $id . $sn; ?>" name="<?php echo $name; ?>" class="form-check-input <?php $class; ?>" value="<?php echo $v; ?>"><label for="<?php echo $id . $sn; ?>" class="form-label col-form-label ms-2 mt-1 main-head"> <?php echo $d; ?> </label><?php endif; ?>
                    </div>
                <?php endfor; ?>

            <?php
        }
            ?>


            <?php
            //Another Radio for non bolds
            function createRadio2($name, $id, $class = "", $values = array())
            {
            ?>

                <?php $sn = 0;
                for ($i = 0; $i < sizeof($values); $i++) : $v = $values[$i][0];
                    $d = $values[$i][1];
                    $sn++; ?>
                    <?php if ($d != "") : ?> <div class="d-flex justify-content-left align-items-center form-check form-check-inline"> <input type="radio" id="<?php echo $id . $sn; ?>" name="<?php echo $name; ?>" class="form-check-input <?php $class; ?>" value="<?php echo $v; ?>"><label for="<?php echo $id . $sn; ?>" class="form-label col-form-label ms-2 mt-1"> <?php echo $d; ?> </label><?php endif; ?>
                        </div>

                    <?php endfor; ?>

                <?php
            }
                ?>


                <?php
                //Select Dropdown
                function createSelect($name, $id, $class = "", $display, $values = array())
                {
                ?>
                    <select class="js-select <?php $class; ?>" name="<?php echo $name; ?>" aria-label="Default select example" data-search="true" data-sort="false">
                    <option value="">Select Option</option>
                        <?php $sn = 0;
                        for ($i = 0; $i < sizeof($values); $i++) : $v = $values[$i][0];
                            $d = isset($values[$i]) ? $values[$i] : "";
                            $sn++; ?>

                            <option value="<?php echo $v; ?>"><?php echo ($d) ? $d : $v; ?></option>

                        <?php endfor; ?>
                    </select>

                <?php
                }
                function customCreateSelect($name, $id, $class = "form-control", $display, $values = array(), $keyValue = '')
                {
                    $display = trans('lang.'.$display);
                    // $add = trans('lang.Add');
                ?>

                    <label for="<?php echo $id; ?>" class="form-label col-form-label"> <?php echo label($display); ?> </label>

                        <select class="form-select <?php echo $class ?>" name="<?php echo $name; ?>" id="<?php echo $name; ?>" aria-label="Default select example">
                        <option value="">Select Option</option>
                            <?php foreach ($values as $key => $value) { ?>
                                <option value="<?= $key ?>" <?php echo $keyValue == $key ? 'selected' : '' ?>><?= $value ?></option>
                            <?php } ?>
                        </select>





                    <!-- <div class="input-group">
                        <button class="btn btn-outline-primary" type="button">Button</button>
                        <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                             <option selected>Choose...</option>
                             <option value="1">One</option>
                             <option value="2">Two</option>
                             <option value="3">Three</option>
                            </select>
                        </div> -->



                <?php            }
                //End of Select
                ?>



                <?php
                //Create Checkbox
                function createCheck($name, $id, $display, $class = "", $value = "", $placeHolder = "")
                {
                ?>
                    <div class="form-check">
                        <input type="checkbox" id="<?php echo $id; ?>" placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-check-input <?php $class; ?>" value="<?php echo $value; ?>">
                        <label for="<?php echo $id; ?>" class="form-check-label"> <?php echo $display; ?> </label>
                    </div>
                <?php
                }
                ?>


                <?php
                //for label
                function createLabel($for = "", $class = "", $display)
                {
                    $display = trans('lang.'.$display);
                    // $add = trans('lang.Add');
                ?>
                    <label for="<?php echo $for; ?>" class="<?php echo $class; ?>">
                        <?php echo label($display); ?>
                    </label>
                <?php
                }
                ?>

                <?php

                function actionButton($name, $display = "", $url, $class = "", $extra = "")
                {
                ?>
                    <a href="<?php echo $url; ?>" name="<?php echo $name; ?>" data-title="<?php echo $name; ?>" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft <?php echo $class; ?>" <?php echo $extra; ?>><?php echo $display; ?></a>
                <?php
                }

                function actionCanvasButton($name = "", $class = "", $dataTarget = "", $iconClass = "", $route = "", $id)
                {
                ?>

                    <?php if ($iconClass == "edit") {
                    ?>
                        <button class="btn btn-color-primary btn-hover-primary btn-icon btn-soft <?php echo $class; ?>" name="<?php echo $name; ?>" data-route="<?php echo route($route, $id); ?>" data-bs-toggle="offcanvas" data-bs-target="#<?php echo $dataTarget; ?>"> <em class="icon ni ni-<?php echo $iconClass; ?>"></em></button>
                    <?php
                    } else {
                    ?>
                        <button class="btn btn-color-success btn-hover-success btn-icon btn-soft <?php echo $class; ?>" name="<?php echo $name; ?>" data-route="<?php echo route($route, $id); ?>" data-bs-toggle="offcanvas" data-bs-target="#<?php echo $dataTarget; ?>"> <em class="icon ni ni-<?php echo $iconClass; ?>"></em></button>

                    <?php
                    }
                    ?>


                <?php
                }

                //delete
                function deleteCanvasButton($name = "", $class = "btn-hover-danger", $route = "", $id)
                {
                ?>
                    <button type="button" data-route="<?php echo route($route, $id); ?>" class="btn btn-color-danger <?php echo $class; ?>  btn-icon btn-soft"><em class="icon ni ni-trash"></em></button>
                <?php
                }
                //for button
                function createButton($class = "", $type = "", $display)
                {
                ?>
                    <button class="mt-3 btn btn-primary  <?php echo $class; ?>" type="submit">
                        <?php echo $display ?>
                    </button>
                <?php
                }

                function createCanvasButton($class = "", $type = "", $display, $route)
                {
                    $display = trans('lang.'.$display);
                    $add = trans('lang.Add');
                    if(App::getLocale() == 'ne')
                    {
                ?>
                    <button class="mt-3 btn btn-primary  <?php echo $class; ?>" data-route="<?php echo route($route); ?>" data-bs-toggle="offcanvas" data-bs-target="#addOffcanvas"> <em class="icon ni ni-plus"></em> <?php echo $display ?> <?php echo $add ?>
                    </button>
                <?php
                }else{
                    ?>
                    <button class="mt-3 btn btn-primary  <?php echo $class; ?>" data-route="<?php echo route($route); ?>" data-bs-toggle="offcanvas" data-bs-target="#addOffcanvas"> <em class="icon ni ni-plus"></em><?php echo $add ?> <?php echo $display ?>
                    </button>
                <?php 
                }
                }
                ?>


                <?php
                function createTextArea($name, $class = "", $id = "", $row = "", $display = "")
                {
                ?>
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <textarea class="form-control text-area" name="<?php echo $name;?>" id="<?php echo $id;?>" rows="<?php echo $row;?>"><?php if(isset($display)){echo strip_tags($display);} ?></textarea>
                        </div>
                    </div>

                <?php
                }
                ?>

                <?php
                function inputwithbottommargin($type, $name, $id, $display, $class = "", $value = "", $placeHolder = "")
                {
                ?>
                    <input type="<?php echo $type; ?>" id="<?php echo $id; ?>" placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-control mb-2" value="<?php echo $value; ?>">
                <?php
                }
                ?>

                <?php
                function master_getColumn($tableName)
                {
                    return Schema::getColumnListing($tableName);
                }

                function master_storeColumn($tableName, $data)
                {
                    $allcolumns = Schema::getColumnListing($tableName);

                    $datakey = array_keys($data);
                    // dd($allcolumns, $data);
                    foreach ($data as $key => $value) {
                        if (in_array($key, $allcolumns)) {
                            DB::table($tableName)->insert($data);
                            return true;
                        }
                    }
                }

                function master_updateColumn($tableName, $data, $id)
                {
                    $TablePK = mid($tableName, 4) . "_id";
                    $allcolumns = Schema::getColumnListing($tableName);

                    $datakey = array_keys($data);
                    // dd($allcolumns, $data);
                    foreach ($data as $key => $value) {
                        if (in_array($key, $allcolumns)) {
                            DB::table($tableName)->where($tablePK, $id)->update($data);
                            return true;
                        }
                    }
                }

                function getForeignTable($all_columns)
                {
                    $string = '_id';
                    $foreign = [];
                    foreach ($all_columns as $key => $column) {
                        if (str_contains($column, $string) !== FALSE) { // Yoshi version
                            $foreign[] = $column;
                        }
                    }
                    unset($foreign[0]);
                    $strArray = [];
                    foreach ($foreign as $key => $foreignKey) {
                        $strArray[$key] = explode('_id', $foreignKey);
                        unset($strArray[$key][1]);
                    }
                    if ($strArray) {
                        $all_Foreign_Key_Table = call_user_func_array('array_merge', $strArray);
                        foreach ($all_Foreign_Key_Table as $column) {
                            $tableName[] = "tbl_" . $column;
                        }
                        return $tableName;
                    } else {
                        return [];
                    }
                }

                /**
                 * $tableName = Name of table
                 * $pk = primary key of table
                 * $name = table select column name
                 * $class = extra class
                 * $data = Existing data or for edit case showing selected data
                 * $display = Displaying name or showing label name.
                 */
                function getSelectForForeignColumn($tableName = "", $pk, $name, $class = "", $data = null, $display = null)
                {
                    $systems =  DB::table($tableName)->where('status', '<>', -1)->orderBy($pk, 'asc')->pluck($name, $pk);
                    if (!$data) {
                        customCreateSelect($pk, $pk, null, $display ?? $name, $systems, null);
                    } else {
                        customCreateSelect($pk, $pk, null, $display ?? $name, $systems, $data->$pk);
                    }
                }



                function usersetting($query)
                {
                    $usersetting = UserSettings::fetch($query)->where('user_id', auth()->user()->id)->first();
                    return $usersetting ? $usersetting->value : null;
                }

                function organizationSetting($query)
                {
                    $organizationSetting = OrganizationSettings::fetch($query)->first();
                    return $organizationSetting ? $organizationSetting->value : null;
                }

                function notificationSetting($query)
                {
                    $notificationSetting = NotificationSettings::fetch($query)->first();
                    return $notificationSetting ? $notificationSetting->value : null;
                }

                function includeHelper()
                {
                }

                function getAjaxCreateModalContent($controllerName)
                {
                    return "App\http\Controllers\\$controllerName"::getAjaxContent('create');
                }

                /**
                 * ---------------------------------------------
                 * |            Country                         |
                 * ----------------------------------------------
                 */
                // function getCountries()
                // {
                //     return Country::getCountries();
                // }

                /**
                 * ---------------------------------------------
                 * |            State                         |
                 * ----------------------------------------------
                 */
                function getStates()
                {
                    return State::getStates();
                }

                function getStatesByCountryId($country_id)
                {
                    return State::getStatesByCountryId($country_id);
                }

                /**
                 * ---------------------------------------------
                 * |            District                        |
                 * ----------------------------------------------
                 */
                function getDistricts()
                {
                    return District::getDistricts();
                }

                function getDistrictsByStateId($state_id)
                {
                    return District::getDistrictsByStateId($state_id);
                }

                //Generate Slug

                function slugify($text, string $divider = '-')
                {
                    // replace non letter or digits by divider
                    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

                    // transliterate
                    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

                    // remove unwanted characters
                    $text = preg_replace('~[^-\w]+~', '', $text);

                    // trim
                    $text = trim($text, $divider);

                    // remove duplicate divider
                    $text = preg_replace('~-+~', $divider, $text);

                    // lowercase
                    $text = strtolower($text);

                    if (empty($text)) {
                        return 'n-a';
                    }

                    return $text;
                }

                function getRoles()
                {
                    return Role::whereNotIn('id',[1,2])->get();
                }
                function getEmployees()
                {
                    return Employee::where('status', '<>', '-1')->get();
                }

                function getModules()
                {
                    return Module::where('status', '<>', '-1')->where('module_id','<>','1')->get();
                }

                function getReportingTo($department_id)
                {
                    return Employee::where('status', '<>', -1)->where('department_id', $department_id)->where('is_head', 'manager')->orderBy('created_at', 'desc')->get();
                }

                function getEmployeeHasNoLogin()
                {
                    return Employee::where('status', '<>', -1)->where('is_login', 0)->get();
                }

                //get unique Operation number
                function getOperationNumber()
                {
                    $startNumber= date('YmdHis').rand(1000,9999);
                    $isExists = OperationLog::where('operation_end_no',$startNumber)->first();
                    while($isExists){
                        $startNumber= date('YmdHis').rand(100000,999999);
                        $isExists = OperationLog::where('operation_end_no',$startNumber)->first();
                    }
                        return $startNumber;
                }

                /**
                 * function createLog(operation start number, operation end number, model class full name with path,model Id for create and upodate operation, operation Name, previous values in array, new values in array);
                 */
                function createOperationLog($startOperationNumber,$endOperationNumber,$modelName,$modelId,$operationName,$previousValues,$newValues)
                {
                    $operationId = getOperationNumber();
                    $user_id = auth()->user()->id;
                    OperationLog::create([
                        'user_id'=> $user_id,
                        'operation_start_no'=> $startOperationNumber,
                        'operation_end_no'=> $endOperationNumber,
                        'model_name' => $modelName,
                        'model_id' => $modelId,
                        'operation_name' => $operationName,
                        'previous_values' => $previousValues ? json_encode($previousValues) : null,
                        'new_values' => $newValues ? json_encode($newValues) : null,
                    ]);
                }

                function createErrorLog($controllerName,$methodName,$errors)
                {
                    $user_id = auth()->user()->id;
                    ErrorLog::create([
                        'user_id'=> $user_id,
                        'controller_name'=> $controllerName,
                        'method_name'=> $methodName,
                        'errors' => $errors,
                    ]);
                }

                function createErrorParagraph($name, $class=null)
                {
                    echo "<p id='error_$name' class='text-danger custom-error $class'></p>";
                }

                ?>
