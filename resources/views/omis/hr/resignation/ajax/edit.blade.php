
        <form action="{{route('hr.resignation.update',[$data->resignation_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_department","department_id","departmentName",'',$data) !!}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_employee","employee_id","employee_id",'',$data) !!}
</div><div class="col-lg-6">{{createDate("resignationDate","resignationDate","ResignationDate",'',$data->resignationDate)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createLabel('description','form-label col-form-label','Description')}}{{createTextArea("description","description","Description",'',$data->description)}}

</div><div class="col-lg-6">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>