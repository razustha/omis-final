
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("applicantsName_id","applicantsName_id","ApplicantsName Id",'',$data->applicantsName_id)}}
</div><div class="col-lg-6">{{createText("lateDate","lateDate","LateDate",'',$data->lateDate)}}
</div><div class="col-lg-6">{{createText("dayLate","dayLate","DayLate",'',$data->dayLate)}}
</div><div class="col-lg-6">{{createText("lateDesignation","lateDesignation","LateDesignation",'',$data->lateDesignation)}}
</div><div class="col-lg-6">{{createText("reasonForLate","reasonForLate","ReasonForLate",'',$data->reasonForLate)}}
</div><div class="col-lg-6">{{createText("submittedBy","submittedBy","SubmittedBy",'',$data->submittedBy)}}
</div><div class="col-lg-6">{{createText("checkedBy","checkedBy","CheckedBy",'',$data->checkedBy)}}
</div><div class="col-lg-6">{{createText("approvedBy","approvedBy","ApprovedBy",'',$data->approvedBy)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>