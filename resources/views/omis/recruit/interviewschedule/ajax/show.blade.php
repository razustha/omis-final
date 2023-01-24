<div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">Show Interviewschedule</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="nk-block-head-content w-100">
            <div class="d-flex justify-content-between pb-4">
    
                <h2>Interviewschedule Details</h2>
                <button class="btn btn-primary print_pdf">Print PDF</button>
            </div>
            <div class="card w-100">
                <div class="p-5">
    
                    <div class="card-head">
                        <h2 class="text-center">{{$data['applicants_id']}}</h2>
                    </div>
                    <div class="card-body">
                <p><b>Applicants Id :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->applicants_id}}</span></p><p><b>JobTitle :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->jobTitle}}</span></p><p><b>JobDepartment :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->jobDepartment}}</span></p><p><b>InterviewerName :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->interviewerName}}</span></p><p><b>JobInterviewTime :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->jobInterviewTime}}</span></p><p><b>ScheduleBy :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->scheduleBy}}</span></p><p><b>RecommendedBy :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->recommendedBy}}</span></p><p><b>ScheduleDate :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->scheduleDate}}</span></p><p><b>InterviewMode :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->interviewMode}}</span></p><p><b>Alias :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->alias}}</span></p><p><b>Status :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span
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