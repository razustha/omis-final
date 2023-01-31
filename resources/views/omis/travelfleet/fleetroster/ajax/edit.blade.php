
        <form action="{{route('travelfleet.fleetroster.update',[$data->fleetRoster_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createDate("travelDate","travelDate","Travel Date",'',$data->travelDate)}}
</div><div class="col-lg-6">{{createText("placeVisit","placeVisit","Place Visit",'',$data->placeVisit)}}
</div><div class="col-lg-6">{{createText("pickUpTime","pickUpTime","Pick Up Time",'',$data->pickUpTime)}}
</div><div class="col-lg-6">{{createText("dropTime","dropTime","Drop Time",'',$data->dropTime)}}
</div><div class="col-lg-6">{{createText("purpose","purpose","Purpose",'',$data->purpose)}}
</div><div class="col-lg-6">{{createText("driverName","driverName","Driver Name",'',$data->driverName)}}
</div><div class="col-lg-4">{{createText("staffName","staffName","Staff Name",'',$data->staffName)}}
</div><div class="col-lg-4">{{createText("staffPosition","staffPosition","Staff Position",'',$data->staffPosition)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>