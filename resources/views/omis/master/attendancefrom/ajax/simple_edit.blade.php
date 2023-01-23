
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("attendanceFromLocation","attendanceFromLocation","AttendanceFromLocation",'',$data->attendanceFromLocation)}}
</div><div class="col-lg-6">{{createText("attendanceFromType","attendanceFromType","AttendanceFromType",'',$data->attendanceFromType)}}
</div><div class="col-lg-6">{{createText("attendanceFromDescription","attendanceFromDescription","AttendanceFromDescription",'',$data->attendanceFromDescription)}}
</div><div class="col-lg-6">{{createText("attendanceFromActiveFrom","attendanceFromActiveFrom","AttendanceFromActiveFrom",'',$data->attendanceFromActiveFrom)}}
</div><div class="col-lg-6">{{createText("attendanceFromApprovedEmployee_id","attendanceFromApprovedEmployee_id","AttendanceFromApprovedEmployee Id",'',$data->attendanceFromApprovedEmployee_id)}}
</div><div class="col-lg-6">{{createText("attendanceFromSupervisorEmployee_id","attendanceFromSupervisorEmployee_id","AttendanceFromSupervisorEmployee Id",'',$data->attendanceFromSupervisorEmployee_id)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>