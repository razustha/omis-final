
        <form action="{{route('master.employmentsizecategory.update',[$data->employmentSizeCategory_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("employmentSizeCategory","employmentSizeCategory","Employment Size Category",'',$data->employmentSizeCategory)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createLabel('employmentSizeCategoryDescription','form-label col-form-label','Description')}}{{createTextArea("employmentSizeCategoryDescription","employmentSizeCategoryDescription","EmploymentSizeCategoryDescription",'',$data->employmentSizeCategoryDescription)}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>