
        <form action="{{route('hr.promotiondemotion.update',[$data->promotiondemotion_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("company_id","company_id","Company Id",'',$data->company_id)}}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_employee","employee_id","firstName",'',$data) !!}
</div><div class="col-lg-4">{{createText("promotionTitle","promotionTitle","PromotionTitle",'',$data->promotionTitle)}}
</div><div class="col-lg-4">{{createDate("promotionDate","promotionDate","PromotionDate",'',$data->promotionDate)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createLabel('description','form-label col-form-label','Description')}}{{createTextArea("description","description","Description",'',$data->description)}}

</div><div class="col-lg-6">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>