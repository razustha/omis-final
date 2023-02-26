<form action="{{route('supplier.suppliercategory.update',[$data->supplierCategory_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("goodsCategory_id","goodsCategory_id","Goods Category",'',$data->goodsCategory_id)}}
</div><div class="col-lg-6">{{createText("assetsValue","assetsValue","Assets Value",'',$data->assetsValue)}}
</div><div class="col-lg-6">{{createText("date","date","Date",'',$data->date)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>