
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("organizationName","organizationName","OrganizationName",'',$data->organizationName)}}
</div><div class="col-lg-6">{{createText("organizatoinCategory","organizatoinCategory","OrganizatoinCategory",'',$data->organizatoinCategory)}}
</div><div class="col-lg-6">{{createText("ownerName","ownerName","OwnerName",'',$data->ownerName)}}
</div><div class="col-lg-6">{{createText("phoneNumber","phoneNumber","PhoneNumber",'',$data->phoneNumber)}}
</div><div class="col-lg-6">{{createText("landLineNumber","landLineNumber","LandLineNumber",'',$data->landLineNumber)}}
</div><div class="col-lg-6">{{createText("emailAddress","emailAddress","EmailAddress",'',$data->emailAddress)}}
</div><div class="col-lg-6">{{createText("faxAddress","faxAddress","FaxAddress",'',$data->faxAddress)}}
</div><div class="col-lg-6">{{createText("country_id","country_id","Country Id",'',$data->country_id)}}
</div><div class="col-lg-6">{{createText("state_id","state_id","State Id",'',$data->state_id)}}
</div><div class="col-lg-6">{{createText("city_id","city_id","City Id",'',$data->city_id)}}
</div><div class="col-lg-6">{{createText("district_id","district_id","District Id",'',$data->district_id)}}
</div><div class="col-lg-6">{{createText("geoMapLocation","geoMapLocation","GeoMapLocation",'',$data->geoMapLocation)}}
</div><div class="col-lg-6">{{createText("documentType","documentType","DocumentType",'',$data->documentType)}}
</div><div class="col-lg-6">{{createText("documentName","documentName","DocumentName",'',$data->documentName)}}
</div><div class="col-lg-6">{{createText("documentPath","documentPath","DocumentPath",'',$data->documentPath)}}
</div><div class="col-lg-6">{{createText("budgetSize","budgetSize","BudgetSize",'',$data->budgetSize)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>