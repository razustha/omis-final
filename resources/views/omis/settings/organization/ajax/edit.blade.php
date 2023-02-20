<form action="{{ route('settings.organization.update', [$data->organization_id]) }}" id="updateCustomForm">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-4">{!! getSelectForForeignColumn('tbl_package', 'package_id', 'name', '', $data, 'Package') !!}
        </div>
        <div class="col-lg-4">
            {{ createText('organizationName', 'organizationName', 'Organization Name', '', $data->organizationName) }}
        </div>
        <div class="col-lg-4">
            {{ createText('organizatoinCategory', 'organizatoinCategory', 'Organization Category', '', $data->organizatoinCategory) }}
        </div>
        <div class="col-lg-4">{{ createText('ownerName', 'ownerName', 'Owner Name', '', $data->ownerName) }}
        </div>
        <div class="col-lg-4">{{ createText('phoneNumber', 'phoneNumber', 'Phone Number', '', $data->phoneNumber) }}
        </div>
        <div class="col-lg-4">
            {{ createText('landLineNumber', 'landLineNumber', 'LandLine Number', '', $data->landLineNumber) }}
        </div>
        <div class="col-lg-4">
            {{ createText('emailAddress', 'emailAddress', 'Email Address', '', $data->emailAddress) }}
        </div>
        <div class="col-lg-4">{{ createText('faxAddress', 'faxAddress', 'Fax Address', '', $data->faxAddress) }}
        </div>
        <div class="col-lg-4">{!! getSelectForForeignColumn('tbl_country', 'country_id', 'countryName', '', $data, 'Country') !!}
        </div>
        <div class="col-lg-4">{!! getSelectForForeignColumn('tbl_state', 'state_id', 'stateName', '', $data, 'State') !!}
        </div>
        <div class="col-lg-4">{!! getSelectForForeignColumn('tbl_district', 'district_id', 'districtName', '', $data, 'District') !!}
        </div>
        <div class="col-lg-4">{!! getSelectForForeignColumn('tbl_city', 'city_id', 'cityName', '', $data, 'City') !!}
        </div>
        
        <div class="col-lg-4">
            {{ createText('geoMapLocation', 'geoMapLocation', 'GeoMap Location', '', $data->geoMapLocation) }}
        </div>
        <div class="col-lg-4">{{ createNumber('budgetSize', 'budgetSize', 'Budget Size', '', $data->budgetSize) }}
        </div>
        <div class="col-lg-4">
            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive'], $data->status) }}
        </div>
        <div class="col-lg-4">{{ createText('remarks', 'remarks', 'Remarks', '', $data->remarks) }}
        </div>
        <div class="col-lg-4">
            <div class="form-group mt-2">
                <label class="form-label d-block">Logo</label>
                @if ($data->logo)
                    <img id="holder" style="margin-top:15px;max-height:300px;" class="img img-fluid"
                        src="{{ $data->logo }}">
                @endif
                <div class="form-control-wrap">
                    <input id="thumbnail" class="form-control" type="text" name="logo" value="" readonly>
                    <button id="lfm btn-image" data-input="thumbnail" data-preview="holder"
                        class="lfm btn icon-left btn-primary mt-2 btn-image">
                        <i class="fa fa-upload"></i> &nbsp;Choose
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-12"><?php createButton('btn-primary btn-update', '', 'Submit'); ?>
        </div>
</form>
