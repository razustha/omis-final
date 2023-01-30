<form action="{{ route('master.city.store') }}" id="storeCustomForm">
    @csrf
    <div class="row">
        <div class="col-lg-6">{!! getSelectForForeignColumn('tbl_country', 'country_id', 'countryName', '') !!}
        </div>
        <div class="col-lg-6">{!! getSelectForForeignColumn('tbl_state', 'state_id', 'stateName', '') !!}
        </div>
        <div class="col-lg-4">{!! getSelectForForeignColumn('tbl_district', 'district_id', 'districtName', '') !!}
        </div>
        <div class="col-lg-4">{{ createText('cityName', 'cityName', 'CityName') }}
        </div>
        <div class="col-lg-4">{{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive']) }}
        </div>
        <div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{ createTextArea('remarks', 'remarks', 'Remarks','','') }}
        </div> <br>
        <div class="col-md-12"><?php createButton('btn-primary btn-store', '', 'Submit'); ?>
        </div>
</form>
