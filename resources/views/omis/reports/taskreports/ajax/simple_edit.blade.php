
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("employee_id","employee_id","Employee Id",'',$data->employee_id)}}
</div><div class="col-lg-6">{{createText("taskType","taskType","TaskType",'',$data->taskType)}}
</div><div class="col-lg-6">{{createText("taskName","taskName","TaskName",'',$data->taskName)}}
</div><div class="col-lg-6">{{createText("tastStartDate","tastStartDate","TastStartDate",'',$data->tastStartDate)}}
</div><div class="col-lg-6">{{createText("taskEndDate","taskEndDate","TaskEndDate",'',$data->taskEndDate)}}
</div><div class="col-lg-6">{{createText("taskOverdueDate","taskOverdueDate","TaskOverdueDate",'',$data->taskOverdueDate)}}
</div><div class="col-lg-6">{{createText("taskReportsBy","taskReportsBy","TaskReportsBy",'',$data->taskReportsBy)}}
</div><div class="col-lg-6">{{createText("taotalDaysToComplete","taotalDaysToComplete","TaotalDaysToComplete",'',$data->taotalDaysToComplete)}}
</div><div class="col-lg-6">{{createText("taskAssignBy","taskAssignBy","TaskAssignBy",'',$data->taskAssignBy)}}
</div><div class="col-lg-6">{{createText("issueDate","issueDate","IssueDate",'',$data->issueDate)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>