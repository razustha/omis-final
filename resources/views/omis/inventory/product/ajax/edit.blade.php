
        <form action="{{route('inventory.product.update',[$data->product_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("productName","productName","Product Name",'',$data->productName)}}
</div><div class="col-lg-6">{{createText("useMaterials","useMaterials","Use Materials",'',$data->useMaterials)}}
</div><div class="col-lg-6">{{createText("packing","packing","Packing",'',$data->packing)}}
</div><div class="col-lg-6">{{createText("company_id","company_id","Company Id",'',$data->company_id)}}
</div><div class="col-lg-4">{{createText("companyName","companyName","Company Name",'',$data->companyName)}}
</div><div class="col-lg-4">{{createText("companyAddress","companyAddress","Company Address",'',$data->companyAddress)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div><div class="col-lg-6">
{{createLabel('productPhoto','form-label col-form-label','Product Photo')}}
        <input id="thumbnail" class="form-control" type="text" name="productPhoto" value="" readonly>
                                <button id="lfm btn-image" data-input="thumbnail" data-preview="holder" class="lfm btn icon-left btn-primary mt-2 btn-image">
                                    <i class="fa fa-upload"></i> &nbsp;Choose
                                </button>



</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>