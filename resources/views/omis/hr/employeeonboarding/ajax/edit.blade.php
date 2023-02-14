<form action="{{ route('hr.employeeonboarding.update', [$data->employeeonboarding_id]) }}" id="updateCustomForm">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-4">
        {{ customCreateSelect('employee_id','employee_id','','Employee',getEmployees()->pluck('full_name', 'employee_id')->toArray(),$data->employee_id) }}
        </div>
        <div class="col-lg-4">
        {!! getSelectForForeignColumn('tbl_department', 'department_id', 'departmentName', '', $data, 'Department Name') !!}
        </div>
        <div class="col-lg-4"> {!! getSelectForForeignColumn('tbl_designation', 'designation_id', 'designationName', '', $data, 'Designation') !!}
        </div>
        <div class="col-lg-4">{{ createText('workingShift', 'workingShift', 'Working Shift', '', $data->workingShift) }}
        </div>
        <div class="col-lg-4">{{ createText('workingHour', 'workingHour', 'Working Hour', '', $data->workingHour) }}
        </div>
        <div class="col-lg-4">{{ createText('workingMode', 'workingMode', 'Working Mode', '', $data->workingMode) }}
        </div>
        <div class="col-lg-6">{{ createDate('joinDate', 'joinDate', 'Join Date', '', $data->joinDate) }}
        </div>
        <div class="col-lg-6">{{ createText('dayFrom', 'dayFrom', 'Day From', '', $data->dayFrom) }}
        </div>
        <div class="col-lg-6">{{ createText('dayTo', 'dayTo', 'Day To', '', $data->dayTo) }}
        </div>
        {{-- <div class="col-lg-4">
            {{ createText('departmentLogo', 'departmentLogo', 'Department Logo', '', $data->departmentLogo) }}
        </div> --}}
        <div class="col-lg-6">
            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive'], $data->status) }}
        </div>
        <div class="col-lg-12">
            {{ createLabel('remarks', 'form-label col-form-label', 'Remarks') }}{{ createTextArea('remarks', 'remarks', 'Remarks', '', $data->remarks) }}
        </div>
        <div class="col-md-12"><?php createButton('btn-primary btn-update', '', 'Update'); ?>
        </div>
</div>
</form>
