<form action="{{route('eventsandmeetings.meeting.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("meetingTitle","meetingTitle","Meeting Title")}}
</div><div class="col-lg-6">{{createDate("meetingDate","meetingDate","Meeting Date")}}
</div><div class="col-lg-6">{{createText("meetingTime","meetingTime","Meeting Time")}}
</div><div class="col-lg-6">{{createText("meetingNote","meetingNote","Meeting Note")}}
</div><div class="col-lg-4">{{createText("selectCompany","selectCompany","Select Company")}}
</div><div class="col-lg-4">{{createText("selectDepartment","selectDepartment","Select Department")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>