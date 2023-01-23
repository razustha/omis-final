<form method="POST" action="{{route('work.tasks.update',[$data->tasks_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("tasksStartDate","tasksStartDate","TasksStartDate",'',$data->tasksStartDate)}}
</div><div class="col-lg-6">{{createText("tasksEndDate","tasksEndDate","TasksEndDate",'',$data->tasksEndDate)}}
</div><div class="col-lg-6">{{createText("department_id","department_id","Department Id",'',$data->department_id)}}
</div><div class="col-lg-6">{{createText("tasksAssignedTo","tasksAssignedTo","TasksAssignedTo",'',$data->tasksAssignedTo)}}
</div><div class="col-lg-6">{{createText("companyName","companyName","CompanyName",'',$data->companyName)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div><div class="col-lg-6">{{createText("updateBy","updateBy","UpdateBy",'',$data->updateBy)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>