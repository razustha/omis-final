
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("employee_id","employee_id","Employee Id",'',$data->employee_id)}}
</div><div class="col-lg-6">{{createText("departmentName","departmentName","DepartmentName",'',$data->departmentName)}}
</div><div class="col-lg-6">{{createText("designation","designation","Designation",'',$data->designation)}}
</div><div class="col-lg-6">{{createText("workingShift","workingShift","WorkingShift",'',$data->workingShift)}}
</div><div class="col-lg-6">{{createText("workingHour","workingHour","WorkingHour",'',$data->workingHour)}}
</div><div class="col-lg-6">{{createText("workingMode","workingMode","WorkingMode",'',$data->workingMode)}}
</div><div class="col-lg-6">{{createText("joinDate","joinDate","JoinDate",'',$data->joinDate)}}
</div><div class="col-lg-6">{{createText("dayFrom","dayFrom","DayFrom",'',$data->dayFrom)}}
</div><div class="col-lg-6">{{createText("dayTo","dayTo","DayTo",'',$data->dayTo)}}
</div><div class="col-lg-6">{{createText("departmentLogo","departmentLogo","DepartmentLogo",'',$data->departmentLogo)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>