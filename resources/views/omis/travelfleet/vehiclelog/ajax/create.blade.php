
                <form >
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("riderName","riderName","RiderName")}}
</div><div class="col-lg-6">{{createText("vehicleNumber","vehicleNumber","VehicleNumber")}}
</div><div class="col-lg-6">{{createText("date","date","Date")}}
</div><div class="col-lg-6">{{createText("arrivalTime","arrivalTime","ArrivalTime")}}
</div><div class="col-lg-6">{{createText("departureTime","departureTime","DepartureTime")}}
</div><div class="col-lg-6">{{createText("from","from","From")}}
</div><div class="col-lg-6">{{createText("to","to","To")}}
</div><div class="col-lg-6">{{createText("purpose","purpose","Purpose")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>