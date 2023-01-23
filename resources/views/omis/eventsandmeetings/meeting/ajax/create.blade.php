
                <form >
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("meetingTitle","meetingTitle","MeetingTitle")}}
</div><div class="col-lg-6">{{createText("meetingDate","meetingDate","MeetingDate")}}
</div><div class="col-lg-6">{{createText("meetingTime","meetingTime","MeetingTime")}}
</div><div class="col-lg-6">{{createText("meetingNote","meetingNote","MeetingNote")}}
</div><div class="col-lg-6">{{createText("selectCompany","selectCompany","SelectCompany")}}
</div><div class="col-lg-6">{{createText("selectDepartment","selectDepartment","SelectDepartment")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>