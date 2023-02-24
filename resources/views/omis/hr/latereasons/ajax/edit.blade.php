
        <form action="{{route('hr.latereasons.update',[$data->latereasons_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("applicantsName_id","applicantsName_id","Applicants Name",'',$data->applicantsName_id)}}
</div><div class="col-lg-6">{{createDate("lateDate","lateDate","Late Date",'',$data->lateDate)}}
</div><div class="col-lg-6">{{createText("dayLate","dayLate","Late Day",'',$data->dayLate)}}
</div><div class="col-lg-6">{{createText("lateDesignation","lateDesignation","Designation",'',$data->lateDesignation)}}
</div><div class="col-lg-6">{{createText("reasonForLate","reasonForLate","Reason For Late",'',$data->reasonForLate)}}
</div><div class="col-lg-6">{{createText("submittedBy","submittedBy","Submitted By",'',$data->submittedBy)}}
</div><div class="col-lg-4">{{createText("checkedBy","checkedBy","Checked By",'',$data->checkedBy)}}
</div><div class="col-lg-4">{{createText("approvedBy","approvedBy","Approved By",'',$data->approvedBy)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>