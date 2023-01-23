
                <form action="{{route('master.fleet.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("fleetParent_id","fleetParent_id","FleetParent Id")}}
</div><div class="col-lg-6">{{createText("fleetName","fleetName","FleetName")}}
</div><div class="col-lg-6">{{createText("fleetDetails","fleetDetails","FleetDetails")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>