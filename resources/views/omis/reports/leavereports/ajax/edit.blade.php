<form action="{{route('reports.leavereports.update',[$data->leaveReports_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("applicant_id","applicant_id","Applicant",'',$data->applicant_id)}}
</div><div class="col-lg-6">{{createText("leaveReason","leaveReason","Leave Reason",'',$data->leaveReason)}}
</div><div class="col-lg-6">{{createText("leaveApprovedBy","leaveApprovedBy","Leave Approved By",'',$data->leaveApprovedBy)}}
</div><div class="col-lg-6">{{createText("totalLeaveDays","totalLeaveDays","Total Leave Days",'',$data->totalLeaveDays)}}
</div><div class="col-lg-6">{{createDate("leaveDate","leaveDate","Leave Date",'',$data->leaveDate)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>