
                <form action="{{route('hr.resignation.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_department","department_id","departmentName",'') !!}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_employee","employee_id","employeeName",'') !!}
</div><div class="col-lg-6">{{createText("resignationDate","resignationDate","ResignationDate")}}
</div><div class="col-lg-6">{{createText("description","description","Description")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>