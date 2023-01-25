
                <form action="{{route('travelfleet.fleetmanagement.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("lesseeName","lesseeName","Lessee Name")}}
</div><div class="col-lg-6">{{createText("lesseeAddress","lesseeAddress","Lessee Address")}}
</div><div class="col-lg-6">{{createText("lessorName","lessorName","Lessor Name")}}
</div><div class="col-lg-6">{{createText("lessorContact","lessorContact","Lessor Contact")}}
</div><div class="col-lg-6">{{createText("vehicleType_id","vehicleType_id","Vehicle Id")}}
</div><div class="col-lg-6">{{createText("vehicleNumber","vehicleNumber","Vehicle Number")}}

</div><div class="col-lg-4">{{createText("driverName","driverName","Driver Name")}}
</div><div class="col-lg-4">{{createText("driverContact","driverContact","Driver Contact")}}
</div><div class="col-lg-4">{{createText("driverAddress","driverAddress","Driver Address")}}
</div><div class="col-lg-4">{{createText("staff_Id","staff_Id","Staff Id")}}
</div><div class="col-lg-4">{{createText("staffName","staffName","Staff Name")}}
</div><div class="col-lg-4">{{createText("staffIdentity","staffIdentity","Staff Identity")}}
</div><div class="col-lg-6">{{createText("organizationName","organizationName","OrganizationName")}}

</div><div class="col-lg-6">{{createText("totalPeople","totalPeople","Total People")}}
</div><div class="col-lg-4">{{createDate("travelDateFrom","travelDateFrom","Travel From")}}
</div><div class="col-lg-4">{{createDate("travelDateTo","travelDateTo","Travel To")}}
</div><div class="col-lg-4">{{createText("NumerOfDays","NumerOfDays","Numer Of Days")}}
</div><div class="col-lg-4">{{createText("travelPlaceFrom","travelPlaceFrom","Travel Place From")}}
</div><div class="col-lg-4">{{createText("travelPlaceTo","travelPlaceTo","Travel Place To")}}
</div><div class="col-lg-4">{{createText("costPerDay","costPerDay","Cost Per Day")}}
</div><div class="col-lg-6">{{createText("tax","tax","Tax")}}
</div><div class="col-lg-6">{{createText("remainingAmount","remainingAmount","Remaining Amount")}}
</div><div class="col-lg-6">{{createText("HCIName","HCIName","HCI Name")}}
</div><div class="col-lg-6">{{createDate("HCIDate","HCIDate","HCI Date")}}
</div><div class="col-lg-6">{{createText("HCIAddress","HCIAddress","HCI Address")}}
</div><div class="col-lg-6">{{createText("vehileCompany_id","vehileCompany_id","Vehile Company Id")}}
</div><div class="col-lg-4">{{createText("vehileCompanyName","vehileCompanyName","Vehile Company Name")}}
</div><div class="col-lg-4">{{createDate("vehicleCompanyDate","vehicleCompanyDate","Vehicle Company Date")}}
</div><div class="col-lg-4">{{createText("vehicleCompanyAddress","vehicleCompanyAddress","Vehicle Company Address")}}
</div><div class="col-lg-12">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>