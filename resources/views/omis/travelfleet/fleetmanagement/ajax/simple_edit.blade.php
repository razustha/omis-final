
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("lesseeName","lesseeName","LesseeName",'',$data->lesseeName)}}
</div><div class="col-lg-6">{{createText("lesseeAddress","lesseeAddress","LesseeAddress",'',$data->lesseeAddress)}}
</div><div class="col-lg-6">{{createText("lessorName","lessorName","LessorName",'',$data->lessorName)}}
</div><div class="col-lg-6">{{createText("lessorContact","lessorContact","LessorContact",'',$data->lessorContact)}}
</div><div class="col-lg-6">{{createText("vehicleType_id","vehicleType_id","VehicleType Id",'',$data->vehicleType_id)}}
</div><div class="col-lg-6">{{createText("vehicleNumber","vehicleNumber","VehicleNumber",'',$data->vehicleNumber)}}
</div><div class="col-lg-6">{{createText("driverName","driverName","DriverName",'',$data->driverName)}}
</div><div class="col-lg-6">{{createText("driverContact","driverContact","DriverContact",'',$data->driverContact)}}
</div><div class="col-lg-6">{{createText("driverAddress","driverAddress","DriverAddress",'',$data->driverAddress)}}
</div><div class="col-lg-6">{{createText("organizationName","organizationName","OrganizationName",'',$data->organizationName)}}
</div><div class="col-lg-6">{{createText("staff_Id","staff_Id","Staff Id",'',$data->staff_Id)}}
</div><div class="col-lg-6">{{createText("staffName","staffName","StaffName",'',$data->staffName)}}
</div><div class="col-lg-6">{{createText("staffIdentity","staffIdentity","StaffIdentity",'',$data->staffIdentity)}}
</div><div class="col-lg-6">{{createText("totalPeople","totalPeople","TotalPeople",'',$data->totalPeople)}}
</div><div class="col-lg-6">{{createText("travelDateFrom","travelDateFrom","TravelDateFrom",'',$data->travelDateFrom)}}
</div><div class="col-lg-6">{{createText("travelDateTo","travelDateTo","TravelDateTo",'',$data->travelDateTo)}}
</div><div class="col-lg-6">{{createText("NumerOfDays","NumerOfDays","NumerOfDays",'',$data->NumerOfDays)}}
</div><div class="col-lg-6">{{createText("travelPlaceFrom","travelPlaceFrom","TravelPlaceFrom",'',$data->travelPlaceFrom)}}
</div><div class="col-lg-6">{{createText("travelPlaceTo","travelPlaceTo","TravelPlaceTo",'',$data->travelPlaceTo)}}
</div><div class="col-lg-6">{{createText("costPerDay","costPerDay","CostPerDay",'',$data->costPerDay)}}
</div><div class="col-lg-6">{{createText("tax","tax","Tax",'',$data->tax)}}
</div><div class="col-lg-6">{{createText("remainingAmount","remainingAmount","RemainingAmount",'',$data->remainingAmount)}}
</div><div class="col-lg-6">{{createText("HCIName","HCIName","HCIName",'',$data->HCIName)}}
</div><div class="col-lg-6">{{createText("HCIDate","HCIDate","HCIDate",'',$data->HCIDate)}}
</div><div class="col-lg-6">{{createText("HCIAddress","HCIAddress","HCIAddress",'',$data->HCIAddress)}}
</div><div class="col-lg-6">{{createText("vehileCompany_id","vehileCompany_id","VehileCompany Id",'',$data->vehileCompany_id)}}
</div><div class="col-lg-6">{{createText("vehileCompanyName","vehileCompanyName","VehileCompanyName",'',$data->vehileCompanyName)}}
</div><div class="col-lg-6">{{createText("vehicleCompanyDate","vehicleCompanyDate","VehicleCompanyDate",'',$data->vehicleCompanyDate)}}
</div><div class="col-lg-6">{{createText("vehicleCompanyAddress","vehicleCompanyAddress","VehicleCompanyAddress",'',$data->vehicleCompanyAddress)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>