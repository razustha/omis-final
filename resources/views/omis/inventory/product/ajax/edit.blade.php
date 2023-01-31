
        <form action="{{route('inventory.product.update',[$data->product_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("productName","productName","Product Name",'',$data->productName)}}
</div><div class="col-lg-6">{{createText("productPhoto","productPhoto","Product Photo",'',$data->productPhoto)}}
</div><div class="col-lg-6">{{createText("useMaterials","useMaterials","Use Materials",'',$data->useMaterials)}}
</div><div class="col-lg-6">{{createText("packing","packing","Packing",'',$data->packing)}}
</div><div class="col-lg-6">{{createText("company_id","company_id","Company Id",'',$data->company_id)}}
</div><div class="col-lg-6">{{createText("companyName","companyName","Company Name",'',$data->companyName)}}
</div><div class="col-lg-6">{{createText("companyAddress","companyAddress","Company Address",'',$data->companyAddress)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>