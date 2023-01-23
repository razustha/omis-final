@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit Leavereports</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('reports.leavereports.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('reports.leavereports.update',[$data->leaveReports_id ])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("applicant_id","applicant_id","Applicant Id",'',$data->applicant_id)}}
</div><div class="col-lg-6">{{createText("leaveReason","leaveReason","LeaveReason",'',$data->leaveReason)}}
</div><div class="col-lg-6">{{createText("leaveApprovedBy","leaveApprovedBy","LeaveApprovedBy",'',$data->leaveApprovedBy)}}
</div><div class="col-lg-6">{{createText("totalLeaveDays","totalLeaveDays","TotalLeaveDays",'',$data->totalLeaveDays)}}
</div><div class="col-lg-6">{{createDate("leaveDate","leaveDate","LeaveDate",'',$data->leaveDate)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createLabel('','form-label col-form-label','Remarks')}}{{createTextArea("remarks",'',"remarks","",$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection