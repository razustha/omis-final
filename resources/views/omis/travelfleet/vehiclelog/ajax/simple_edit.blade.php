
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("riderName","riderName","RiderName",'',$data->riderName)}}
</div><div class="col-lg-6">{{createText("vehicleNumber","vehicleNumber","VehicleNumber",'',$data->vehicleNumber)}}
</div><div class="col-lg-6">{{createText("date","date","Date",'',$data->date)}}
</div><div class="col-lg-6">{{createText("arrivalTime","arrivalTime","ArrivalTime",'',$data->arrivalTime)}}
</div><div class="col-lg-6">{{createText("departureTime","departureTime","DepartureTime",'',$data->departureTime)}}
</div><div class="col-lg-6">{{createText("from","from","From",'',$data->from)}}
</div><div class="col-lg-6">{{createText("to","to","To",'',$data->to)}}
</div><div class="col-lg-6">{{createText("purpose","purpose","Purpose",'',$data->purpose)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>