
                <form action="{{route('recruit.interviewschedule.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("applicants_id","applicants_id","Applicants Id")}}
</div><div class="col-lg-6">{{createText("jobTitle","jobTitle","Job Title")}}
</div><div class="col-lg-6">{{createText("jobDepartment","jobDepartment","Job Department")}}
</div><div class="col-lg-6">{{createText("interviewerName","interviewerName","Interviewer Name")}}
</div><div class="col-lg-6">{{createText("jobInterviewTime","jobInterviewTime","Interview Time")}}
</div><div class="col-lg-6">{{createText("scheduleBy","scheduleBy","Schedule By")}}
</div><div class="col-lg-6">{{createText("recommendedBy","recommendedBy","Recommended By")}}
</div><div class="col-lg-6">{{createDate("scheduleDate","scheduleDate","Schedule Date")}}
</div><div class="col-lg-6">{{createText("interviewMode","interviewMode","Interview Mode")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>