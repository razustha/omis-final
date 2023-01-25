
                <form action="{{route('hr.employeeonboarding.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_employee","employee_id","employee_id",'') !!}
</div><div class="col-lg-6">{{createText("departmentName","departmentName","DepartmentName")}}
</div><div class="col-lg-6">{{createText("designation","designation","Designation")}}
</div><div class="col-lg-6">{{createText("workingShift","workingShift","WorkingShift")}}
</div><div class="col-lg-6">{{createText("workingHour","workingHour","WorkingHour")}}
</div><div class="col-lg-6">{{createText("workingMode","workingMode","WorkingMode")}}
</div><div class="col-lg-6">{{createText("joinDate","joinDate","JoinDate")}}
</div><div class="col-lg-6">{{createText("dayFrom","dayFrom","DayFrom")}}
</div><div class="col-lg-6">{{createText("dayTo","dayTo","DayTo")}}
</div><div class="col-lg-6">{{createText("departmentLogo","departmentLogo","DepartmentLogo")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>