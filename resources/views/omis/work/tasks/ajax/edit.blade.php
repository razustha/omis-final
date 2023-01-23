
        <form action="{{route('work.tasks.update',[$data->tasks_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createDate("tasksStartDate","tasksStartDate","TasksStartDate",'',$data->tasksStartDate)}}
</div><div class="col-lg-6">{{createDate("tasksEndDate","tasksEndDate","TasksEndDate",'',$data->tasksEndDate)}}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_department","department_id","departmentName",'',$data) !!}
</div><div class="col-lg-6">{{createText("tasksAssignedTo","tasksAssignedTo","TasksAssignedTo",'',$data->tasksAssignedTo)}}
</div><div class="col-lg-6">{{createText("companyName","companyName","CompanyName",'',$data->companyName)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>