
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("country_id","country_id","Country Id",'',$data->country_id)}}
</div><div class="col-lg-6">{{createText("state_id","state_id","State Id",'',$data->state_id)}}
</div><div class="col-lg-6">{{createText("district_id","district_id","District Id",'',$data->district_id)}}
</div><div class="col-lg-6">{{createText("cityName","cityName","CityName",'',$data->cityName)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>