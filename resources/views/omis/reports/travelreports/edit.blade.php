@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit Travelreports</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('reports.travelreports.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('reports.travelreports.update',[$data->travelReports_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("title","title","Title",'',$data->title)}}
</div><div class="col-lg-6">{{createText("fullName","fullName","FullName",'',$data->fullName)}}
</div><div class="col-lg-6">{{createText("departmentSector","departmentSector","DepartmentSector",'',$data->departmentSector)}}
</div><div class="col-lg-6">{{createText("visitedLocation","visitedLocation","VisitedLocation",'',$data->visitedLocation)}}
</div><div class="col-lg-6">{{createDate("visitedDate","visitedDate","VisitedDate",'',$data->visitedDate)}}
</div><div class="col-lg-6">{{createText("activities","activities","Activities",'',$data->activities)}}
</div><div class="col-lg-6">{{createText("visitObjectives","visitObjectives","VisitObjectives",'',$data->visitObjectives)}}
</div><div class="col-lg-6">{{createText("keyHighlights","keyHighlights","KeyHighlights",'',$data->keyHighlights)}}
</div><div class="col-lg-6">{{createText("achievement","achievement","Achievement",'',$data->achievement)}}
</div><div class="col-lg-6">{{createText("observation","observation","Observation",'',$data->observation)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks",'',"remarks","",$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection