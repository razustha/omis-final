
                <form >
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("country_id","country_id","Country Id")}}
</div><div class="col-lg-6">{{createText("state_id","state_id","State Id")}}
</div><div class="col-lg-6">{{createText("district_id","district_id","District Id")}}
</div><div class="col-lg-6">{{createText("cityName","cityName","CityName")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>