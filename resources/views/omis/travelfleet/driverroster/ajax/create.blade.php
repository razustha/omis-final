<form action="{{route('travelfleet.driverroster.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("driverName","driverName","Driver Name")}}
</div><div class="col-lg-6">{{createText("driverPhone","driverPhone","Driver Phone")}}
</div><div class="col-lg-4">{{createText("driverVehicle","driverVehicle","Driver Vehicle")}}
</div><div class="col-lg-4">{{createText("vehicleNumber","vehicleNumber","Vehicle Number")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>