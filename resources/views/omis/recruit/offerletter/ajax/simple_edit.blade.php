
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("applicants_id","applicants_id","Applicants Id",'',$data->applicants_id)}}
</div><div class="col-lg-6">{{createText("designation","designation","Designation",'',$data->designation)}}
</div><div class="col-lg-6">{{createText("departmentName","departmentName","DepartmentName",'',$data->departmentName)}}
</div><div class="col-lg-6">{{createText("workingHour","workingHour","WorkingHour",'',$data->workingHour)}}
</div><div class="col-lg-6">{{createText("workingShift","workingShift","WorkingShift",'',$data->workingShift)}}
</div><div class="col-lg-6">{{createText("workingMode","workingMode","WorkingMode",'',$data->workingMode)}}
</div><div class="col-lg-6">{{createText("offeredSalary","offeredSalary","OfferedSalary",'',$data->offeredSalary)}}
</div><div class="col-lg-6">{{createText("contractTimePeriod","contractTimePeriod","ContractTimePeriod",'',$data->contractTimePeriod)}}
</div><div class="col-lg-6">{{createText("offerDescription","offerDescription","OfferDescription",'',$data->offerDescription)}}
</div><div class="col-lg-6">{{createText("joiningDate","joiningDate","JoiningDate",'',$data->joiningDate)}}
</div><div class="col-lg-6">{{createText("offeredIssueBy","offeredIssueBy","OfferedIssueBy",'',$data->offeredIssueBy)}}
</div><div class="col-lg-6">{{createText("offerIssueDate","offerIssueDate","OfferIssueDate",'',$data->offerIssueDate)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>