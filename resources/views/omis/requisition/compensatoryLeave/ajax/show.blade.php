<div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">Show Compensatoryleave</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="nk-block-head-content w-100">
            <div class="d-flex justify-content-between pb-4">
    
                <h2>Compensatoryleave Details</h2>
                <button class="btn btn-primary print_pdf">Print PDF</button>
            </div>
            <div class="card w-100">
                <div class="p-5">
    
                    <div class="card-head">
                        <h2 class="text-center">{{$data['postion']}}</h2>
                    </div>
                    <div class="card-body">
                <p><b>Postion :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->postion}}</span></p><p><b>Department Id :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->department_id}}</span></p><p><b>WorkingDay :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->workingDay}}</span></p><p><b>WorkingDate :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->workingDate}}</span></p><p><b>HolidayReason :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->holidayReason}}</span></p><p><b>From :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->from}}</span></p><p><b>To :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->to}}</span></p><p><b>WorkingReason :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->workingReason}}</span></p><p><b>Recommendation :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->recommendation}}</span></p><p><b>VerificationUnit :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->verificationUnit}}</span></p><p><b>VerifiedDate :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->verifiedDate}}</span></p><p><b>ApprovedBy :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->approvedBy}}</span></p><p><b>ApprovedDate :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->approvedDate}}</span></p><p><b>Alias :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->alias}}</span></p><p><b>Status :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span
                class="{{$data->status == 1 ? 'text-success' : 'text-danger'}}">{{$data->status == 1 ? 'Active' : 'Inactive'}}</span></p><p><b>Remarks :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->remarks}}</span></p><p><b>Tbl CompensatoryLeave Id :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->tbl_compensatoryLeave_id}}</span></p><p><b>CompensatoryLeave Id :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->compensatoryLeave_id}}</span></p><div class="d-flex justify-content-between">
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