@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Add Fleetmanagement</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('travelfleet.fleetmanagement.index') }}" class="btn btn-md d-md-none btn-primary">
                                <em class="icon ni ni-plus"></em>
                                <span>View Cities</span>
                            </a>
                        </li>

                    </ul>
                </div>
                </div>
            </div>

            <div class="nk-block">

                        <div class="card">
                            <div class="card-body">
                <form method="POST" action="{{route('travelfleet.fleetmanagement.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("lesseeName","lesseeName","Lessee Name")}}
</div><div class="col-lg-6">{{createText("lesseeAddress","lesseeAddress","Lessee Address")}}
</div><div class="col-lg-6">{{createText("lessorName","lessorName","Lessor Name")}}
</div><div class="col-lg-6">{{createText("lessorContact","lessorContact","Lessor Contact")}}
</div><div class="col-lg-6">{{createText("vehicleType_id","vehicleType_id","Vehicle Id")}}
</div><div class="col-lg-6">{{createText("vehicleNumber","vehicleNumber","Vehicle Number")}}
</div><div class="col-lg-6">{{createText("driverName","driverName","Driver Name")}}
</div><div class="col-lg-6">{{createText("driverContact","driverContact","Driver Contact")}}
</div><div class="col-lg-6">{{createText("driverAddress","driverAddress","Driver Address")}}
</div><div class="col-lg-6">{{createText("organizationName","organizationName","Organization Name")}}
</div><div class="col-lg-6">{{createText("staff_Id","staff_Id","Staff Id")}}
</div><div class="col-lg-6">{{createText("staffName","staffName","Staff Name")}}
</div><div class="col-lg-6">{{createText("staffIdentity","staffIdentity","Staff Identity")}}
</div><div class="col-lg-6">{{createText("totalPeople","totalPeople","Total People")}}
</div><div class="col-lg-6">{{createDate("travelDateFrom","travelDateFrom","Travel From", "", "", "")}}
</div><div class="col-lg-6">{{createDate("travelDateTo","travelDateTo","Travel To", "", "", "")}}
</div><div class="col-lg-6">{{createText("NumerOfDays","NumerOfDays","Numer Of Days")}}
</div><div class="col-lg-6">{{createText("travelPlaceFrom","travelPlaceFrom","Travel From")}}
</div><div class="col-lg-6">{{createText("travelPlaceTo","travelPlaceTo","Travel To")}}
</div><div class="col-lg-6">{{createText("costPerDay","costPerDay","Cost Per Day")}}
</div><div class="col-lg-6">{{createText("tax","tax","Tax")}}
</div><div class="col-lg-6">{{createText("remainingAmount","remainingAmount","Remaining Amount")}}
</div><div class="col-lg-6">{{createText("HCIName","HCIName","HCI Name")}}
</div><div class="col-lg-6">{{createDate("HCIDate","HCIDate","HCI Date", "", "", "")}}
</div><div class="col-lg-6">{{createText("HCIAddress","HCIAddress","HCI Address")}}
</div><div class="col-lg-6">{{createText("vehileCompany_id","vehileCompany_id","Company Id")}}
</div><div class="col-lg-6">{{createText("vehileCompanyName","vehileCompanyName","Company Name")}}
</div><div class="col-lg-6">{{createDate("vehicleCompanyDate","vehicleCompanyDate","Vehicle Date", "", "", "")}}
</div><div class="col-lg-4">{{createText("vehicleCompanyAddress","vehicleCompanyAddress","Company Address")}}
</div><div class="col-lg-4">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks", "", "")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection