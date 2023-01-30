
        <form action="{{route('recruit.offerletter.update',[$data->offerletter_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("applicants_id","applicants_id","Applicants Id",'',$data->applicants_id)}}
</div><div class="col-lg-6">{{createText("designation","designation","Designation",'',$data->designation)}}
</div><div class="col-lg-4">{{createText("departmentName","departmentName","Department Name",'',$data->departmentName)}}
</div><div class="col-lg-4">{{createText("workingHour","workingHour","Working Hour",'',$data->workingHour)}}
</div><div class="col-lg-4">{{createText("workingShift","workingShift","Working Shift",'',$data->workingShift)}}
</div><div class="col-lg-4">{{createText("workingMode","workingMode","Working Mode",'',$data->workingMode)}}
</div><div class="col-lg-4">{{createText("offeredSalary","offeredSalary","Offered Salary",'',$data->offeredSalary)}}
</div><div class="col-lg-4">{{createText("contractTimePeriod","contractTimePeriod","Contract Time Period",'',$data->contractTimePeriod)}}
</div><div class="col-lg-6">{{createText("offerDescription","offerDescription","Offer Description",'',$data->offerDescription)}}
</div><div class="col-lg-6">{{createDate("joiningDate","joiningDate","Joining Date",'',$data->joiningDate)}}
</div><div class="col-lg-4">{{createText("offeredIssueBy","offeredIssueBy","Offered Issue By",'',$data->offeredIssueBy)}}
</div><div class="col-lg-4">{{createDate("offerIssueDate","offerIssueDate","Offer Issue Date",'',$data->offerIssueDate)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>