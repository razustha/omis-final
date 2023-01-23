
                <form method="POST" action="{{route('hr.attendence.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("employeePosition","employeePosition","EmployeePosition")}}
</div><div class="col-lg-6">{{createText("todayDate","todayDate","TodayDate")}}
</div><div class="col-lg-6">{{createText("timePicker1","timePicker1","TimePicker1")}}
</div><div class="col-lg-6">{{createText("timePicker2","timePicker2","TimePicker2")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>