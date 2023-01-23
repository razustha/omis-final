@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit Generatorlogbook</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('officemanagement.generatorlogbook.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('officemanagement.generatorlogbook.update',[$data->generatorlogbook_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("logbookTitle","logbookTitle","LogbookTitle",'',$data->logbookTitle)}}
</div><div class="col-lg-6">{{createText("subTitle","subTitle","SubTitle",'',$data->subTitle)}}
</div><div class="col-lg-6">{{createText("pageNumber","pageNumber","PageNumber",'',$data->pageNumber)}}
</div><div class="col-lg-6">{{createDate("checkedDate","checkedDate","CheckedDate",'',$data->checkedDate)}}
</div><div class="col-lg-6">{{createText("fullName","fullName","FullName",'',$data->fullName)}}
</div><div class="col-lg-6">{{createText("purpose","purpose","Purpose",'',$data->purpose)}}
</div><div class="col-lg-6">{{createText("from","from","From",'',$data->from)}}
</div><div class="col-lg-6">{{createText("to","to","To",'',$data->to)}}
</div><div class="col-lg-6">{{createText("totalTime","totalTime","TotalTime",'',$data->totalTime)}}
</div><div class="col-lg-6">{{createText("dieselConsumed","dieselConsumed","DieselConsumed",'',$data->dieselConsumed)}}
</div><div class="col-lg-6">{{createText("mobileConsume","mobileConsume","MobileConsume",'',$data->mobileConsume)}}
</div><div class="col-lg-6">{{createDate("servicingDate","servicingDate","ServicingDate",'',$data->servicingDate)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection