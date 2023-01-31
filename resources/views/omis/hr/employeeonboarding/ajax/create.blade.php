
<form action="{{route('hr.employeeonboarding.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_employee","employee_id","employee_id",'') !!}
</div><div class="col-lg-6">{{createText("departmentName","departmentName","Department Name")}}
</div><div class="col-lg-6">{{createText("designation","designation","Designation")}}
</div><div class="col-lg-6">{{createText("workingShift","workingShift","Working Shift")}}
</div><div class="col-lg-6">{{createText("workingHour","workingHour","Working Hour")}}
</div><div class="col-lg-6">{{createText("workingMode","workingMode","Working Mode")}}
</div><div class="col-lg-6">{{createDate("joinDate","joinDate","Join Date")}}
</div><div class="col-lg-6">{{createText("dayFrom","dayFrom","Day From")}}
</div><div class="col-lg-4">{{createText("dayTo","dayTo","Day To")}}
</div><div class="col-lg-4">{{createText("departmentLogo","departmentLogo","Department Logo")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>