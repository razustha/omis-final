
<form action="{{route('hr.promotiondemotion.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("company_id","company_id","Company Id")}}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_employee","employee_id","firstName",'') !!}
</div><div class="col-lg-6">{{createText("promotionTitle","promotionTitle","PromotionTitle")}}
</div><div class="col-lg-6">{{createDate("promotionDate","promotionDate","Promotion Date","", "", "")}}
</div><div class="col-lg-6">{{createText("description","description","Description")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks", "", "")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>