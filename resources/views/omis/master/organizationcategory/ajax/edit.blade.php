
        <form action="{{route('master.organizationcategory.update',[$data->organizationCategory_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-4">{{createText("organizationCategoryParent_id","organizationCategoryParent_id","Organization Category Parent",'',$data->organizationCategoryParent_id)}}
</div><div class="col-lg-4">{{createText("organizationCategoryName","organizationCategoryName","Organization Category",'',$data->organizationCategoryName)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>