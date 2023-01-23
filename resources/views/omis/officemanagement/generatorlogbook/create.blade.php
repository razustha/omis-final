@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Add Generatorlogbook</h1>

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
                <form method="POST" action="{{route('officemanagement.generatorlogbook.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("logbookTitle","logbookTitle","Title")}}
</div><div class="col-lg-6">{{createText("subTitle","subTitle","Sub Title")}}
</div><div class="col-lg-6">{{createText("pageNumber","pageNumber","Page Number")}}
</div><div class="col-lg-6">{{createDate("checkedDate","checkedDate","Checked Date", "", "", "")}}
</div><div class="col-lg-6">{{createText("fullName","fullName","Full Name")}}
</div><div class="col-lg-6">{{createText("purpose","purpose","Purpose")}}
</div><div class="col-lg-6">{{createText("from","from","From")}}
</div><div class="col-lg-6">{{createText("to","to","To")}}
</div><div class="col-lg-6">{{createText("totalTime","totalTime","Total Time")}}
</div><div class="col-lg-6">{{createText("dieselConsumed","dieselConsumed","Diesel Consumed")}}
</div><div class="col-lg-6">{{createText("mobileConsume","mobileConsume","Mobile Consume")}}
</div><div class="col-lg-6">{{createDate("servicingDate","servicingDate","Servicing Date", "", "", "")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks", "", "")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection