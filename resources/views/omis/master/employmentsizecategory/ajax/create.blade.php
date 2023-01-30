
                <form action="{{route('master.employmentsizecategory.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("employmentSizeCategory","employmentSizeCategory","Employment Size Category")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createLabel('employmentSizeCategoryDescription','form-label col-form-label','Description')}}{{createTextArea("employmentSizeCategoryDescription","employmentSizeCategoryDescription","Description")}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>