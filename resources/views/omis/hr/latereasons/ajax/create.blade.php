
                <form action="{{route('hr.latereasons.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("applicantsName_id","applicantsName_id","Applicants Name")}}
</div><div class="col-lg-6">{{createDate("lateDate","lateDate","Late Date")}}
</div><div class="col-lg-6">{{createText("dayLate","dayLate","Late Day")}}
</div><div class="col-lg-6">{{createText("lateDesignation","lateDesignation","Designation")}}
</div><div class="col-lg-6">{{createText("reasonForLate","reasonForLate","Reason For Late")}}
</div><div class="col-lg-6">{{createText("submittedBy","submittedBy","Submitted By")}}
</div><div class="col-lg-4">{{createText("checkedBy","checkedBy","Checked By")}}
</div><div class="col-lg-4">{{createText("approvedBy","approvedBy","Approved By")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>