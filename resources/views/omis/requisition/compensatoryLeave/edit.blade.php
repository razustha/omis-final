@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit CompensatoryLeave</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('requisition.compensatoryleave.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('requisition.compensatoryleave.update',[$data->compensatoryLeave_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("applicant_id","applicant_id","Applicant Id",'',$data->applicant_id)}}
</div><div class="col-lg-6">{{createText("postion","postion","Postion",'',$data->postion)}}
</div><div class="col-lg-6">{{createText("department_id","department_id","Department Id",'',$data->department_id)}}
</div><div class="col-lg-6">{{createText("workingDay","workingDay","WorkingDay",'',$data->workingDay)}}
</div><div class="col-lg-6">{{createDate("workingDate","workingDate","WorkingDate",'',$data->workingDate)}}
</div><div class="col-lg-6">{{createText("holidayReason","holidayReason","HolidayReason",'',$data->holidayReason)}}
</div><div class="col-lg-6">{{createText("from","from","From",'',$data->from)}}
</div><div class="col-lg-6">{{createText("to","to","To",'',$data->to)}}
</div><div class="col-lg-6">{{createText("workingReason","workingReason","WorkingReason",'',$data->workingReason)}}
</div><div class="col-lg-6">{{createText("recommendation","recommendation","Recommendation",'',$data->recommendation)}}
</div><div class="col-lg-6">{{createText("verificationUnit","verificationUnit","VerificationUnit",'',$data->verificationUnit)}}
</div><div class="col-lg-6">{{createDate("verifiedDate","verifiedDate","VerifiedDate",'',$data->verifiedDate)}}
</div><div class="col-lg-6">{{createText("approvedBy","approvedBy","ApprovedBy",'',$data->approvedBy)}}
</div><div class="col-lg-6">{{createDate("approvedDate","approvedDate","ApprovedDate",'',$data->approvedDate)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","remarks","3",$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("mt-3 btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection