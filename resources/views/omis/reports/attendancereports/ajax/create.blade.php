<form action="{{route('reports.attendancereports.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("applicants_id","applicants_id","Applicants")}}
</div><div class="col-lg-6">{{createText("totalAttendance","totalAttendance","Total Attendance")}}
</div><div class="col-lg-6">{{createText("totalWorkingDays","totalWorkingDays","Total Working Days")}}
</div><div class="col-lg-6">{{createText("totalAbsentDays","totalAbsentDays","Total Absent Days")}}
</div><div class="col-lg-4">{{createText("attendanceReportBy","attendanceReportBy","Attendance Report By")}}
</div><div class="col-lg-4">{{createDate("issueDate","issueDate","Issue Date")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>