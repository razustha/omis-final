<form action="{{ route('hr.designation.store') }}" id="storeCustomForm">
    @csrf
    <div class="row">
        <div class="col-lg-4">{{ createText('designationName', 'designationName', 'Designation Title') }}
        </div>

        <div class="col-lg-4">{{ createText('rank', 'rank', 'Designation Rank') }}
        </div>

        <div class="col-lg-4">{{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive']) }}
        </div>
        <div class="col-lg-12">
            {{ createLabel('remarks', 'form-label col-form-label', 'Remarks') }}{{ createTextArea('remarks', 'remarks', 'remarks', '', '') }}
        </div>
        <br>
        <div class="col-md-12"><?php createButton('btn-primary btn-store', '', 'Submit'); ?>
        </div>
    </div>
</form>
