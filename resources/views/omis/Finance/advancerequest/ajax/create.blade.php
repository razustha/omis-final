<form action="{{route('finance.advancerequest.store')}}" id="storeCustomForm">
    @csrf
    <div class="row">
        <div class="col-lg-6">{{createText("applicantName_id","applicantName_id","Applicant Id")}}
        </div>
        <div class="col-lg-6">{{createDate("startDate","startDate","Start Date")}}
        </div>
        <div class="col-lg-6">{{createDate("expireDate","expireDate","Expire Date")}}
        </div>
        <div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
        </div>
        <div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","remarks","","")}}

        </div> <br>
        <div class="col-md-12">
            <?php createButton("btn-primary btn-store","","Submit"); ?>
        </div>
    </div>
</form>