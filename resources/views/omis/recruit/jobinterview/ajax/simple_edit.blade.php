
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("jobInterviewType","jobInterviewType","JobInterviewType",'',$data->jobInterviewType)}}
</div><div class="col-lg-6">{{createText("jobTitle","jobTitle","JobTitle",'',$data->jobTitle)}}
</div><div class="col-lg-6">{{createText("candidatesName","candidatesName","CandidatesName",'',$data->candidatesName)}}
</div><div class="col-lg-6">{{createText("interviewPlace","interviewPlace","InterviewPlace",'',$data->interviewPlace)}}
</div><div class="col-lg-6">{{createText("interviewDate","interviewDate","InterviewDate",'',$data->interviewDate)}}
</div><div class="col-lg-6">{{createText("interviewTime","interviewTime","InterviewTime",'',$data->interviewTime)}}
</div><div class="col-lg-6">{{createText("interviewers","interviewers","Interviewers",'',$data->interviewers)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>