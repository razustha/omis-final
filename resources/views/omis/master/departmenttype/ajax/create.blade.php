
                <form action="{{route('master.departmenttype.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("departmentParent_id","departmentParent_id","Department Parent")}}
</div><div class="col-lg-6">{{createText("departmentName","departmentName","Department Name")}}
</div><div class="col-lg-6">{{createText("jobTitle","jobTitle","Designation")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks",'',"remarks","",'')}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>