
                <form >
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("fleetName","fleetName","FleetName")}}
</div><div class="col-lg-6">{{createText("driverName","driverName","DriverName")}}
</div><div class="col-lg-6">{{createText("model","model","Model")}}
</div><div class="col-lg-6">{{createText("date","date","Date")}}
</div><div class="col-lg-6">{{createText("time","time","Time")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>