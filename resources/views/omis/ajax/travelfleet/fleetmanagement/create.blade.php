
                <form method="POST" action="{{route('travelfleet.fleetmanagement.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("lesseeName","lesseeName","LesseeName")}}
</div><div class="col-lg-6">{{createText("lesseeAddress","lesseeAddress","LesseeAddress")}}
</div><div class="col-lg-6">{{createText("lessorName","lessorName","LessorName")}}
</div><div class="col-lg-6">{{createText("lessorContact","lessorContact","LessorContact")}}
</div><div class="col-lg-6">{{createText("vehicleType_id","vehicleType_id","VehicleType Id")}}
</div><div class="col-lg-6">{{createText("vehicleNumber","vehicleNumber","VehicleNumber")}}
</div><div class="col-lg-6">{{createText("driverName","driverName","DriverName")}}
</div><div class="col-lg-6">{{createText("driverContact","driverContact","DriverContact")}}
</div><div class="col-lg-6">{{createText("driverAddress","driverAddress","DriverAddress")}}
</div><div class="col-lg-6">{{createText("organizationName","organizationName","OrganizationName")}}
</div><div class="col-lg-6">{{createText("staff_Id","staff_Id","Staff Id")}}
</div><div class="col-lg-6">{{createText("staffName","staffName","StaffName")}}
</div><div class="col-lg-6">{{createText("staffIdentity","staffIdentity","StaffIdentity")}}
</div><div class="col-lg-6">{{createText("totalPeople","totalPeople","TotalPeople")}}
</div><div class="col-lg-6">{{createText("travelDateFrom","travelDateFrom","TravelDateFrom")}}
</div><div class="col-lg-6">{{createText("travelDateTo","travelDateTo","TravelDateTo")}}
</div><div class="col-lg-6">{{createText("NumerOfDays","NumerOfDays","NumerOfDays")}}
</div><div class="col-lg-6">{{createText("travelPlaceFrom","travelPlaceFrom","TravelPlaceFrom")}}
</div><div class="col-lg-6">{{createText("travelPlaceTo","travelPlaceTo","TravelPlaceTo")}}
</div><div class="col-lg-6">{{createText("costPerDay","costPerDay","CostPerDay")}}
</div><div class="col-lg-6">{{createText("tax","tax","Tax")}}
</div><div class="col-lg-6">{{createText("remainingAmount","remainingAmount","RemainingAmount")}}
</div><div class="col-lg-6">{{createText("HCIName","HCIName","HCIName")}}
</div><div class="col-lg-6">{{createText("HCIDate","HCIDate","HCIDate")}}
</div><div class="col-lg-6">{{createText("HCIAddress","HCIAddress","HCIAddress")}}
</div><div class="col-lg-6">{{createText("vehileCompany_id","vehileCompany_id","VehileCompany Id")}}
</div><div class="col-lg-6">{{createText("vehileCompanyName","vehileCompanyName","VehileCompanyName")}}
</div><div class="col-lg-6">{{createText("vehicleCompanyDate","vehicleCompanyDate","VehicleCompanyDate")}}
</div><div class="col-lg-6">{{createText("vehicleCompanyAddress","vehicleCompanyAddress","VehicleCompanyAddress")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>