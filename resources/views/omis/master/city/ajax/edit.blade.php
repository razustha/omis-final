<form action="{{ route('master.city.update', [$data->city_id]) }}" id="updateCustomForm">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-6">{!! getSelectForForeignColumn('tbl_country', 'country_id', 'countryName', '', $data,'Country Name') !!}
        </div>
        <div class="col-lg-6">{!! getSelectForForeignColumn('tbl_state', 'state_id', 'stateName', '', $data,'State Name') !!}
        </div>
        <div class="col-lg-4">{!! getSelectForForeignColumn('tbl_district', 'district_id', 'districtName', '', $data,'District Name') !!}
        </div>
        <div class="col-lg-4">{{ createText('cityName', 'cityName', 'City Name', '', $data->cityName) }}
        </div>
        <div class="col-lg-4">
            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive'], $data->status) }}
        </div>
        <div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{ createTextArea('remarks', 'remarks', 'Remarks', '', $data->remarks) }}
        </div>
        <div class="col-md-12"><?php createButton('btn-primary btn-update', '', 'Update'); ?>
        </div>
</form>
<script>
    // Fetch state according to country
    $('#country_id').on('change',function(e){
        e.preventDefault();
        var country_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "{{route('master.state.getState')}}",
                data: {
                    'country_id': country_id
                },
                dataType: "json",
                success: function(response){
                    // console.log(response);
                    $('#state_id').html('<option value="#" selected disabled>Choose State</option>');
                    $.each(response.message, function(key,value){
                        $('#state_id').append('<option value='+value.state_id+'>'+value.stateName+'</option>');
                    });
                }
            });
    });

    // Fetch District according to state
    $('#state_id').on('change',function(e){
        e.preventDefault();
        var state_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "{{route('master.state.getDistrict')}}",
                data: {
                    'state_id': state_id
                },
                dataType: "json",
                success: function(response){
                    // console.log(response);
                    $('#district_id').html('<option value="#" selected disabled>Choose District</option>');
                    $.each(response.message, function(key,value){
                        $('#district_id').append('<option value='+value.district_id+'>'+value.districtName+'</option>');
                    });
                }
            });
    });

    // Fetch City according to district
    $('#district_id').on('change',function(e){
        e.preventDefault();
        var district_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "{{route('master.state.getCity')}}",
                data: {
                    'district_id': district_id
                },
                dataType: "json",
                success: function(response){
                    // console.log(response);
                    $('#city_id').html('<option value="#" selected disabled>Choose City</option>');
                    $.each(response.message, function(key,value){
                        $('#city_id').append('<option value='+value.city_id+'>'+value.cityName+'</option>');
                    });
                }
            });
    });
</script>