
        <form action="{{route('notice.announcement.update',[$data->announcement_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("announcementTitle","announcementTitle","Announcement Title",'',$data->announcementTitle)}}
</div><div class="col-lg-6">{{createText("company_id","company_id","Company Id",'',$data->company_id)}}
</div><div class="col-lg-6">{{createText("announcementDepartment","announcementDepartment","Department",'',$data->announcementDepartment)}}
</div><div class="col-lg-6">{{createDate("announcementStartDate","announcementStartDate","Start Date",'',$data->announcementStartDate)}}
</div><div class="col-lg-6">{{createDate("announcementEndDate","announcementEndDate","End Date",'',$data->announcementEndDate)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>