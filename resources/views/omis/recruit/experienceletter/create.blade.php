@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Add Experienceletter</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('recruit.experienceletter.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('recruit.experienceletter.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_employee","employee_id","employeeName",'') !!}
</div><div class="col-lg-6">{{createText("designation","designation","Designation")}}
</div><div class="col-lg-6">{{createText("departmentName","departmentName","DepartmentName")}}
</div><div class="col-lg-6">{{createText("joiningDate","joiningDate","JoiningDate")}}
</div><div class="col-lg-6">{{createText("leftDate","leftDate","LeftDate")}}
</div><div class="col-lg-6">{{createText("experienceDetails","experienceDetails","ExperienceDetails")}}
</div><div class="col-lg-6">{{createText("letterIssueBy","letterIssueBy","LetterIssueBy")}}
</div><div class="col-lg-6">{{createText("letterIssueDate","letterIssueDate","LetterIssueDate")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection