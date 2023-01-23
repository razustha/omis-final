
                <form >
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("applicants_id","applicants_id","Applicants Id")}}
</div><div class="col-lg-6">{{createText("totalAttendance","totalAttendance","TotalAttendance")}}
</div><div class="col-lg-6">{{createText("totalWorkingDays","totalWorkingDays","TotalWorkingDays")}}
</div><div class="col-lg-6">{{createText("totalAbsentDays","totalAbsentDays","TotalAbsentDays")}}
</div><div class="col-lg-6">{{createText("attendanceReportBy","attendanceReportBy","AttendanceReportBy")}}
</div><div class="col-lg-6">{{createText("issueDate","issueDate","IssueDate")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>