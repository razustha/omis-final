
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("fleetParent_id","fleetParent_id","FleetParent Id",'',$data->fleetParent_id)}}
</div><div class="col-lg-6">{{createText("fleetName","fleetName","FleetName",'',$data->fleetName)}}
</div><div class="col-lg-6">{{createText("fleetDetails","fleetDetails","FleetDetails",'',$data->fleetDetails)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>