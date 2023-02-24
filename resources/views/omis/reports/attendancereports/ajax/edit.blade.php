<form action="{{route('reports.attendancereports.update',[$data->attendancereports_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("applicants_id","applicants_id","Applicants",'',$data->applicants_id)}}
</div><div class="col-lg-6">{{createText("totalAttendance","totalAttendance","Total Attendance",'',$data->totalAttendance)}}
</div><div class="col-lg-6">{{createText("totalWorkingDays","totalWorkingDays","Total Working Days",'',$data->totalWorkingDays)}}
</div><div class="col-lg-6">{{createText("totalAbsentDays","totalAbsentDays","Total Absent Days",'',$data->totalAbsentDays)}}
</div><div class="col-lg-4">{{createText("attendanceReportBy","attendanceReportBy","Attendance Report By",'',$data->attendanceReportBy)}}
</div><div class="col-lg-4">{{createDate("issueDate","issueDate","Issue Date",'',$data->issueDate)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>