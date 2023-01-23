@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit Fleetrequest</h1>

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
                <form method="POST" action="{{route('requisition.fleetrequest.update',[$data->fleetRequest_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("fleet_id","fleet_id","Fleet Id",'',$data->fleet_id)}}
</div><div class="col-lg-6">{{createText("fleetName","fleetName","FleetName",'',$data->fleetName)}}
</div><div class="col-lg-6">{{createText("modelNumber","modelNumber","ModelNumber",'',$data->modelNumber)}}
</div><div class="col-lg-6">{{createText("numberPlate_id","numberPlate_id","NumberPlate Id",'',$data->numberPlate_id)}}
</div><div class="col-lg-6">{{createText("numberPlateType","numberPlateType","NumberPlateType",'',$data->numberPlateType)}}
</div><div class="col-lg-6">{{createText("plateNumber","plateNumber","PlateNumber",'',$data->plateNumber)}}
</div><div class="col-lg-6">{{createText("rootPermit","rootPermit","RootPermit",'',$data->rootPermit)}}
</div><div class="col-lg-6">{{createDate("issueDate","issueDate","IssueDate",'',$data->issueDate)}}
</div><div class="col-lg-4">{{createDate("expireDate","expireDate","ExpireDate",'',$data->expireDate)}}
</div><div class="col-lg-4">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection