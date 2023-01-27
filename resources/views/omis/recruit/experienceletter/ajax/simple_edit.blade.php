
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("employee_id","employee_id","Employee Id",'',$data->employee_id)}}
</div><div class="col-lg-6">{{createText("designation","designation","Designation",'',$data->designation)}}
</div><div class="col-lg-6">{{createText("departmentName","departmentName","DepartmentName",'',$data->departmentName)}}
</div><div class="col-lg-6">{{createText("joiningDate","joiningDate","JoiningDate",'',$data->joiningDate)}}
</div><div class="col-lg-6">{{createText("leftDate","leftDate","LeftDate",'',$data->leftDate)}}
</div><div class="col-lg-6">{{createText("experienceDetails","experienceDetails","ExperienceDetails",'',$data->experienceDetails)}}
</div><div class="col-lg-6">{{createText("letterIssueBy","letterIssueBy","LetterIssueBy",'',$data->letterIssueBy)}}
</div><div class="col-lg-6">{{createText("letterIssueDate","letterIssueDate","LetterIssueDate",'',$data->letterIssueDate)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>