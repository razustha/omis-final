@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit Fleetmanagement</h1>

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
                <form method="POST" action="{{route('travelfleet.fleetmanagement.update',[$data->fleetmanagement_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("lesseeName","lesseeName","Lessee Name",'',$data->lesseeName)}}
</div><div class="col-lg-6">{{createText("lesseeAddress","lesseeAddress","Lessee Address",'',$data->lesseeAddress)}}
</div><div class="col-lg-6">{{createText("lessorName","lessorName","Lessor Name",'',$data->lessorName)}}
</div><div class="col-lg-6">{{createText("lessorContact","lessorContact","Lessor Contact",'',$data->lessorContact)}}
</div><div class="col-lg-6">{{createText("vehicleType_id","vehicleType_id","Vehicle Id",'',$data->vehicleType_id)}}
</div><div class="col-lg-6">{{createText("vehicleNumber","vehicleNumber","Vehicle Number",'',$data->vehicleNumber)}}
</div><div class="col-lg-6">{{createText("driverName","driverName","Driver Name",'',$data->driverName)}}
</div><div class="col-lg-6">{{createText("driverContact","driverContact","Driver Contact",'',$data->driverContact)}}
</div><div class="col-lg-6">{{createText("driverAddress","driverAddress","Driver Address",'',$data->driverAddress)}}
</div><div class="col-lg-6">{{createText("organizationName","organizationName","Organization Name",'',$data->organizationName)}}
</div><div class="col-lg-6">{{createText("staff_Id","staff_Id","Staff Id",'',$data->staff_Id)}}
</div><div class="col-lg-6">{{createText("staffName","staffName","Staff Name",'',$data->staffName)}}
</div><div class="col-lg-6">{{createText("staffIdentity","staffIdentity","Staff Identity",'',$data->staffIdentity)}}
</div><div class="col-lg-6">{{createText("totalPeople","totalPeople","Total People",'',$data->totalPeople)}}
</div><div class="col-lg-6">{{createDate("travelDateFrom","travelDateFrom","Travel From",'',$data->travelDateFrom)}}
</div><div class="col-lg-6">{{createDate("travelDateTo","travelDateTo","Travel To",'',$data->travelDateTo)}}
</div><div class="col-lg-6">{{createText("NumerOfDays","NumerOfDays","Numer Of Days",'',$data->NumerOfDays)}}
</div><div class="col-lg-6">{{createText("travelPlaceFrom","travelPlaceFrom","Travel From",'',$data->travelPlaceFrom)}}
</div><div class="col-lg-6">{{createText("travelPlaceTo","travelPlaceTo","Travel To",'',$data->travelPlaceTo)}}
</div><div class="col-lg-6">{{createText("costPerDay","costPerDay","Cost Per Day",'',$data->costPerDay)}}
</div><div class="col-lg-6">{{createText("tax","tax","Tax",'',$data->tax)}}
</div><div class="col-lg-6">{{createText("remainingAmount","remainingAmount","Remaining Amount",'',$data->remainingAmount)}}
</div><div class="col-lg-6">{{createText("HCIName","HCIName","HCI Name",'',$data->HCIName)}}
</div><div class="col-lg-6">{{createDate("HCIDate","HCIDate","HCI Date",'',$data->HCIDate)}}
</div><div class="col-lg-6">{{createText("HCIAddress","HCIAddress","HCI Address",'',$data->HCIAddress)}}
</div><div class="col-lg-6">{{createText("vehileCompany_id","vehileCompany_id","Company Id",'',$data->vehileCompany_id)}}
</div><div class="col-lg-6">{{createText("vehileCompanyName","vehileCompanyName","CompanyName",'',$data->vehileCompanyName)}}
</div><div class="col-lg-6">{{createDate("vehicleCompanyDate","vehicleCompanyDate","Company Date",'',$data->vehicleCompanyDate)}}
</div><div class="col-lg-4">{{createText("vehicleCompanyAddress","vehicleCompanyAddress","Company Address",'',$data->vehicleCompanyAddress)}}
</div><div class="col-lg-4">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection