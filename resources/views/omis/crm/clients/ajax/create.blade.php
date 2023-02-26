
                <form action="{{route('crm.clients.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("applicantName_id","applicantName_id","Applicant Name")}}
</div><div class="col-lg-6">{{createText("phone","phone","Phone")}}
</div><div class="col-lg-6">{{createText("email","email","Email")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","Remarks", "", "")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>