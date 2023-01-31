<div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">Show Attendancereports</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="nk-block-head-content w-100">
            <div class="d-flex justify-content-between pb-4">
    
                <h2>Attendancereports Details</h2>
                <button class="btn btn-primary print_pdf">Print PDF</button>
            </div>
            <div class="card w-100">
                <div class="p-5">
    
                    <div class="card-head">
                        <h2 class="text-center">{{$data['applicants_id']}}</h2>
                    </div>
                    <div class="card-body">
                <p><b>Applicants Id :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->applicants_id}}</span></p><p><b>Total Attendance :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->totalAttendance}}</span></p><p><b>Total Working Days :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->totalWorkingDays}}</span></p><p><b>Total Absent Days :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->totalAbsentDays}}</span></p><p><b>Attendance Report By :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->attendanceReportBy}}</span></p><p><b>Issue Date :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->issueDate}}</span></p><p><b>Alias :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->alias}}</span></p><p><b>Status :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span
                class="{{$data->status == 1 ? 'text-success' : 'text-danger'}}">{{$data->status == 1 ? 'Active' : 'Inactive'}}</span></p><p><b>Remarks :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->remarks}}</span></p><div class="d-flex justify-content-between">
        <div>
            <p><b>Created On :</b>&nbsp;&nbsp;&nbsp;<span>{{$data->created_at}}</span></p>
            <p><b>Created By :</b>&nbsp;&nbsp;&nbsp;<span>{{$data->createdBy}}</span></p>
        </div>
        <div>
            <p><b>Updated On :</b>&nbsp;&nbsp;&nbsp;<span>{{$data->updated_at}}</span></p>
            <p><b>Updated By :</b>&nbsp;&nbsp;&nbsp;<span>{{$data->updatedBy}}</span></p>

        </div>
    </div>
    </div>
            </div>
        </div>
    </div>
</div>