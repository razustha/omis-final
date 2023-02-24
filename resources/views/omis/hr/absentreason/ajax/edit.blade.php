
        <form action="{{route('hr.absentreason.update',[$data->absentReason_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("designation","designation","Designation",'',$data->designation)}}
</div><div class="col-lg-6">{{createDate("dateAbsense","dateAbsense","Absent Date",'',$data->dateAbsense)}}
</div><div class="col-lg-6">{{createText("dayAbsense","dayAbsense","Absent Days",'',$data->dayAbsense)}}
</div><div class="col-lg-6">{{createText("holidayApprovedBy","holidayApprovedBy","Holiday Approved By",'',$data->holidayApprovedBy)}}
</div><div class="col-lg-6">{{createText("reasonAbsence","reasonAbsence","Absent Reason",'',$data->reasonAbsence)}}
</div><div class="col-lg-6">{{createText("submittedBy","submittedBy","Submitted By",'',$data->submittedBy)}}
</div><div class="col-lg-4">{{createText("checkedBy","checkedBy","Checked By",'',$data->checkedBy)}}
</div><div class="col-lg-4">{{createText("approvedBy","approvedBy","Approved By",'',$data->approvedBy)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>