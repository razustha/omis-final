<form action="{{route('travelfleet.vehiclelog.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("riderName","riderName","Rider Name")}}
</div><div class="col-lg-6">{{createText("vehicleNumber","vehicleNumber","Vehicle Number")}}
</div><div class="col-lg-6">{{createDate("date","date","Date")}}
</div><div class="col-lg-6">{{createText("arrivalTime","arrivalTime","Arrival Time")}}
</div><div class="col-lg-6">{{createText("departureTime","departureTime","Departure Time")}}
</div><div class="col-lg-6">{{createText("from","from","From")}}
</div><div class="col-lg-4">{{createText("to","to","To")}}
</div><div class="col-lg-4">{{createText("purpose","purpose","Purpose")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>