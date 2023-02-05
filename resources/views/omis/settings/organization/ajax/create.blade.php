<form action="{{ route('settings.organization.store') }}" id="storeCustomForm">
    @csrf
    <div class="row">
        <div class="col-lg-4">{!! getSelectForForeignColumn('tbl_package', 'package_id', 'name', '', '', 'Package') !!}
        </div>
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
        <div class="col-lg-4">{!! getSelectForForeignColumn('tbl_district', 'district_id', 'districtName', '', '', 'District') !!}
        </div>
        <div class="col-lg-4">{!! getSelectForForeignColumn('tbl_city', 'city_id', 'cityName', '', '', 'City') !!}
        </div>
        <div class="col-lg-4">{{ createText('geoMapLocation', 'geoMapLocation', 'GeoMapLocation') }}
        </div>

        <div class="col-lg-4">{{ createText('budgetSize', 'budgetSize', 'Budget Size') }}
        </div>
        <div class="col-lg-4">
            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive']) }}
        </div>
        <div class="col-lg-4">{{ createText('remarks', 'remarks', 'Remarks') }}
        </div>
        <div class="col-lg-4">
            <div class="form-group mt-2"><label class="form-label">Logo</label>
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
        <br>
        <div class="col-md-12"><?php createButton('btn-primary btn-store', '', 'Submit'); ?>
        </div>
</form>

<script>
    // Fetch state according to country
    $('#country_id').on('change', function(e) {
        e.preventDefault();
        var country_id = $(this).val();
        $.ajax({
            type: "GET",
            url: "{{ route('master.state.getState') }}",
            data: {
                'country_id': country_id
            },
            dataType: "json",
            success: function(response) {
                // console.log(response);
                $('#state_id').html('<option value="#" selected disabled>Choose State</option>');
                $.each(response.message, function(key, value) {
                    $('#state_id').append('<option value=' + value.state_id + '>' + value
                        .stateName + '</option>');
                });
            }
        });
    });

    // Fetch District according to state
    $('#state_id').on('change', function(e) {
        e.preventDefault();
        var state_id = $(this).val();
        $.ajax({
            type: "GET",
            url: "{{ route('master.state.getDistrict') }}",
            data: {
                'state_id': state_id
            },
            dataType: "json",
            success: function(response) {
                // console.log(response);
                $('#district_id').html(
                    '<option value="#" selected disabled>Choose District</option>');
                $.each(response.message, function(key, value) {
                    $('#district_id').append('<option value=' + value.district_id + '>' +
                        value.districtName + '</option>');
                });
            }
        });
    });

    // Fetch City according to district
    $('#district_id').on('change', function(e) {
        e.preventDefault();
        var district_id = $(this).val();
        $.ajax({
            type: "GET",
            url: "{{ route('master.state.getCity') }}",
            data: {
                'district_id': district_id
            },
            dataType: "json",
            success: function(response) {
                // console.log(response);
                $('#city_id').html('<option value="#" selected disabled>Choose City</option>');
                $.each(response.message, function(key, value) {
                    $('#city_id').append('<option value=' + value.city_id + '>' + value
                        .cityName + '</option>');
                });
            }
        });
    });
</script>
