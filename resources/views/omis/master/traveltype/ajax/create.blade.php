<form action="{{ route('master.traveltype.store') }}" id="storeCustomForm">
    @csrf
    <div class="row">
        <div class="col-lg-6">{{ createText('travelTypeName', 'travelTypeName', 'Travel Type') }}
        </div>
 
        <div class="col-lg-6">{{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive']) }}
        </div>
        <div class="col-lg-6">{{createLabel('travelTypeDescription','form-label col-form-label','Description')}}{{ createTextArea('travelTypeDescription', 'travelTypeDescription', 'Travel Type Description') }}
</div>
        <div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{ createTextArea('remarks', 'remarks', 'Remarks') }}
        </div> <br>
        <div class="col-md-12"><?php createButton('btn-primary btn-store', '', 'Submit'); ?>
        </div>
</form>
