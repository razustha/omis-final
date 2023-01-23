@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit Organization</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('settings.organization.index') }}" class="btn btn-md d-md-none btn-primary">
                                <em class="icon ni ni-plus"></em>
                                <span>View Cities</span>
                            </a>
                        </li>

                    </ul>
                </div>
                </div>
            </div>

            <div class="nk-block">

                        <div class="card">
                            <div class="card-body">
                <form method="POST" action="{{route('settings.organization.update',[$data->organization_id])}}" enctype="multipart/form-data">
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
</div><div class="col-lg-6">{{createText("documentType","documentType","DocumentType",'',$data->documentType)}}
</div><div class="col-lg-6">{{createText("documentName","documentName","DocumentName",'',$data->documentName)}}
</div><div class="col-lg-6">{{createText("documentPath","documentPath","DocumentPath",'',$data->documentPath)}}
</div><div class="col-lg-6">{{createText("budgetSize","budgetSize","BudgetSize",'',$data->budgetSize)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection