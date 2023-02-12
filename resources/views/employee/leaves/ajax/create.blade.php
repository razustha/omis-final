<form action="{{ route('hr.leaveapplication.store') }}" id="storeCustomForm">
    @csrf
    <div class="row">
        <div class="col-lg-6">{{ createText('leaveRequestedBy', 'leaveRequestedBy', 'Leave Requested By') }}
        </div>
        <div class="col-lg-6">{{ createText('leaveType', 'leaveType', 'Leave Type') }}
        </div>
        <div class="col-lg-6">{{ createDate('leaveStart', 'leaveStart', 'Leave Start') }}
        </div>
        <div class="col-lg-6">{{ createDate('leaveEnd', 'leaveEnd', 'Leave End') }}
        </div>
        <div class="col-lg-4">{{ createText('leaveApprovalBy', 'leaveApprovalBy', 'Leave Approval By') }}
        </div>
        <div class="col-lg-4">{{ createDate('leaveApprovedDate', 'leaveApprovedDate', 'Leave Approved Date') }}
        </div>
        <div class="col-lg-4">{{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive']) }}
        </div>
        <div class="col-lg-12">
            {{ createLabel('remarks', 'form-label col-form-label', 'Lorem') }}{{ createTextArea('remarks', 'remarks', 'remarks', '', '') }}
        </div> <br>
        <div class="col-md-12"><?php createButton('btn-primary btn-store', '', 'Submit'); ?>
        </div>
</form>
