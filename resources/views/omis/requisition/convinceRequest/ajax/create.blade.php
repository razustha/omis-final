
                <form action="{{route('requisition.convincerequest.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("ttileName","ttileName","Title")}}
</div><div class="col-lg-6">{{createText("applicants_id","applicants_id","Applicant")}}
</div><div class="col-lg-4">{{createDate("startDate","startDate","Start Date")}}
</div><div class="col-lg-4">{{createDate("expireDate","expireDate","Expire Date")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>