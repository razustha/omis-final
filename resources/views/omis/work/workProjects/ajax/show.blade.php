<div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">Show projects</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="nk-block-head-content w-100">
            <div class="d-flex justify-content-between pb-4">
    
                <h2>projects Details</h2>
                <button class="btn btn-primary print_pdf">Print PDF</button>
            </div>
            <div class="card w-100">
                <div class="p-5">
    
                    <div class="card-head">
                        <h2 class="text-center">{{$data['projectTitle']}}</h2>
                    </div>
                    <div class="card-body">
                <p><b>Project Title :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->projectTitle}}</span></p><p><b>Project Client :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->projectStartClient}}</span></p><p><b>Start Date :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->projectStartDate}}</span></p><p><b>End Date :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->projectEndDate}}</span></p><p><b>Project Priority :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->projectPriority}}</span></p><p><b>Assigned Employees :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->assignedEmployees}}</span></p><p><b>Project Description :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->projectDescription}}</span></p><p><b>Alias :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->alias}}</span></p><p><b>Status :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span
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