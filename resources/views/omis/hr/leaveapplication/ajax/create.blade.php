<form action="{{ route('hr.leaveapplication.store') }}" id="storeCustomForm">
    @csrf
    <div class="row">

        <h4>{{ auth()->user()->name }}</h4>

        {{ createHidden('employee_id', 'employee_id', '', 'employee_id', auth()->user()->employee->employee_id) }}
        <div class="col-lg-4">
            <label class="form-label">Leave Type</label>
            <div class="input-group">
                {{ customCreateSelect('leaveType', 'leaveType', '', '', ['sick' => 'Sick', 'paid' => 'Paid']) }}
                <button class="btn btn-outline-light" type="button" data-bs-toggle="modal"
                    data-bs-target="#leaveTypeModal">
                    Add</button>
            </div>

        </div>
        <div class="col-lg-4">{{ createDate('leaveStart', 'leaveStart', 'Leave Start Date') }}
        </div>
        <div class="col-lg-4">{{ createDate('leaveEnd', 'leaveEnd', 'Leave End Date') }}
        </div>
        <div class="col-lg-12">

            {{ createLabel('remarks', 'form-label col-form-label', 'Remarks') }}
            {{ createTextArea('remarks', 'remarks', 'Remarks', '', '') }}
        </div> <br>
        <div class="col-md-12"><?php createButton('btn-primary btn-store', '', 'Submit'); ?>
        </div>

</form>
