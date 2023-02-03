
<form action="{{route('hr.promotiondemotion.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-4">{{createText("company_id","company_id","Company Id")}}
</div><div class="col-lg-4">{{  customCreateSelect('employee_id', 'employee_id', '','Employee', getEmployees()->pluck('full_name','employee_id')->toArray())  }}
</div><div class="col-lg-4">{{createText("promotionTitle","promotionTitle","Promotion Title")}}
</div><div class="col-lg-4">{{createDate("promotionDate","promotionDate","Promotion Date","", "", "")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createLabel('description','form-label col-form-label','Description')}}{{createTextArea("description","description","Description","","")}}

</div><div class="col-lg-6">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks", "", "")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>