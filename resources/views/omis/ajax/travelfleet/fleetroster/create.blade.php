
                <form method="POST" action="{{route('travelfleet.fleetroster.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("travelDate","travelDate","TravelDate")}}
</div><div class="col-lg-6">{{createText("placeVisit","placeVisit","PlaceVisit")}}
</div><div class="col-lg-6">{{createText("pickUpTime","pickUpTime","PickUpTime")}}
</div><div class="col-lg-6">{{createText("dropTime","dropTime","DropTime")}}
</div><div class="col-lg-6">{{createText("purpose","purpose","Purpose")}}
</div><div class="col-lg-6">{{createText("driverName","driverName","DriverName")}}
</div><div class="col-lg-6">{{createText("staffName","staffName","StaffName")}}
</div><div class="col-lg-6">{{createText("staffPosition","staffPosition","StaffPosition")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>