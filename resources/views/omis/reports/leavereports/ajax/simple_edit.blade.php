
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("applicant_id","applicant_id","Applicant Id",'',$data->applicant_id)}}
</div><div class="col-lg-6">{{createText("leaveReason","leaveReason","LeaveReason",'',$data->leaveReason)}}
</div><div class="col-lg-6">{{createText("leaveApprovedBy","leaveApprovedBy","LeaveApprovedBy",'',$data->leaveApprovedBy)}}
</div><div class="col-lg-6">{{createText("totalLeaveDays","totalLeaveDays","TotalLeaveDays",'',$data->totalLeaveDays)}}
</div><div class="col-lg-6">{{createText("leaveDate","leaveDate","LeaveDate",'',$data->leaveDate)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>