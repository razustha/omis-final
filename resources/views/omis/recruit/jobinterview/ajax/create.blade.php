<form action="{{route('recruit.jobinterview.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("jobInterviewType","jobInterviewType","Interview Type")}}
</div><div class="col-lg-6">{{createText("jobTitle","jobTitle","Job Title")}}
</div><div class="col-lg-6">{{createText("candidatesName","candidatesName","Candidates Name")}}
</div><div class="col-lg-6">{{createText("interviewPlace","interviewPlace","Interview Place")}}
</div><div class="col-lg-6">{{createDate("interviewDate","interviewDate","Interview Date")}}
</div><div class="col-lg-6">{{createText("interviewTime","interviewTime","Interview Time")}}
</div><div class="col-lg-6">{{createText("interviewers","interviewers","Interviewers")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>