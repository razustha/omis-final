<form action="{{route('reports.leavereports.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("applicant_id","applicant_id","Applicant")}}
</div><div class="col-lg-6">{{createText("leaveReason","leaveReason","Leave Reason")}}
</div><div class="col-lg-6">{{createText("leaveApprovedBy","leaveApprovedBy","Leave Approved By")}}
</div><div class="col-lg-6">{{createText("totalLeaveDays","totalLeaveDays","Total Leave Days")}}
</div><div class="col-lg-6">{{createDate("leaveDate","leaveDate","Leave Date")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>