<form action="{{ route('hr.employeementtimeline.store') }}" id="storeCustomForm">
    @csrf
    <div class="row">
        <div class="col-lg-6">{{ customCreateSelect('employee_id', 'employee_id', '','Employee', getEmployees()->pluck('full_name','employee_id')->toArray())  }}
        </div>
        <div class="col-lg-6">{{ createDate('startDate', 'startDate', 'Start Date') }}
        </div>
        <div class="col-lg-6">{{ createDate('endDate', 'endDate', 'End Date') }}
        </div>
        <div class="col-lg-6">{{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive']) }}
        </div>
        <div class="col-lg-12">
            {{ createLabel('remarks', 'form-label col-form-label', 'Remarks') }}{{ createTextArea('remarks', 'remarks', 'remarks', '', '') }}
        </div> <br>
        <div class="col-md-12"><?php createButton('btn-primary btn-store', '', 'Submit'); ?>
        </div>
    </div>
</form>
