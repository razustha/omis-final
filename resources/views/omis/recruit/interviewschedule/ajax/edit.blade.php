
        <form action="{{route('recruit.interviewschedule.update',[$data->interviewschedule_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("applicants_id","applicants_id","Applicants Id",'',$data->applicants_id)}}
</div><div class="col-lg-6">{{createText("jobTitle","jobTitle","Job Title",'',$data->jobTitle)}}
</div><div class="col-lg-6">{{createText("jobDepartment","jobDepartment","Job Department",'',$data->jobDepartment)}}
</div><div class="col-lg-6">{{createText("interviewerName","interviewerName","Interviewer Name",'',$data->interviewerName)}}
</div><div class="col-lg-6">{{createText("jobInterviewTime","jobInterviewTime","JobInterview Time",'',$data->jobInterviewTime)}}
</div><div class="col-lg-6">{{createText("scheduleBy","scheduleBy","Schedule By",'',$data->scheduleBy)}}
</div><div class="col-lg-6">{{createText("recommendedBy","recommendedBy","Recommended By",'',$data->recommendedBy)}}
</div><div class="col-lg-6">{{createDate("scheduleDate","scheduleDate","Schedule Date",'',$data->scheduleDate)}}
</div><div class="col-lg-6">{{createText("interviewMode","interviewMode","Interview Mode",'',$data->interviewMode)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>