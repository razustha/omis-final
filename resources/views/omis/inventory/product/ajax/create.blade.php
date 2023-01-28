
                <form action="{{route('inventory.product.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("productName","productName","Product Name")}}
</div><div class="col-lg-6">{{createText("productPhoto","productPhoto","Product Photo")}}
</div><div class="col-lg-6">{{createText("useMaterials","useMaterials","Use Materials")}}
</div><div class="col-lg-6">{{createText("packing","packing","Packing")}}
</div><div class="col-lg-6">{{createText("company_id","company_id","Company Id")}}
</div><div class="col-lg-6">{{createText("companyName","companyName","Company Name")}}
</div><div class="col-lg-6">{{createText("companyAddress","companyAddress","Company Address")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>