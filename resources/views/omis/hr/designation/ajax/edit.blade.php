
        <form action="{{route('hr.designation.update',[$data->designation_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("designationName","designationName","DesignationName",'',$data->designationName)}}
</div><div class="col-lg-6">{{createText("compnayName_id","compnayName_id","CompnayName Id",'',$data->compnayName_id)}}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_department","department_id","departmentName",'',$data) !!}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>