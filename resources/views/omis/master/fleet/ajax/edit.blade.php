
        <form action="{{route('master.fleet.update',[$data->fleet_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-4">{{createText("fleetParent_id","fleetParent_id","Fleet Parent",'',$data->fleetParent_id)}}
</div><div class="col-lg-4">{{createText("fleetName","fleetName","Fleet Name",'',$data->fleetName)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createLabel('fleetDetails','form-label col-form-label','Details')}}{{createTextArea("fleetDetails","fleetDetails","FleetDetails",'',$data->fleetDetails)}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>