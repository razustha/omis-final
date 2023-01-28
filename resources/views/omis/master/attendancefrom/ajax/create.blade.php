
                <form action="{{route('master.attendancefrom.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("attendanceFromLocation","attendanceFromLocation","Attendance From ")}}
</div><div class="col-lg-6">{{createText("attendanceFromType","attendanceFromType","Attendance Type")}}
</div><div class="col-lg-6">{{createText("attendanceFromDescription","attendanceFromDescription","Attendance Description")}}
</div><div class="col-lg-6">{{createText("attendanceFromActiveFrom","attendanceFromActiveFrom","Attendance Active From")}}
</div><div class="col-lg-4">{{createText("attendanceFromApprovedEmployee_id","attendanceFromApprovedEmployee_id","Approved By ID")}}
</div><div class="col-lg-4">{{createText("attendanceFromSupervisorEmployee_id","attendanceFromSupervisorEmployee_id","Supervisor Id")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks",'',"remarks","",'')}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>