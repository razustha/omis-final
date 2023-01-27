
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("productName","productName","ProductName",'',$data->productName)}}
</div><div class="col-lg-6">{{createText("productPhoto","productPhoto","ProductPhoto",'',$data->productPhoto)}}
</div><div class="col-lg-6">{{createText("useMaterials","useMaterials","UseMaterials",'',$data->useMaterials)}}
</div><div class="col-lg-6">{{createText("packing","packing","Packing",'',$data->packing)}}
</div><div class="col-lg-6">{{createText("company_id","company_id","Company Id",'',$data->company_id)}}
</div><div class="col-lg-6">{{createText("companyName","companyName","CompanyName",'',$data->companyName)}}
</div><div class="col-lg-6">{{createText("companyAddress","companyAddress","CompanyAddress",'',$data->companyAddress)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>