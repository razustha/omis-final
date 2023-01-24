
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("announcementTitle","announcementTitle","AnnouncementTitle",'',$data->announcementTitle)}}
</div><div class="col-lg-6">{{createText("company_id","company_id","Company Id",'',$data->company_id)}}
</div><div class="col-lg-6">{{createText("announcementDepartment","announcementDepartment","AnnouncementDepartment",'',$data->announcementDepartment)}}
</div><div class="col-lg-6">{{createText("announcementStartDate","announcementStartDate","AnnouncementStartDate",'',$data->announcementStartDate)}}
</div><div class="col-lg-6">{{createText("announcementEndDate","announcementEndDate","AnnouncementEndDate",'',$data->announcementEndDate)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>