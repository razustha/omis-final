
                <form method="POST" action="{{route('requisition.fleetrequest.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("fleet_id","fleet_id","Fleet Id")}}
</div><div class="col-lg-6">{{createText("fleetName","fleetName","FleetName")}}
</div><div class="col-lg-6">{{createText("modelNumber","modelNumber","ModelNumber")}}
</div><div class="col-lg-6">{{createText("numberPlate_id","numberPlate_id","NumberPlate Id")}}
</div><div class="col-lg-6">{{createText("numberPlateType","numberPlateType","NumberPlateType")}}
</div><div class="col-lg-6">{{createText("plateNumber","plateNumber","PlateNumber")}}
</div><div class="col-lg-6">{{createText("rootPermit","rootPermit","RootPermit")}}
</div><div class="col-lg-6">{{createText("issueDate","issueDate","IssueDate")}}
</div><div class="col-lg-6">{{createText("expireDate","expireDate","ExpireDate")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>