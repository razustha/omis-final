<form action="{{ route('hr.employeeonboarding.store') }}" id="storeCustomForm">
    @csrf
    <div class="row">
        <div class="col-lg-4">{{  customCreateSelect('employee_id', 'employee_id', '','Employee', getEmployees()->pluck('full_name','employee_id')->toArray())  }}
        </div>
        <div class="col-lg-4"> {!! getSelectForForeignColumn('tbl_department', 'department_id', 'departmentName', '', '', 'Department') !!}
        </div>
        <div class="col-lg-4">{!! getSelectForForeignColumn('tbl_designation', 'designation_id', 'designationName', '', '', 'Designation') !!}
        </div>
        <div class="col-lg-4">{{ createText('workingShift', 'workingShift', 'Working Shift') }}
        </div>
        <div class="col-lg-4">{{ createText('workingHour', 'workingHour', 'Working Hour') }}
        </div>
        <div class="col-lg-4">{{ createText('workingMode', 'workingMode', 'Working Mode') }}
        </div>
        <div class="col-lg-4">{{ createDate('joinDate', 'joinDate', 'Join Date') }}
        </div>
        <div class="col-lg-4">{{ createText('dayFrom', 'dayFrom', 'Day From') }}
        </div>
        <div class="col-lg-4">{{ createText('dayTo', 'dayTo', 'Day To') }}
        </div>
       
        <div class="col-lg-9">
            {{ createLabel('remarks', 'form-label col-form-label', 'Remarks') }}{{ createTextArea('remarks', 'remarks', 'Remarks', '', '') }}
        </div>
        <div class="col-lg-3">{{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive']) }}
        </div> <br>
        <div class="col-md-12"><?php createButton('btn-primary btn-store', '', 'Submit'); ?>
        </div>
</form>
