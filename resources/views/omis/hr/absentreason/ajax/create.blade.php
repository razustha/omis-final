<form action="{{ route('hr.absentreason.store') }}" id="storeCustomForm">
    @csrf
    <div class="row">
        <div class="col-lg-6">{{ createText('designation', 'designation', 'Designation') }}
        </div>
        <div class="col-lg-6">{{ createDate('dateAbsense', 'dateAbsense', 'Absent Date') }}
        </div>
        <div class="col-lg-6">{{ createText('dayAbsense', 'dayAbsense', 'Absent Days') }}
        </div>
        <div class="col-lg-6">{{ createText('holidayApprovedBy', 'holidayApprovedBy', 'Holiday Approved By') }}
        </div>
        <div class="col-lg-6">{{ createText('reasonAbsence', 'reasonAbsence', 'Absent Reason') }}
        </div>
        <div class="col-lg-6">{{ createText('submittedBy', 'submittedBy', 'Submitted By') }}
        </div>
        <div class="col-lg-4">{{ createText('checkedBy', 'checkedBy', 'Checked By') }}
        </div>
        <div class="col-lg-4">{{ createText('approvedBy', 'approvedBy', 'Approved By') }}
        </div>
        <div class="col-lg-4">{{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive']) }}
        </div>
        <div class="col-lg-12">
            {{ createLabel('remarks', 'form-label col-form-label', 'Remarks') }}{{ createTextArea('remarks', 'remarks', 'Remarks', '', '') }}
        </div> <br>
        <div class="col-md-12"><?php createButton('btn-primary btn-store', '', 'Submit'); ?>
        </div>
</form>
