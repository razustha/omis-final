<form action="{{route('supplier.suppliercategory.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("goodsCategory_id","goodsCategory_id","Goods Category Id")}}
</div><div class="col-lg-6">{{createText("assetsValue","assetsValue","Assets Value")}}
</div><div class="col-lg-6">{{createDate("date","date","Date")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>