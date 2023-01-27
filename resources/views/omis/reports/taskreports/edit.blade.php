@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit Taskreports</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('reports.taskreports.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('reports.taskreports.update',[$data->taskreports_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_employee","employee_id","employeeName",'',$data) !!}
</div><div class="col-lg-6">{{createText("taskType","taskType","TaskType",'',$data->taskType)}}
</div><div class="col-lg-6">{{createText("taskName","taskName","TaskName",'',$data->taskName)}}
</div><div class="col-lg-6">{{createText("tastStartDate","tastStartDate","TastStartDate",'',$data->tastStartDate)}}
</div><div class="col-lg-6">{{createText("taskEndDate","taskEndDate","TaskEndDate",'',$data->taskEndDate)}}
</div><div class="col-lg-6">{{createText("taskOverdueDate","taskOverdueDate","TaskOverdueDate",'',$data->taskOverdueDate)}}
</div><div class="col-lg-6">{{createText("taskReportsBy","taskReportsBy","TaskReportsBy",'',$data->taskReportsBy)}}
</div><div class="col-lg-6">{{createText("taotalDaysToComplete","taotalDaysToComplete","TaotalDaysToComplete",'',$data->taotalDaysToComplete)}}
</div><div class="col-lg-6">{{createText("taskAssignBy","taskAssignBy","TaskAssignBy",'',$data->taskAssignBy)}}
</div><div class="col-lg-6">{{createText("issueDate","issueDate","IssueDate",'',$data->issueDate)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection