<form action="{{route('finance.creditnotes.store')}}" id="storeCustomForm">
    @csrf
    <div class="row">
        <div class="col-lg-6">{{createText("applicant_id","applicant_id","Applicant Id")}}
        </div>
            <div class="col-lg-6">{{createText("departmentName","departmentName","Department Name")}}
            </div>
            <div class="col-lg-6">{{createDate("creditNoteDate","creditNoteDate","Credit Note Date")}}
            </div>
           
            <div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
            </div>
            <div class="col-lg-6">{{createLabel('creditDetails','form-label col-form-label','Details')}}{{createTextArea("creditDetails","creditDetails","CreditDetails","","")}}
            </div>
            <div class="col-lg-6">{{createLabel('remarks','form-label
                col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
            </div> <br>
            <div class="col-md-12">
                <?php createButton("btn-primary btn-store","","Submit"); ?>
            </div>
        </div>
</form>