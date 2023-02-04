@extends('omis.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Add Users</h1>

                            </div>
                            <div class="nk-block-head-content">
                                <ul class="d-flex">
                                    <li>
                                        <a href="{{ route('setting.users.index') }}"
                                            class="btn btn-md d-md-none btn-primary">
                                            <em class="icon ni ni-plus"></em>
                                            <span>View Cities</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="nk-block">

                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('setting.role.store') }}" id="storeCustomForm">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            {{ createText('name', 'name', 'Role Name', '', $role->name ?? '') }}
                                        </div>


                                        <div class="col-lg-6">
                                            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive'], $role->status ?? '') }}
                                        </div>
                                        <div class="col-lg-12">
                                            {{ createLabel('remarks', 'form-label col-form-label', 'Remarks') }}
                                            {{ createTextArea('remarks', 'remarks', 'remarks', '', $role->remarks ?? '') }}
                                        </div>
                                        <div class="col-lg-6"><?php createButton('btn-primary btn-store', '', 'Add'); ?>
                                        </div>
                                        @php
                                            $moduleName = '';
                                            $moduleId = [];
                                            $counter = 0;
                                        @endphp
                                        @foreach ($groupPermissions as $chunk)
                                            <?php
                                            $chunkk = $chunk;
                                            foreach ($chunkk as $titlee => $groupp) {
                                                foreach ($groupp as $permission) {
                                                    if (empty($moduleId)) {
                                                        $moduleId[] = $permission->module_id;
                                                        echo "<h2 class='text-primary custom-module'>$permission->moduleName</h2>";
                                                        break;
                                                    }
                                                    // echo "<h4>$permission->moduleName</h4>";
                                                    // print_r($moduleId);
                                                    if (!in_array($permission->module_id, $moduleId)) {
                                                        $moduleId[] = $permission->module_id;
                                                        echo "<h2 class='text-primary custom-module'>$permission->moduleName</h2>";
                                                        break;
                                                    }
                                                }
                                                break;
                                            }
                                            ?>

                                            <div class="row mt-3 g-3">
                                                @foreach ($chunk as $title => $group)
                                                    <div class="col-xs-6 col-sm-4 col-md-4">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                data-checkbox-group="{{ Str::slug($title) }}"
                                                                data-role="selectall">
                                                            <label class="form-check-label h5 font-weight-bold text-danger"
                                                                for="permission">{{ ucfirst($title) }}</label>

                                                        </div>
                                                        @foreach ($group as $permission)
                                                            <div class="form-group form-check">

                                                                <input type="checkbox" class="form-check-input"
                                                                    name="permissions[{{ $permission->slug }}]"
                                                                    value="{{ $permission->id }}"
                                                                    {{ isset($role) &&$role->permissions()->whereSlug($permission->slug)->first()? 'checked': '' }}
                                                                    data-checkbox-group="{{ Str::slug($title) }}"
                                                                    data-role="select">
                                                                <label class="form-check-label"
                                                                    for="{{ $permission->slug }}">{{ $permission->slug }}</label>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {

            $("[data-role=selectall]").change(function() {
                var $thisgroup = $("[data-checkbox-group=" + $(this).data('checkbox-group') +
                    "][data-role=select]");
                if (this.checked) {
                    $thisgroup.each(function() {
                        this.checked = true;
                    })
                } else {
                    $thisgroup.each(function() {
                        this.checked = false;
                    })
                }
            });

            $("[data-checkbox-group]").change(function() {
                var $thisgroup = $("[data-checkbox-group=" + $(this).data('checkbox-group') +
                    "][data-role=select]");
                var $thisselectall = $("[data-checkbox-group=" + $(this).data('checkbox-group') +
                    "][data-role=selectall]");
                if ($(this).is(":checked")) {
                    var isAllChecked = 0;
                    $thisgroup.each(function() {
                        if (!this.checked)
                            isAllChecked = 1;
                    });
                    if (isAllChecked == 0) {
                        $thisselectall.prop("checked", true);
                    }
                } else {
                    $thisselectall.prop("checked", false);
                }
            });

            $('.card-body').on('click', function(e) {
                $('[data-toggle="popover"]').each(function() {
                    if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover')
                        .has(e.target).length === 0) {
                        $(this).popover('hide');
                    }
                });
            });

            $("[data-checkbox-group][data-role=select]").trigger('change');
        });
    </script>
    <style>
        .custom-module {
            margin-top: 1rem;
            padding: 1rem;
            background-color: antiquewhite;
        }
    </style>
@endsection
