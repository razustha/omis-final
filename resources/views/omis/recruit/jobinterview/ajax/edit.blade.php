<form action="{{route('recruit.jobinterview.update',[$data->jobInterview_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("jobInterviewType","jobInterviewType","Interview Type",'',$data->jobInterviewType)}}
</div><div class="col-lg-6">{{createText("jobTitle","jobTitle","Job Title",'',$data->jobTitle)}}
</div><div class="col-lg-6">{{createText("candidatesName","candidatesName","Candidates Name",'',$data->candidatesName)}}
</div><div class="col-lg-6">{{createText("interviewPlace","interviewPlace","Interview Place",'',$data->interviewPlace)}}
</div><div class="col-lg-6">{{createDate("interviewDate","interviewDate","Interview Date",'',$data->interviewDate)}}
</div><div class="col-lg-6">{{createText("interviewTime","interviewTime","Interview Time",'',$data->interviewTime)}}
</div><div class="col-lg-6">{{createText("interviewers","interviewers","Interviewers",'',$data->interviewers)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>