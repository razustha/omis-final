<div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">Show Users</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="nk-block-head-content w-100">
            <div class="d-flex justify-content-between pb-4">
    
                <h2>Users Details</h2>
                <button class="btn btn-primary print_pdf">Print PDF</button>
            </div>
            <div class="card w-100">
                <div class="p-5">
    
                    <div class="card-head">
                        <h2 class="text-center">{{$data['user_type']}}</h2>
                    </div>
                    <div class="card-body">
                <p><b>User Type :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->user_type}}</span></p><p><b>Company Id :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->company_id}}</span></p><p><b>Branch Id :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->branch_id}}</span></p><p><b>Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->name}}</span></p><p><b>Mobile :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->mobile}}</span></p><p><b>Email :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->email}}</span></p><p><b>Email Verified At :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->email_verified_at}}</span></p><p><b>Password :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->password}}</span></p><p><b>Remember Token :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->remember_token}}</span></p><p><b>Created By :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->created_by}}</span></p><p><b>Updated By :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->updated_by}}</span></p><p><b>Status :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span
                class="{{$data->status == 1 ? 'text-success' : 'text-danger'}}">{{$data->status == 1 ? 'Active' : 'Inactive'}}</span></p><p><b>Is Deleted :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->is_deleted}}</span></p><div class="d-flex justify-content-between">
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