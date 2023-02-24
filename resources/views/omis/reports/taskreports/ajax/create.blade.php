
                <form action="{{route('reports.taskreports.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_employee","employee_id","employee_id",'','','Employee Name') !!}
</div><div class="col-lg-6">{{createText("taskType","taskType","Task Type")}}
</div><div class="col-lg-6">{{createText("taskName","taskName","Task Name")}}
</div><div class="col-lg-6">{{createDate("tastStartDate","tastStartDate","Task Start Date")}}
</div><div class="col-lg-6">{{createDate("taskEndDate","taskEndDate","Task End Date")}}
</div><div class="col-lg-6">{{createDate("taskOverdueDate","taskOverdueDate","Task Overdue Date")}}
</div><div class="col-lg-6">{{createText("taskReportsBy","taskReportsBy","Task Reports By")}}
</div><div class="col-lg-6">{{createText("taotalDaysToComplete","taotalDaysToComplete","Taotal Days To Complete")}}
</div><div class="col-lg-4">{{createText("taskAssignBy","taskAssignBy","Task Assign By")}}
</div><div class="col-lg-4">{{createDate("issueDate","issueDate","Issue Date")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>