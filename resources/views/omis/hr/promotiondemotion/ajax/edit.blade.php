
        <form action="{{route('hr.promotiondemotion.update',[$data->promotiondemotion_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row">

<div class="col-lg-3">
{{ customCreateSelect('employee_id','employee_id','','Employee',getEmployees()->pluck('full_name', 'employee_id')->toArray(),$data->employee_id) }}
</div><div class="col-lg-3">{{createText("promotionTitle","promotionTitle","Title",'',$data->promotionTitle)}}
</div><div class="col-lg-3">{{createDate("promotionDate","promotionDate","Date",'',$data->promotionDate)}}
</div><div class="col-lg-3">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('description','form-label col-form-label','Description')}}{{createTextArea("description","description","Description",'',$data->description)}}

</div><div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>