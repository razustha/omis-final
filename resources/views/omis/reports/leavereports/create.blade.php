@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Add Leavereports</h1>

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
                <form method="POST" action="{{route('reports.leavereports.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("applicant_id","applicant_id","Applicant Id")}}
</div><div class="col-lg-6">{{createText("leaveApprovedBy","leaveApprovedBy","Leave Approved By")}}
</div><div class="col-lg-6">{{createText("totalLeaveDays","totalLeaveDays","Total Leave Days")}}
</div><div class="col-lg-6">{{createDate("leaveDate","leaveDate","Leave Date",'','','')}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createLabel('leaveReason','form-label col-form-label','Leave Reason')}}{{createTextArea("leaveReason",'',"leaveReason",'',"")}}
</div>
<div class="col-lg-6">{{createLabel('','form-label col-form-label','Remarks')}}{{createTextArea("remarks",'',"remarks",'',"")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection