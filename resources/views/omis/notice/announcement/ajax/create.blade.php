
                <form action="{{route('notice.announcement.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("announcementTitle","announcementTitle","Announcement Title")}}
</div><div class="col-lg-6">{{createText("company_id","company_id","Company Id")}}
</div><div class="col-lg-6">{{createText("announcementDepartment","announcementDepartment","Department")}}
</div><div class="col-lg-6">{{createDate("announcementStartDate","announcementStartDate","Start Date")}}
</div><div class="col-lg-6">{{createDate("announcementEndDate","announcementEndDate","End Date")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>