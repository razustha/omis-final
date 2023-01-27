@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Add Fleetrequest</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('travelfleet.fleetrequest.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('travelfleet.fleetrequest.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_fleet","fleet_id","fleetName",'') !!}
</div><div class="col-lg-6">{{createText("fleetName","fleetName","FleetName")}}
</div><div class="col-lg-6">{{createText("modelNumber","modelNumber","ModelNumber")}}
</div><div class="col-lg-6">{{createText("numberPlate_id","numberPlate_id","NumberPlate Id")}}
</div><div class="col-lg-6">{{createText("numberPlateType","numberPlateType","NumberPlateType")}}
</div><div class="col-lg-6">{{createText("plateNumber","plateNumber","PlateNumber")}}
</div><div class="col-lg-6">{{createText("rootPermit","rootPermit","RootPermit")}}
</div><div class="col-lg-6">{{createText("issueDate","issueDate","IssueDate")}}
</div><div class="col-lg-6">{{createText("expireDate","expireDate","ExpireDate")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection