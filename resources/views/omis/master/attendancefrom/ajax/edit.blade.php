
        <form action="{{route('master.attendancefrom.update',[$data->attendanceFrom_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("attendanceFromLocation","attendanceFromLocation","Attendance Location",'',$data->attendanceFromLocation)}}
</div><div class="col-lg-6">{{createText("attendanceFromType","attendanceFromType","Attendance Type",'',$data->attendanceFromType)}}
</div><div class="col-lg-6">{{createText("attendanceFromActiveFrom","attendanceFromActiveFrom","Active From",'',$data->attendanceFromActiveFrom)}}
</div><div class="col-lg-6">{{createText("attendanceFromApprovedEmployee_id","attendanceFromApprovedEmployee_id","Approved Employee Id",'',$data->attendanceFromApprovedEmployee_id)}}
</div><div class="col-lg-6">{{createText("attendanceFromSupervisorEmployee_id","attendanceFromSupervisorEmployee_id","Supervisor Id",'',$data->attendanceFromSupervisorEmployee_id)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createLabel('attendanceFromDescription','form-label col-form-label','Description')}}{{createTextArea("attendanceFromDescription","attendanceFromDescription","AttendanceFromDescription",'',$data->attendanceFromDescription)}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>