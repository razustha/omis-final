@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit Interviewschedule</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('recruit.interviewschedule.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('recruit.interviewschedule.update',[$data->interviewschedule_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("applicants_id","applicants_id","Applicants Id",'',$data->applicants_id)}}
</div><div class="col-lg-6">{{createText("jobTitle","jobTitle","JobTitle",'',$data->jobTitle)}}
</div><div class="col-lg-6">{{createText("jobDepartment","jobDepartment","JobDepartment",'',$data->jobDepartment)}}
</div><div class="col-lg-6">{{createText("interviewerName","interviewerName","InterviewerName",'',$data->interviewerName)}}
</div><div class="col-lg-6">{{createText("jobInterviewTime","jobInterviewTime","JobInterviewTime",'',$data->jobInterviewTime)}}
</div><div class="col-lg-6">{{createText("scheduleBy","scheduleBy","ScheduleBy",'',$data->scheduleBy)}}
</div><div class="col-lg-6">{{createText("recommendedBy","recommendedBy","RecommendedBy",'',$data->recommendedBy)}}
</div><div class="col-lg-6">{{createText("scheduleDate","scheduleDate","ScheduleDate",'',$data->scheduleDate)}}
</div><div class="col-lg-6">{{createText("interviewMode","interviewMode","InterviewMode",'',$data->interviewMode)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection