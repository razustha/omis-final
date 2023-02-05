
        <form action="{{route('settings.organization.update',[$data->organization_id])}}" id="updateCustomForm">
 @csrf
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("organizationName","organizationName","OrganizationName",'',$data->organizationName)}}
</div><div class="col-lg-6">{{createText("organizatoinCategory","organizatoinCategory","OrganizatoinCategory",'',$data->organizatoinCategory)}}
</div><div class="col-lg-6">{{createText("ownerName","ownerName","OwnerName",'',$data->ownerName)}}
</div><div class="col-lg-6">{{createText("phoneNumber","phoneNumber","PhoneNumber",'',$data->phoneNumber)}}
</div><div class="col-lg-6">{{createText("landLineNumber","landLineNumber","LandLineNumber",'',$data->landLineNumber)}}
</div><div class="col-lg-6">{{createText("emailAddress","emailAddress","EmailAddress",'',$data->emailAddress)}}
</div><div class="col-lg-6">{{createText("faxAddress","faxAddress","FaxAddress",'',$data->faxAddress)}}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_country","country_id","countryName",'',$data) !!}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_state","state_id","stateName",'',$data) !!}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_city","city_id","cityName",'',$data) !!}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_district","district_id","districtName",'',$data) !!}
</div><div class="col-lg-6">{{createText("geoMapLocation","geoMapLocation","GeoMapLocation",'',$data->geoMapLocation)}}
</div><div class="col-lg-6">{{createNumber("budgetSize","budgetSize","BudgetSize",'',$data->budgetSize)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>
<div class="col-lg-4">
    <div class="form-group mt-2"><label class="form-label">Logo</label>
        @if ($data->logo)
            <img id="holder" style="margin-top:15px;max-height:300px;" class="img img-fluid"
                src="{{ $data->logo }}">
        @endif
        <div class="form-control-wrap">
            <input id="thumbnail" class="form-control" type="text" name="logo"
                value="" readonly>
            <button id="lfm btn-image" data-input="thumbnail" data-preview="holder"
                class="lfm btn icon-left btn-primary mt-2 btn-image">
                <i class="fa fa-upload"></i> &nbsp;Choose
            </button>
        </div>
    </div>
</div>
<div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>
