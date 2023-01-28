
                <form action="{{route('recruit.offerletter.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("applicants_id","applicants_id","Applicants Id")}}
</div><div class="col-lg-6">{{createText("designation","designation","Designation")}}
</div><div class="col-lg-4">{{createText("departmentName","departmentName","Department Name")}}
</div><div class="col-lg-4">{{createText("workingHour","workingHour","Working Hour")}}
</div><div class="col-lg-4">{{createText("workingShift","workingShift","Working Shift")}}
</div><div class="col-lg-4">{{createText("workingMode","workingMode","Working Mode")}}
</div><div class="col-lg-4">{{createText("offeredSalary","offeredSalary","Offered Salary")}}
</div><div class="col-lg-4">{{createText("contractTimePeriod","contractTimePeriod","Contract Time Period")}}
</div><div class="col-lg-6">{{createText("offerDescription","offerDescription","Offer Description")}}
</div><div class="col-lg-6">{{createDate("joiningDate","joiningDate","Joining Date")}}
</div><div class="col-lg-4">{{createText("offeredIssueBy","offeredIssueBy","Offered Issue By")}}
</div><div class="col-lg-4">{{createDate("offerIssueDate","offerIssueDate","Offer Issue Date")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>