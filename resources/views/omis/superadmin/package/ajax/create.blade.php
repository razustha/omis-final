<form action="{{ route('superadmin.package.store') }}" id="storeCustomForm">
    @csrf
    <div class="row">
        <div class="col-lg-6">{{ createText('name', 'name', 'Name') }}
        </div>
        <div class="col-lg-6">{{ createText('price', 'price', 'Price') }}
        </div>


        <div class="col-lg-3">{{ createNumber('duration', 'duration', 'Duration in Year') }}
        </div>
        <div class="col-lg-3">{{ createNumber('loginLimitNo', 'loginLimitNo', 'User Login Limit') }}
        </div>
        <div class="col-lg-6">{{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive']) }}
        </div>
        <!-- <div class="col-lg-6">{{ createText('remarks', 'remarks', 'Remarks') }}
        </div> -->
        <div class="col-lg-12">
            {{ createLabel('description', 'form-label col-form-label', 'Description') }}{{ createTextArea('description', 'description', 'Description', '', '') }}
        </div>
        <br>
        <br>

        <div class="col-lg-12 mt-4 mb-1">
            <h3>Features</h3>
        </div>
        <div class="col-lg-12 mt-1 mb-3">
            <h7><input type="checkbox" onclick="checkUncheck(this)" class="form-check-input">&nbsp;&nbsp;Selects All
            </h7>
        </div>

        <div class="col-lg-6">
            <?php
            $count = 1;
            $totalModulle = count(getModules());
            ?>
            @foreach (getModules() as $module)
                <div class="form-check">
                    <input type="checkbox" id="{{ $module->moduleName }}" placeholder="" name="module[]"
                        class="form-check-input " value="{{ $module->module_id }}">
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





        <div class="col-md-12">
            <?php createButton('btn-primary btn-store', '', 'Submit'); ?>
        </div>
    </div>
</form>
<script>
    $('.feature').select2({
        tags: true
    });

    function checkUncheck(checkBox) {

        get = document.getElementsByName('module[]');

        for (var i = 0; i < get.length; i++) {

            get[i].checked = checkBox.checked;
        }
    }
</script>
