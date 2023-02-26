
                <form action="{{route('hr.resignation.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_department","department_id","departmentName",'','','Department') !!}
</div><div class="col-lg-6">{{customCreateSelect('employee_id', 'employee_id', '','Employee', getEmployees()->pluck('full_name','employee_id')->toArray())  }}
</div><div class="col-lg-6">{{createDate("resignationDate","resignationDate","Resignation Date")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('description','form-label col-form-label', 'Description')}}{{createTextArea("description","description","Description","","")}}

</div><div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks", "", "")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>