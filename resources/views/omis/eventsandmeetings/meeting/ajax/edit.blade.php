<form action="{{route('eventsandmeetings.meeting.update',[$data->meeting_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("meetingTitle","meetingTitle","Meeting Title",'',$data->meetingTitle)}}
</div><div class="col-lg-6">{{createDate("meetingDate","meetingDate","Meeting Date",'',$data->meetingDate)}}
</div><div class="col-lg-6">{{createText("meetingTime","meetingTime","Meeting Time",'',$data->meetingTime)}}
</div><div class="col-lg-6">{{createText("meetingNote","meetingNote","Meeting Note",'',$data->meetingNote)}}
</div><div class="col-lg-4">{{createText("selectCompany","selectCompany","Select Company",'',$data->selectCompany)}}
</div><div class="col-lg-4">{{createText("selectDepartment","selectDepartment","Select Department",'',$data->selectDepartment)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>