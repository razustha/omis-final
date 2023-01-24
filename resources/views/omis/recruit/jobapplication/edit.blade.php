@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit Jobapplication</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('recruit.jobapplication.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('recruit.jobapplication.update',[$data->jobapplication_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("applyJobTitle","applyJobTitle","ApplyJobTitle",'',$data->applyJobTitle)}}
</div><div class="col-lg-6">{{createText("applicantsName","applicantsName","ApplicantsName",'',$data->applicantsName)}}
</div><div class="col-lg-6">{{createText("applyedDepartmentName","applyedDepartmentName","ApplyedDepartmentName",'',$data->applyedDepartmentName)}}
</div><div class="col-lg-6">{{createText("workingExperience","workingExperience","WorkingExperience",'',$data->workingExperience)}}
</div><div class="col-lg-6">{{createText("previousWorkingCompanyName","previousWorkingCompanyName","PreviousWorkingCompanyName",'',$data->previousWorkingCompanyName)}}
</div><div class="col-lg-6">{{createText("applyDate","applyDate","ApplyDate",'',$data->applyDate)}}
</div><div class="col-lg-6">{{createText("recommendedBy","recommendedBy","RecommendedBy",'',$data->recommendedBy)}}
</div><div class="col-lg-6">{{createText("portfolio","portfolio","Portfolio",'',$data->portfolio)}}
</div><div class="col-lg-6">{{createText("fullTime","fullTime","FullTime",'',$data->fullTime)}}
</div><div class="col-lg-6">{{createText("partTime","partTime","PartTime",'',$data->partTime)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection