
        <form action="{{route('hr.absentreason.update',[$data->absentReason_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("designation","designation","Designation",'',$data->designation)}}
</div><div class="col-lg-6">{{createDate("dateAbsense","dateAbsense","DateAbsense",'',$data->dateAbsense)}}
</div><div class="col-lg-6">{{createText("dayAbsense","dayAbsense","DayAbsense",'',$data->dayAbsense)}}
</div><div class="col-lg-6">{{createText("holidayApprovedBy","holidayApprovedBy","HolidayApprovedBy",'',$data->holidayApprovedBy)}}
</div><div class="col-lg-6">{{createText("reasonAbsence","reasonAbsence","ReasonAbsence",'',$data->reasonAbsence)}}
</div><div class="col-lg-6">{{createText("submittedBy","submittedBy","SubmittedBy",'',$data->submittedBy)}}
</div><div class="col-lg-4">{{createText("checkedBy","checkedBy","CheckedBy",'',$data->checkedBy)}}
</div><div class="col-lg-4">{{createText("approvedBy","approvedBy","ApprovedBy",'',$data->approvedBy)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>