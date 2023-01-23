@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Add Announcement</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('notice.announcement.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('notice.announcement.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("announcementTitle","announcementTitle","Announcement Title")}}
</div><div class="col-lg-6">{{createText("company_id","company_id","Company Id")}}
<!-- </div><div class="col-lg-6">{{createLabel('announcementSummary','form-label col-form-label','Announcement Summary')}}{{createTextArea("summary","Summary","Summary","",'')}} -->
</div><div class="col-lg-6">{{createText("announcementDepartment","announcementDepartment","Announcement Department")}}
</div><div class="col-lg-4">{{createDate("announcementStartDate","announcementStartDate","Announcement StartDate",'','')}}
</div><div class="col-lg-4">{{createDate("announcementEndDate","announcementEndDate","Announcement EndDate",'','')}}
</div><div class="col-lg-4">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
<!-- </div><div class="col-lg-6">{{createText("Description","Description","Description","","")}} -->


</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","remarks","","")}}
</div> <br> <div class="col-md- 12"><?php createButton("mt-3 btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection