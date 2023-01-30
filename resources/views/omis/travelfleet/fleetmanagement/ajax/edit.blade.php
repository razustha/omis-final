
        <form action="{{route('travelfleet.fleetmanagement.update',[$data->fleetmanagement_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("lesseeName","lesseeName","Lessee Name",'',$data->lesseeName)}}
</div><div class="col-lg-6">{{createText("lesseeAddress","lesseeAddress","Lessee Address",'',$data->lesseeAddress)}}
</div><div class="col-lg-6">{{createText("lessorName","lessorName","Lessor Name",'',$data->lessorName)}}
</div><div class="col-lg-6">{{createText("lessorContact","lessorContact","Lessor Contact",'',$data->lessorContact)}}
</div><div class="col-lg-6">{{createText("vehicleType_id","vehicleType_id","Vehicle Id",'',$data->vehicleType_id)}}
</div><div class="col-lg-6">{{createText("vehicleNumber","vehicleNumber","Vehicle Number",'',$data->vehicleNumber)}}
</div><div class="col-lg-4">{{createText("driverName","driverName","Driver Name",'',$data->driverName)}}
</div><div class="col-lg-4">{{createText("driverContact","driverContact","Driver Contact",'',$data->driverContact)}}
</div><div class="col-lg-4">{{createText("driverAddress","driverAddress","Driver Address",'',$data->driverAddress)}}
</div><div class="col-lg-4">{{createText("staff_Id","staff_Id","Staff Id",'',$data->staff_Id)}}
</div><div class="col-lg-4">{{createText("staffName","staffName","Staff Name",'',$data->staffName)}}
</div><div class="col-lg-4">{{createText("staffIdentity","staffIdentity","Staff Identity",'',$data->staffIdentity)}}
</div><div class="col-lg-6">{{createText("organizationName","organizationName","Organization Name",'',$data->organizationName)}}

</div><div class="col-lg-6">{{createText("totalPeople","totalPeople","Total People",'',$data->totalPeople)}}
</div><div class="col-lg-4">{{createDate("travelDateFrom","travelDateFrom","Travel From",'',$data->travelDateFrom)}}
</div><div class="col-lg-4">{{createDate("travelDateTo","travelDateTo","Travel To",'',$data->travelDateTo)}}
</div><div class="col-lg-4">{{createText("NumerOfDays","NumerOfDays","Nume rOf Days",'',$data->NumerOfDays)}}
</div><div class="col-lg-4">{{createText("travelPlaceFrom","travelPlaceFrom","Travel Place From",'',$data->travelPlaceFrom)}}
</div><div class="col-lg-4">{{createText("travelPlaceTo","travelPlaceTo","Travel Place To",'',$data->travelPlaceTo)}}
</div><div class="col-lg-4">{{createText("costPerDay","costPerDay","Cost Per Day",'',$data->costPerDay)}}
</div><div class="col-lg-6">{{createText("tax","tax","Tax",'',$data->tax)}}
</div><div class="col-lg-6">{{createText("remainingAmount","remainingAmount","Remaining Amount",'',$data->remainingAmount)}}
</div><div class="col-lg-6">{{createText("HCIName","HCIName","HCI Name",'',$data->HCIName)}}
</div><div class="col-lg-6">{{createDate("HCIDate","HCIDate","HCI Date",'',$data->HCIDate)}}
</div><div class="col-lg-6">{{createText("HCIAddress","HCIAddress","HCI Address",'',$data->HCIAddress)}}
</div><div class="col-lg-6">{{createText("vehileCompany_id","vehileCompany_id","Vehile Company Id",'',$data->vehileCompany_id)}}
</div><div class="col-lg-4">{{createText("vehileCompanyName","vehileCompanyName","Vehile Company Name",'',$data->vehileCompanyName)}}
</div><div class="col-lg-4">{{createDate("vehicleCompanyDate","vehicleCompanyDate","Vehicle Company Date",'',$data->vehicleCompanyDate)}}
</div><div class="col-lg-4">{{createText("vehicleCompanyAddress","vehicleCompanyAddress","Vehicle Company Address",'',$data->vehicleCompanyAddress)}}
</div><div class="col-lg-12">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>