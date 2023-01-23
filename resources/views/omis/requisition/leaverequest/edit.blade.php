@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit Leaverequest</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('requisition.leaverequest.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('requisition.leaverequest.update',[$data->leaverequest_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("leaveType","leaveType","LeaveType",'',$data->leaveType)}}
</div><div class="col-lg-6">{{createText("company_id","company_id","Company Id",'',$data->company_id)}}
</div><div class="col-lg-6">{{createText("departmentType","departmentType","DepartmentType",'',$data->departmentType)}}
</div><div class="col-lg-6">{{createText("department_id","department_id","Department Id",'',$data->department_id)}}
</div><div class="col-lg-6">{{createDate("startDate","startDate","StartDate",'',$data->startDate)}}
</div><div class="col-lg-6">{{createDate("endDate","endDate","EndDate",'',$data->endDate)}}
</div><div class="col-lg-4">{{createText("totalDays","totalDays","TotalDays",'',$data->totalDays)}}
</div><div class="col-lg-4">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection