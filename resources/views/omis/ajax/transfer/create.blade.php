
                <form method="POST" action="{{route('transfer.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("employee_id","employee_id","Employee Id")}}
</div><div class="col-lg-6">{{createText("dateOfTransfer","dateOfTransfer","DateOfTransfer")}}
</div><div class="col-lg-6">{{createText("employeeName_id","employeeName_id","EmployeeName Id")}}
</div><div class="col-lg-6">{{createText("fromDepartment","fromDepartment","FromDepartment")}}
</div><div class="col-lg-6">{{createText("toDepartment","toDepartment","ToDepartment")}}
</div><div class="col-lg-6">{{createText("description","description","Description")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>