
        <form action="{{route('master.departmenttype.update',[$data->departmenttype_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("departmentParent_id","departmentParent_id","Department Parent",'',$data->departmentParent_id)}}
</div><div class="col-lg-6">{{createText("departmentName","departmentName","Department Name",'',$data->departmentName)}}
</div><div class="col-lg-6">{{createText("jobTitle","jobTitle","Designation",'',$data->jobTitle)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>