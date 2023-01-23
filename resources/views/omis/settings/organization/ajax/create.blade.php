
                <form action="{{route('settings.organization.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-4">{{createText("organizationName","organizationName","Organization Name")}}
</div><div class="col-lg-4">{{createText("organizatoinCategory","organizatoinCategory","OrganizatoinCategory")}}
</div><div class="col-lg-4">{{createText("ownerName","ownerName","OwnerName")}}
</div><div class="col-lg-4">{{createText("phoneNumber","phoneNumber","PhoneNumber")}}
</div><div class="col-lg-4">{{createText("landLineNumber","landLineNumber","LandLineNumber")}}
</div><div class="col-lg-4">{{createText("emailAddress","emailAddress","EmailAddress")}}
</div><div class="col-lg-4">{{createText("faxAddress","faxAddress","FaxAddress")}}
</div><div class="col-lg-4">{!! getSelectForForeignColumn("tbl_country","country_id","countryName",'') !!}
</div><div class="col-lg-4">{!! getSelectForForeignColumn("tbl_state","state_id","stateName",'') !!}
</div><div class="col-lg-4">{!! getSelectForForeignColumn("tbl_city","city_id","cityName",'') !!}
</div><div class="col-lg-4">{!! getSelectForForeignColumn("tbl_district","district_id","districtName",'') !!}
</div><div class="col-lg-4">{{createText("geoMapLocation","geoMapLocation","GeoMapLocation")}}
</div><div class="col-lg-4">{{createText("documentType","documentType","DocumentType")}}
</div><div class="col-lg-4">{{createText("documentName","documentName","DocumentName")}}
</div><div class="col-lg-4">{{createText("documentPath","documentPath","DocumentPath")}}
</div><div class="col-lg-4">{{createText("budgetSize","budgetSize","BudgetSize")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-4">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>