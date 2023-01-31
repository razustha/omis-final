<form action="{{route('finance.advancerequest.update',[$data->advanceRequest_id])}}" id="updateCustomForm">
        @csrf
        @method('PUT')
        <div class="row">
        
        <div class="col-lg-6">{{createText("applicantName_id","applicantName_id","Applicant 
                Id",'',$data->applicantName_id)}}
        </div>
        <div class="col-lg-6">{{createDate("startDate","startDate","Start Date",'',$data->startDate)}}
        </div>
        <div class="col-lg-6">{{createDate("expireDate","expireDate","Expire Date",'',$data->expireDate)}}
        </div>
        <div class="col-lg-6">
                {{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
        </div>
        <div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
        </div>
        <div class="col-md-12">
                <?php createButton("btn-primary btn-update","","Update"); ?>
        </div>
        </div>
</form>