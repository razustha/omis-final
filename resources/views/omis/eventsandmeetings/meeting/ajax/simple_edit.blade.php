
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("meetingTitle","meetingTitle","MeetingTitle",'',$data->meetingTitle)}}
</div><div class="col-lg-6">{{createText("meetingDate","meetingDate","MeetingDate",'',$data->meetingDate)}}
</div><div class="col-lg-6">{{createText("meetingTime","meetingTime","MeetingTime",'',$data->meetingTime)}}
</div><div class="col-lg-6">{{createText("meetingNote","meetingNote","MeetingNote",'',$data->meetingNote)}}
</div><div class="col-lg-6">{{createText("selectCompany","selectCompany","SelectCompany",'',$data->selectCompany)}}
</div><div class="col-lg-6">{{createText("selectDepartment","selectDepartment","SelectDepartment",'',$data->selectDepartment)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>