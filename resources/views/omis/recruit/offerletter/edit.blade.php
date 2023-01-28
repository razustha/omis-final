@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit Offerletter</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('recruit.offerletter.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('recruit.offerletter.update',[$data->offerletter_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("applicants_id","applicants_id","Applicants Id",'',$data->applicants_id)}}
</div><div class="col-lg-6">{{createText("designation","designation","Designation",'',$data->designation)}}
</div><div class="col-lg-6">{{createText("departmentName","departmentName","DepartmentName",'',$data->departmentName)}}
</div><div class="col-lg-6">{{createText("workingHour","workingHour","WorkingHour",'',$data->workingHour)}}
</div><div class="col-lg-6">{{createText("workingShift","workingShift","WorkingShift",'',$data->workingShift)}}
</div><div class="col-lg-6">{{createText("workingMode","workingMode","WorkingMode",'',$data->workingMode)}}
</div><div class="col-lg-6">{{createText("offeredSalary","offeredSalary","OfferedSalary",'',$data->offeredSalary)}}
</div><div class="col-lg-6">{{createText("contractTimePeriod","contractTimePeriod","ContractTimePeriod",'',$data->contractTimePeriod)}}
</div><div class="col-lg-6">{{createText("offerDescription","offerDescription","OfferDescription",'',$data->offerDescription)}}
</div><div class="col-lg-6">{{createText("joiningDate","joiningDate","JoiningDate",'',$data->joiningDate)}}
</div><div class="col-lg-6">{{createText("offeredIssueBy","offeredIssueBy","OfferedIssueBy",'',$data->offeredIssueBy)}}
</div><div class="col-lg-6">{{createText("offerIssueDate","offerIssueDate","OfferIssueDate",'',$data->offerIssueDate)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection