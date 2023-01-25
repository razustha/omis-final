
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("driverName","driverName","DriverName",'',$data->driverName)}}
</div><div class="col-lg-6">{{createText("driverPhone","driverPhone","DriverPhone",'',$data->driverPhone)}}
</div><div class="col-lg-6">{{createText("driverVehicle","driverVehicle","DriverVehicle",'',$data->driverVehicle)}}
</div><div class="col-lg-6">{{createText("vehicleNumber","vehicleNumber","VehicleNumber",'',$data->vehicleNumber)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>