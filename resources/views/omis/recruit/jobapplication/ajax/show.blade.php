<div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">Show Job Application</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="nk-block-head-content w-100">
            <div class="d-flex justify-content-between pb-4">
    
                <h2>Job Application Details</h2>
                <button class="btn btn-primary print_pdf">Print PDF</button>
            </div>
            <div class="card w-100">
                <div class="p-5">
    
                    <div class="card-head">
                        <h2 class="text-center">{{$data['applyJobTitle']}}</h2>
                    </div>
                    <div class="card-body">
                <p><b>Apply Job Title :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->applyJobTitle}}</span></p><p><b>Applicants Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->applicantsName}}</span></p><p><b>Applyed Department Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->applyedDepartmentName}}</span></p><p><b>Working Experience :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->workingExperience}}</span></p><p><b>Previous Working Company Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->previousWorkingCompanyName}}</span></p><p><b>Apply Date :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->applyDate}}</span></p><p><b>Recommended By :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->recommendedBy}}</span></p><p><b>Portfolio :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->portfolio}}</span></p><p><b>Full Time :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->fullTime}}</span></p><p><b>Part Time :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->partTime}}</span></p><p><b>Alias :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->alias}}</span></p><p><b>Status :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span
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