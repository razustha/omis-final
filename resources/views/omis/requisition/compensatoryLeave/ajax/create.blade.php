<form action="{{route('requisition.compensatoryleave.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("applicant_id","applicant_id","Applicant")}}
</div><div class="col-lg-6">{{createText("postion","postion","Postion")}}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_department","department_id","departmentName",'','','Department') !!}
</div><div class="col-lg-6">{{createText("workingDay","workingDay","Working Day")}}
</div><div class="col-lg-6">{{createDate("workingDate","workingDate","Working Date")}}
</div><div class="col-lg-6">{{createText("holidayReason","holidayReason","Holiday Reason")}}
</div><div class="col-lg-6">{{createText("from","from","From")}}
</div><div class="col-lg-6">{{createText("to","to","To")}}
</div><div class="col-lg-6">{{createText("workingReason","workingReason","Working Reason")}}
</div><div class="col-lg-6">{{createText("recommendation","recommendation","Recommendation")}}
</div><div class="col-lg-6">{{createText("verificationUnit","verificationUnit","Verification Unit")}}
</div><div class="col-lg-6">{{createDate("verifiedDate","verifiedDate","Verified Date")}}
</div><div class="col-lg-4">{{createText("approvedBy","approvedBy","Approved By")}}
</div><div class="col-lg-4">{{createDate("approvedDate","approvedDate","Approved Date")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>