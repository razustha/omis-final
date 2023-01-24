@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Add Jobapplication</h1>

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
                <form method="POST" action="{{route('recruit.jobapplication.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("applyJobTitle","applyJobTitle","ApplyJobTitle")}}
</div><div class="col-lg-6">{{createText("applicantsName","applicantsName","ApplicantsName")}}
</div><div class="col-lg-6">{{createText("applyedDepartmentName","applyedDepartmentName","ApplyedDepartmentName")}}
</div><div class="col-lg-6">{{createText("workingExperience","workingExperience","WorkingExperience")}}
</div><div class="col-lg-6">{{createText("previousWorkingCompanyName","previousWorkingCompanyName","PreviousWorkingCompanyName")}}
</div><div class="col-lg-6">{{createText("applyDate","applyDate","ApplyDate")}}
</div><div class="col-lg-6">{{createText("recommendedBy","recommendedBy","RecommendedBy")}}
</div><div class="col-lg-6">{{createText("portfolio","portfolio","Portfolio")}}
</div><div class="col-lg-6">{{createText("fullTime","fullTime","FullTime")}}
</div><div class="col-lg-6">{{createText("partTime","partTime","PartTime")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection