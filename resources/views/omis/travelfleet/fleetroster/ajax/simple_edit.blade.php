
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("travelDate","travelDate","TravelDate",'',$data->travelDate)}}
</div><div class="col-lg-6">{{createText("placeVisit","placeVisit","PlaceVisit",'',$data->placeVisit)}}
</div><div class="col-lg-6">{{createText("pickUpTime","pickUpTime","PickUpTime",'',$data->pickUpTime)}}
</div><div class="col-lg-6">{{createText("dropTime","dropTime","DropTime",'',$data->dropTime)}}
</div><div class="col-lg-6">{{createText("purpose","purpose","Purpose",'',$data->purpose)}}
</div><div class="col-lg-6">{{createText("driverName","driverName","DriverName",'',$data->driverName)}}
</div><div class="col-lg-6">{{createText("staffName","staffName","StaffName",'',$data->staffName)}}
</div><div class="col-lg-6">{{createText("staffPosition","staffPosition","StaffPosition",'',$data->staffPosition)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>