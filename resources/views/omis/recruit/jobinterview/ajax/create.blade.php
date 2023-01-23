
                <form >
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("jobInterviewType","jobInterviewType","JobInterviewType")}}
</div><div class="col-lg-6">{{createText("jobTitle","jobTitle","JobTitle")}}
</div><div class="col-lg-6">{{createText("candidatesName","candidatesName","CandidatesName")}}
</div><div class="col-lg-6">{{createText("interviewPlace","interviewPlace","InterviewPlace")}}
</div><div class="col-lg-6">{{createText("interviewDate","interviewDate","InterviewDate")}}
</div><div class="col-lg-6">{{createText("interviewTime","interviewTime","InterviewTime")}}
</div><div class="col-lg-6">{{createText("interviewers","interviewers","Interviewers")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>