
                <form action="{{route('officemanagement.contract.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("ownerName","ownerName","Owner Name")}}
</div><div class="col-lg-6">{{createText("contactTitle","contactTitle","Contract Title")}}
</div><div class="col-lg-4">{{createDate("issueDate","issueDate","Issue Date")}}
</div><div class="col-lg-4">{{createDate("expireDate","expireDate","Expire Date")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>