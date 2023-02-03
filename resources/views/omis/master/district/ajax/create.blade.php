
                <form action="{{route('master.district.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_country","country_id","countryName",'') !!}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_state","state_id","stateName",'') !!}
</div><div class="col-lg-6">{{createText("districtName","districtName","DistrictName")}}
<!-- </div><div class="col-lg-4">{{createText("alias","alias","Alias")}} -->
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>
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
    </script>