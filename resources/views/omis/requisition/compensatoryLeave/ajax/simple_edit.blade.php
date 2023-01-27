
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("postion","postion","Postion",'',$data->postion)}}
</div><div class="col-lg-6">{{createText("department_id","department_id","Department Id",'',$data->department_id)}}
</div><div class="col-lg-6">{{createText("workingDay","workingDay","WorkingDay",'',$data->workingDay)}}
</div><div class="col-lg-6">{{createText("workingDate","workingDate","WorkingDate",'',$data->workingDate)}}
</div><div class="col-lg-6">{{createText("holidayReason","holidayReason","HolidayReason",'',$data->holidayReason)}}
</div><div class="col-lg-6">{{createText("from","from","From",'',$data->from)}}
</div><div class="col-lg-6">{{createText("to","to","To",'',$data->to)}}
</div><div class="col-lg-6">{{createText("workingReason","workingReason","WorkingReason",'',$data->workingReason)}}
</div><div class="col-lg-6">{{createText("recommendation","recommendation","Recommendation",'',$data->recommendation)}}
</div><div class="col-lg-6">{{createText("verificationUnit","verificationUnit","VerificationUnit",'',$data->verificationUnit)}}
</div><div class="col-lg-6">{{createText("verifiedDate","verifiedDate","VerifiedDate",'',$data->verifiedDate)}}
</div><div class="col-lg-6">{{createText("approvedBy","approvedBy","ApprovedBy",'',$data->approvedBy)}}
</div><div class="col-lg-6">{{createText("approvedDate","approvedDate","ApprovedDate",'',$data->approvedDate)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div><div class="col-lg-6">{{createText("tbl_compensatoryLeave_id","tbl_compensatoryLeave_id","Tbl CompensatoryLeave Id",'',$data->tbl_compensatoryLeave_id)}}
</div><div class="col-lg-6">{{createText("compensatoryLeave_id","compensatoryLeave_id","CompensatoryLeave Id",'',$data->compensatoryLeave_id)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>