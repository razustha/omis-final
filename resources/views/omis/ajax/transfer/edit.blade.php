<form method="POST" action="{{route('transfer.update',[$data->transfer_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("employee_id","employee_id","Employee Id",'',$data->employee_id)}}
</div><div class="col-lg-6">{{createText("dateOfTransfer","dateOfTransfer","DateOfTransfer",'',$data->dateOfTransfer)}}
</div><div class="col-lg-6">{{createText("employeeName_id","employeeName_id","EmployeeName Id",'',$data->employeeName_id)}}
</div><div class="col-lg-6">{{createText("fromDepartment","fromDepartment","FromDepartment",'',$data->fromDepartment)}}
</div><div class="col-lg-6">{{createText("toDepartment","toDepartment","ToDepartment",'',$data->toDepartment)}}
</div><div class="col-lg-6">{{createText("description","description","Description",'',$data->description)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>