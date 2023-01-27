
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("leaveType","leaveType","LeaveType",'',$data->leaveType)}}
</div><div class="col-lg-6">{{createText("company_id","company_id","Company Id",'',$data->company_id)}}
</div><div class="col-lg-6">{{createText("departmentType","departmentType","DepartmentType",'',$data->departmentType)}}
</div><div class="col-lg-6">{{createText("department_id","department_id","Department Id",'',$data->department_id)}}
</div><div class="col-lg-6">{{createText("startDate","startDate","StartDate",'',$data->startDate)}}
</div><div class="col-lg-6">{{createText("endDate","endDate","EndDate",'',$data->endDate)}}
</div><div class="col-lg-6">{{createText("totalDays","totalDays","TotalDays",'',$data->totalDays)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>