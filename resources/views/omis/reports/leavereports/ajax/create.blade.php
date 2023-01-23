
                <form >
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("applicant_id","applicant_id","Applicant Id")}}
</div><div class="col-lg-6">{{createText("leaveReason","leaveReason","LeaveReason")}}
</div><div class="col-lg-6">{{createText("leaveApprovedBy","leaveApprovedBy","LeaveApprovedBy")}}
</div><div class="col-lg-6">{{createText("totalLeaveDays","totalLeaveDays","TotalLeaveDays")}}
</div><div class="col-lg-6">{{createText("leaveDate","leaveDate","LeaveDate")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>