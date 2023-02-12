<form action="{{ route('hr.leaveapplication.update', [$data->leaveApplication_id]) }}" id="updateCustomForm">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-6">
            {{ createText('leaveRequestedBy', 'leaveRequestedBy', 'Leave Requested By', '', $data->leaveRequestedBy) }}
        </div>
        <div class="col-lg-6">
            {{ createText('employeeNumber', 'employeeNumber', 'Employee Number', '', $data->employeeNumber) }}
        </div>
        <div class="col-lg-6">
            {{ createText('chooseDepartment_id', 'chooseDepartment_id', 'Department Id', '', $data->chooseDepartment_id) }}
        </div>
        <div class="col-lg-6">{{ createText('leaveType', 'leaveType', 'Leave Type', '', $data->leaveType) }}
        </div>
        <div class="col-lg-6">{{ createDate('leaveStart', 'leaveStart', 'Leave Start', '', $data->leaveStart) }}
        </div>
        <div class="col-lg-6">{{ createDate('leaveEnd', 'leaveEnd', 'Leave End', '', $data->leaveEnd) }}
        </div>
        <div class="col-lg-4">
            {{ createText('leaveApprovalBy', 'leave ApprovalBy', 'Leave Approval By', '', $data->leaveApprovalBy) }}
        </div>
        <div class="col-lg-4">
            {{ createDate('leaveApprovedDate', 'leaveApprovedDate', 'Leave Approved Date', '', $data->leaveApprovedDate) }}
        </div>
        <div class="col-lg-4">
            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive'], $data->status) }}
        </div>
        <div class="col-lg-12">
            {{ createLabel('remarks', 'form-label col-form-label', 'Reason') }}{{ createTextArea('remarks', 'remarks', 'remarks', '', $data->remarks) }}
        </div>
        <div class="col-md-12"><?php createButton('btn-primary btn-update', '', 'Submit'); ?>
        </div>
</form>
