
                <form action="{{route('work.tasks.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createDate("tasksStartDate","tasksStartDate","Start Date")}}
</div><div class="col-lg-6">{{createDate("tasksEndDate","tasksEndDate","End Date")}}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_department","department_id","departmentName",'') !!}
</div><div class="col-lg-6">{{createText("tasksAssignedTo","tasksAssignedTo","Assigned To")}}
</div><div class="col-lg-6">{{createText("companyName","companyName","Company Name")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>