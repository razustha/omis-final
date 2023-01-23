<form method="POST" action="{{route('hr.absentreason.update',[$data->absentreason_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("designation","designation","Designation",'',$data->designation)}}
</div><div class="col-lg-6">{{createText("dateAbsense","dateAbsense","DateAbsense",'',$data->dateAbsense)}}
</div><div class="col-lg-6">{{createText("dayAbsense","dayAbsense","DayAbsense",'',$data->dayAbsense)}}
</div><div class="col-lg-6">{{createText("holidayApprovedBy","holidayApprovedBy","HolidayApprovedBy",'',$data->holidayApprovedBy)}}
</div><div class="col-lg-6">{{createText("reasonAbsence","reasonAbsence","ReasonAbsence",'',$data->reasonAbsence)}}
</div><div class="col-lg-6">{{createText("submittedBy","submittedBy","SubmittedBy",'',$data->submittedBy)}}
</div><div class="col-lg-6">{{createText("checkedBy","checkedBy","CheckedBy",'',$data->checkedBy)}}
</div><div class="col-lg-6">{{createText("approvedBy","approvedBy","ApprovedBy",'',$data->approvedBy)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>