@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Add Fleetroster</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('travelfleet.fleetroster.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('travelfleet.fleetroster.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createDate("travelDate","travelDate","Date", "", "", "")}}
</div><div class="col-lg-6">{{createText("placeVisit","placeVisit","Location")}}
</div><div class="col-lg-6">{{createText("pickUpTime","pickUpTime","PickUp Time")}}
</div><div class="col-lg-6">{{createText("dropTime","dropTime","Drop Time")}}
</div><div class="col-lg-6">{{createText("purpose","purpose","Purpose")}}
</div><div class="col-lg-6">{{createText("driverName","driverName","DriverName")}}
</div><div class="col-lg-6">{{createText("staffName","staffName","Staff Name")}}
</div><div class="col-lg-6">{{createText("staffPosition","staffPosition","Staff Position")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks", "", "")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection