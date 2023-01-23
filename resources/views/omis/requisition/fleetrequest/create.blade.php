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
                        <a href="{{ route('requisition.fleetrequest.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('requisition.fleetrequest.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("fleet_id","fleet_id","Fleet Id")}}
</div><div class="col-lg-6">{{createText("fleetName","fleetName","Fleet Name")}}
</div><div class="col-lg-6">{{createText("modelNumber","modelNumber","Model Number")}}
</div><div class="col-lg-6">{{createText("numberPlate_id","numberPlate_id","Plate Id")}}
</div><div class="col-lg-6">{{createText("numberPlateType","numberPlateType","Plate Type")}}
</div><div class="col-lg-6">{{createText("plateNumber","plateNumber","Plate Number")}}
</div><div class="col-lg-6">{{createText("rootPermit","rootPermit","Root Permit")}}
</div><div class="col-lg-6">{{createDate("issueDate","issueDate","Issue Date", "", "", "")}}
</div><div class="col-lg-4">{{createDate("expireDate","expireDate","Expire Date", "", "", "")}}
</div><div class="col-lg-4">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', "Remarks")}}{{createTextArea("remarks","remarks","remarks", "", "")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection