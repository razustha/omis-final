<form action="{{ route('hr.leaveapplication.update', [$data->leaveApplication_id]) }}" id="updateCustomForm">
    @csrf
    @method('PUT')
    <div class="row">

        <div class="col-lg-4">{{ createText('leavetype_id', 'leavetype_id', 'Leave Type', '', $data) }}
        </div>
        <div class="col-lg-4">{{ createDate('leaveStart', 'leaveStart', 'Leave Start Date', '', $data->leaveStart) }}
        </div>
        <div class="col-lg-4">{{ createDate('leaveEnd', 'leaveEnd', 'Leave End Date', '', $data->leaveEnd) }}
        </div>

        <div class="col-lg-4">{{customCreateSelect("type","type",'',"Type",['half'=>'Half Day','full'=>'Full Day'],$data->type)}}

        <div class="col-lg-12">
            {{ createLabel('remarks', 'form-label col-form-label', 'Reason') }}{{ createTextArea('remarks', 'remarks', 'Remarks', '', $data->remarks) }}
        </div>
        <div class="col-md-12"><?php createButton('btn-primary btn-update', '', 'Submit'); ?>
        </div>
</form>
