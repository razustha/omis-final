<form action="{{ route('settings.organization.store') }}" id="storeCustomForm">
    @csrf
    <div class="row">
        <div class="col-lg-4">{{ createText('organizationName', 'organizationName', 'Organization Name') }}
        </div>
        <div class="col-lg-4">{{ createText('organizatoinCategory', 'organizatoinCategory', 'Organizatoin Category') }}
        </div>
        <div class="col-lg-4">{{ createText('ownerName', 'ownerName', 'Owner Name') }}
        </div>
        <div class="col-lg-4">{{ createText('phoneNumber', 'phoneNumber', 'Phone Number') }}
        </div>
        <div class="col-lg-4">{{ createText('landLineNumber', 'landLineNumber', 'Land Line Number') }}
        </div>
        <div class="col-lg-4">{{ createText('emailAddress', 'emailAddress', 'Email Address') }}
        </div>
        <div class="col-lg-4">
            {{ createPassword('password', 'password', 'Password') }}
        </div>
        <div class="col-lg-4">{{ createText('faxAddress', 'faxAddress', 'Fax Address') }}
        </div>
        <div class="col-lg-4">{!! getSelectForForeignColumn('tbl_country', 'country_id', 'countryName', '', '', 'Country') !!}
        </div>
        <div class="col-lg-4">{!! getSelectForForeignColumn('tbl_state', 'state_id', 'stateName', '', '', 'State') !!}
        </div>
        <div class="col-lg-4">{!! getSelectForForeignColumn('tbl_city', 'city_id', 'cityName', '', '', 'City') !!}
        </div>
        <div class="col-lg-4">{!! getSelectForForeignColumn('tbl_district', 'district_id', 'districtName', '', '', 'District') !!}
        </div>
        <div class="col-lg-4">{{ createText('geoMapLocation', 'geoMapLocation', 'GeoMapLocation') }}
        </div>
        <div class="col-lg-4">{{ createText('documentType', 'documentType', 'Document Type') }}
        </div>
        <div class="col-lg-4">{{ createText('documentName', 'documentName', 'Document Name') }}
        </div>
        <div class="col-lg-4">{{ createText('documentPath', 'documentPath', 'Document Path') }}
        </div>
        <div class="col-lg-4">{{ createText('budgetSize', 'budgetSize', 'Budget Size') }}
        </div>
        <div class="col-lg-4">{{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive']) }}
        </div>
        <div class="col-lg-4">{{ createText('remarks', 'remarks', 'Remarks') }}
        </div> <br>
        <div class="col-md-12"><?php createButton('btn-primary btn-store', '', 'Submit'); ?>
        </div>
</form>
