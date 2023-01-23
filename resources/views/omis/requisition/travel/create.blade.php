@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Add Travel</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('requisition.travel.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('requisition.travel.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("employeeName_id","employeeName_id","Employee Id")}}
</div><div class="col-lg-6">{{createText("arrangementType_id","arrangementType_id","Arrangement Id")}}
</div><div class="col-lg-6">{{createText("purposeOfVisit","purposeOfVisit","Purpose")}}
</div><div class="col-lg-6">{{createText("destination","destination","Destination")}}
</div><div class="col-lg-6">{{createDate("travelStartDate","travelStartDate","Start Date", "", "", "")}}
</div><div class="col-lg-6">{{createDate("travelEndDate","travelEndDate","End Date", "", "", "")}}
</div><div class="col-lg-6">{{createText("expectedBudget","expectedBudget","Expected Budget")}}
</div><div class="col-lg-6">{{createText("actualBudget","actualBudget","Actual Budget")}}
</div><div class="col-lg-4">{{createText("travelMode","travelMode","Travel Mode")}}
</div><div class="col-lg-4">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","remarks","3","")}}
</div> <br> <div class="col-md-12"><?php createButton("mt-3 btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection