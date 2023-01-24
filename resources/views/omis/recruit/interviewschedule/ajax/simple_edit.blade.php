
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("applicants_id","applicants_id","Applicants Id",'',$data->applicants_id)}}
</div><div class="col-lg-6">{{createText("jobTitle","jobTitle","JobTitle",'',$data->jobTitle)}}
</div><div class="col-lg-6">{{createText("jobDepartment","jobDepartment","JobDepartment",'',$data->jobDepartment)}}
</div><div class="col-lg-6">{{createText("interviewerName","interviewerName","InterviewerName",'',$data->interviewerName)}}
</div><div class="col-lg-6">{{createText("jobInterviewTime","jobInterviewTime","JobInterviewTime",'',$data->jobInterviewTime)}}
</div><div class="col-lg-6">{{createText("scheduleBy","scheduleBy","ScheduleBy",'',$data->scheduleBy)}}
</div><div class="col-lg-6">{{createText("recommendedBy","recommendedBy","RecommendedBy",'',$data->recommendedBy)}}
</div><div class="col-lg-6">{{createText("scheduleDate","scheduleDate","ScheduleDate",'',$data->scheduleDate)}}
</div><div class="col-lg-6">{{createText("interviewMode","interviewMode","InterviewMode",'',$data->interviewMode)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>