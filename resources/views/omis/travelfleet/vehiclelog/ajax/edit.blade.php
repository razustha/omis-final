<form action="{{route('travelfleet.vehiclelog.update',[$data->vehiclelog_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("riderName","riderName","Rider Name",'',$data->riderName)}}
</div><div class="col-lg-6">{{createText("vehicleNumber","vehicleNumber","Vehicle Number",'',$data->vehicleNumber)}}
</div><div class="col-lg-6">{{createDate("date","date","Date",'',$data->date)}}
</div><div class="col-lg-6">{{createText("arrivalTime","arrivalTime","Arrival Time",'',$data->arrivalTime)}}
</div><div class="col-lg-6">{{createText("departureTime","departureTime","Departure Time",'',$data->departureTime)}}
</div><div class="col-lg-6">{{createText("from","from","From",'',$data->from)}}
</div><div class="col-lg-4">{{createText("to","to","To",'',$data->to)}}
</div><div class="col-lg-4">{{createText("purpose","purpose","Purpose",'',$data->purpose)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>