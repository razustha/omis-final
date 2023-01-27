
                <form action="{{route('travelfleet.fleetroster.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createDate("travelDate","travelDate","Travel Date")}}
</div><div class="col-lg-6">{{createText("placeVisit","placeVisit","Place Visit")}}
</div><div class="col-lg-6">{{createText("pickUpTime","pickUpTime","PickUp Time")}}
</div><div class="col-lg-6">{{createText("dropTime","dropTime","Drop Time")}}
</div><div class="col-lg-6">{{createText("purpose","purpose","Purpose")}}
</div><div class="col-lg-6">{{createText("driverName","driverName","Driver Name")}}
</div><div class="col-lg-4">{{createText("staffName","staffName","Staff Name")}}
</div><div class="col-lg-4">{{createText("staffPosition","staffPosition","Staff Position")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>