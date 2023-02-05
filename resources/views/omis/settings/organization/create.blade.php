@extends('omis.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Add Organization</h1>

                            </div>
                            <div class="nk-block-head-content">
                                <ul class="d-flex">
                                    <li>
                                        <a href="{{ route('settings.organization.index') }}"
                                            class="btn btn-md d-md-none btn-primary">
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
                                <form method="POST" action="{{ route('settings.organization.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            {{ createText('organizationName', 'organizationName', 'OrganizationName') }}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ createText('organizatoinCategory', 'organizatoinCategory', 'OrganizatoinCategory') }}
                                        </div>
                                        <div class="col-lg-6">{{ createText('ownerName', 'ownerName', 'OwnerName') }}
                                        </div>
                                        <div class="col-lg-6">{{ createText('phoneNumber', 'phoneNumber', 'PhoneNumber') }}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ createText('landLineNumber', 'landLineNumber', 'LandLineNumber') }}
                                        </div>
                                        <div class="col-lg-6">{{ createText('emailAddress', 'emailAddress', 'EmailAddress') }}
                                        </div>
                                        <div class="col-lg-6">{{ createText('faxAddress', 'faxAddress', 'FaxAddress') }}
                                        </div>
                                        <div class="col-lg-6">{!! getSelectForForeignColumn('tbl_country', 'country_id', 'countryName', '') !!}
                                        </div>
                                        <div class="col-lg-6">{!! getSelectForForeignColumn('tbl_state', 'state_id', 'stateName', '') !!}
                                        </div>
                                        <div class="col-lg-6">{!! getSelectForForeignColumn('tbl_city', 'city_id', 'cityName', '') !!}
                                        </div>
                                        <div class="col-lg-6">{!! getSelectForForeignColumn('tbl_district', 'district_id', 'districtName', '') !!}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ createText('geoMapLocation', 'geoMapLocation', 'GeoMapLocation') }}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ createText('documentType', 'documentType', 'DocumentType') }}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ createText('documentName', 'documentName', 'DocumentName') }}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ createText('documentPath', 'documentPath', 'DocumentPath') }}
                                        </div>
                                        <div class="col-lg-6">{{ createText('budgetSize', 'budgetSize', 'BudgetSize') }}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive']) }}
                                        </div>
                                        <div class="col-lg-6">{{ createText('remarks', 'remarks', 'Remarks') }}
                                        </div> <br>
                                        <div class="col-md-12"><?php createButton('btn-primary', '', 'Submit'); ?>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
