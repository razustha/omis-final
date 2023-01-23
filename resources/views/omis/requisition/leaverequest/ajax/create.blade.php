
                <form >
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("leaveType","leaveType","LeaveType")}}
</div><div class="col-lg-6">{{createText("company_id","company_id","Company Id")}}
</div><div class="col-lg-6">{{createText("departmentType","departmentType","DepartmentType")}}
</div><div class="col-lg-6">{{createText("department_id","department_id","Department Id")}}
</div><div class="col-lg-6">{{createText("startDate","startDate","StartDate")}}
</div><div class="col-lg-6">{{createText("endDate","endDate","EndDate")}}
</div><div class="col-lg-6">{{createText("totalDays","totalDays","TotalDays")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>