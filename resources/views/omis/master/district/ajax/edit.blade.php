
        <form action="{{route('master.district.update',[$data->district_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_country","country_id","countryName",'',$data) !!}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_state","state_id","stateName",'',$data) !!}
</div><div class="col-lg-6">{{createText("districtName","districtName","DistrictName",'',$data->districtName)}}
<!-- </div><div class="col-lg-4">{{createText("alias","alias","Alias",'',$data->alias)}} -->
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>