
                <form method="POST" action="{{route('work.tasks.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("tasksStartDate","tasksStartDate","TasksStartDate")}}
</div><div class="col-lg-6">{{createText("tasksEndDate","tasksEndDate","TasksEndDate")}}
</div><div class="col-lg-6">{{createText("department_id","department_id","Department Id")}}
</div><div class="col-lg-6">{{createText("tasksAssignedTo","tasksAssignedTo","TasksAssignedTo")}}
</div><div class="col-lg-6">{{createText("companyName","companyName","CompanyName")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div><div class="col-lg-6">{{createText("updateBy","updateBy","UpdateBy")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>