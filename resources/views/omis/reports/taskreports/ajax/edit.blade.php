
        <form action="{{route('reports.taskreports.update',[$data->taskreports_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_employee","employee_id","employee_id",'',$data,'Employee Name') !!}
</div><div class="col-lg-6">{{createText("taskType","taskType","Task Type",'',$data->taskType)}}
</div><div class="col-lg-6">{{createText("taskName","taskName","Task Name",'',$data->taskName)}}
</div><div class="col-lg-6">{{createDate("tastStartDate","tastStartDate","Task Start Date",'',$data->tastStartDate)}}
</div><div class="col-lg-6">{{createDate("taskEndDate","taskEndDate","Task End Date",'',$data->taskEndDate)}}
</div><div class="col-lg-6">{{createDate("taskOverdueDate","taskOverdueDate","Task Overdue Date",'',$data->taskOverdueDate)}}
</div><div class="col-lg-6">{{createText("taskReportsBy","taskReportsBy","Task Reports By",'',$data->taskReportsBy)}}
</div><div class="col-lg-6">{{createText("taotalDaysToComplete","taotalDaysToComplete","Total Days To Complete",'',$data->taotalDaysToComplete)}}
</div><div class="col-lg-4">{{createText("taskAssignBy","taskAssignBy","Task Assign By",'',$data->taskAssignBy)}}
</div><div class="col-lg-4">{{createDate("issueDate","issueDate","Issue Date",'',$data->issueDate)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-lable','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>