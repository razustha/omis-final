
                <form action="{{route('master.fleet.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-4">{{createText("fleetParent_id","fleetParent_id","Fleet Parent")}}
</div><div class="col-lg-4">{{createText("fleetName","fleetName","Fleet Name")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createLabel('fleetDetails','form-label col-form-label','Details')}}{{createTextArea("fleetDetails","fleetDetails","FleetDetails","","")}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>