
                <form action="{{route('hr.attendence.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("employeePosition","employeePosition","EmployeePosition")}}
</div><div class="col-lg-6">{{createDate("todayDate","todayDate","TodayDate")}}
</div><div class="col-lg-6">{{createText("timePicker1","timePicker1","TimePicker1")}}
</div><div class="col-lg-6">{{createText("timePicker2","timePicker2","TimePicker2")}}
</div><div class="col-lg-12">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>