<form action="{{ route('hr.warnings.store') }}" id="storeCustomForm">
    @csrf
    <div class="row">
        <div class="col-lg-3">
            <div class="row">
                <div class="col-lg-12">{{ createText('warningTo', 'warningTo', 'Warning To') }}
                </div>
                <div class="col-lg-12">{{ createDate('warningDate', 'warningDate', 'Date') }}
                </div>
                <div class="col-lg-12">{{ createText('warningType_id', 'warningType_id', 'Warning Type') }}
                </div>
                <div class="col-lg-12">{{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive']) }}
                </div>
            </div>
            
        </div>
        <div class="col-lg-9">
            <div class="col-lg-12">{{ createText('warningSubject', 'warningSubject', 'Subject') }}
            </div>
            <div class="col-lg-12">
                {{ createLabel('warningDescription', 'form-label col-form-label', 'Description') }}{{ createTextArea('warningDescription', 'warningDescription', 'WarningDescription', '', '') }}
    
            </div>
            <div class="col-lg-12">
                {{ createLabel('remarks', 'form-label col-form-label', 'Remarks') }}{{ createTextArea('remarks', 'remarks', 'remarks', '', '') }}
            </div>
        </div>
        
        
        
        
       
      
        <br>
        <div class="col-md-12"><?php createButton('btn-primary btn-store', '', 'Submit'); ?>
        </div>
</form>
