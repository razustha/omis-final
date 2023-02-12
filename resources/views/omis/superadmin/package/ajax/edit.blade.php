<form action="{{ route('superadmin.package.update', [$data->package_id]) }}" id="updateCustomForm">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-6">{{ createText('name', 'name', 'Name', '', $data->name) }}
        </div>
        <div class="col-lg-6">{{ createText('price', 'price', 'Price', '', $data->price) }}
        </div>
        <div class="col-lg-3">{{ createNumber('duration', 'duration', 'Duration in Years', '', $data->duration) }}
        </div>
        <div class="col-lg-3">{{ createNumber('loginLimitNo', 'loginLimitNo', 'User Login Limit', '', $data->loginLimitNo) }}
        </div>
        <div class="col-lg-6">
            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive'], $data->status) }}
            <!-- </div><div class="col-lg-6">{{ createText('remarks', 'remarks', 'Remarks', '', $data->remarks) }} -->
        </div>
        <div class="col-lg-12">
            {{ createLabel('description', 'form-label col-form-label', 'Description') }}{{ createTextArea('description', 'description', 'Description', '', $data->description) }}
        </div>

        <div class="col-lg-12 mt-4 mb-1">
            <h3>Features</h3>
        </div>
        <div class="col-lg-12 mt-1 mb-3">
            <h5><input type="checkbox" class="form-check-input" onclick="checkUncheck(this)">&nbsp; &nbsp;Check All</h5>
        </div>

        <div class="col-lg-6">
            <?php
            $count = 1;
            $totalModulle = count(getModules());
            ?>
            @foreach (getModules() as $module)
                <div class="form-check">
                    <input type="checkbox" id="{{ $module->moduleName }}" placeholder="" name="module[]"
                        class="form-check-input " value="{{ $module->module_id }}"
                        {{ in_array($module->module_id, $feature) ? 'checked' : '' }}>
                    <label for="{{ $module->moduleName }}" class="form-check-label"> {{ $module->moduleName }}
                    </label>
                </div>

                @if ($count % 5 == 0 && $totalModulle > 5)
        </div>
        <div class="col-lg-6">
            @endif
            <?php $count++; ?>
            @endforeach
        </div>

        <div class="col-md-12"><?php createButton('btn-primary btn-update', '', 'Submit'); ?>
        </div>
    </div>
</form>
<script>
    function checkUncheck(checkBox) {

        get = document.getElementsByName('module[]');

        for (var i = 0; i < get.length; i++) {

            get[i].checked = checkBox.checked;
        }
    }
</script>
