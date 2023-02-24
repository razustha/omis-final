<form action="{{route('requisition.compensatoryleave.update',[$data->compensatoryleave_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("applicant_id","applicant_id","Applicant",'',$data->applicant_id)}}
</div><div class="col-lg-6">{{createText("postion","postion","Postion",'',$data->postion)}}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_department","department_id","departmentName",'',$data,'Department') !!}
</div><div class="col-lg-6">{{createText("workingDay","workingDay","WorkingDay",'',$data->workingDay)}}
</div><div class="col-lg-6">{{createDate("workingDate","workingDate","WorkingDate",'',$data->workingDate)}}
</div><div class="col-lg-6">{{createText("holidayReason","holidayReason","HolidayReason",'',$data->holidayReason)}}
</div><div class="col-lg-6">{{createText("from","from","From",'',$data->from)}}
</div><div class="col-lg-6">{{createText("to","to","To",'',$data->to)}}
</div><div class="col-lg-6">{{createText("workingReason","workingReason","Working Reason",'',$data->workingReason)}}
</div><div class="col-lg-6">{{createText("recommendation","recommendation","Recommendation",'',$data->recommendation)}}
</div><div class="col-lg-6">{{createText("verificationUnit","verificationUnit","Verification Unit",'',$data->verificationUnit)}}
</div><div class="col-lg-6">{{createDate("verifiedDate","verifiedDate","Verified Date",'',$data->verifiedDate)}}
</div><div class="col-lg-4">{{createText("approvedBy","approvedBy","Approved By",'',$data->approvedBy)}}
</div><div class="col-lg-4">{{createDate("approvedDate","approvedDate","Approved Date",'',$data->approvedDate)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>