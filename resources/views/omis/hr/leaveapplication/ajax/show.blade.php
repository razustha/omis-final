<div class="offcanvas-header border-bottom border-light">
    <h5 class="offcanvas-title" id="offcanvasTopLabel">Leave Application Details</h5><button type="button" class="btn-close"
        data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body" data-simplebar>
    <div class="nk-block-head-content w-100">
        <div class="d-flex justify-content-between pb-4">

            <h2>{{ $data->employee->firstName }}{{ $data->employee->middleName }} {{ $data->employee->lastName }}</h2>
            <button class="btn btn-primary print_pdf">Print PDF</button>
        </div>
        <div class="card w-100">
            <div class="p-5">

                <div class="card-head">
                    <h2 class="text-center">{{ $data['leaveRequestedBy'] }}</h2>
                </div>
                <div class="card-body">
                    <p><b>Leave Requested By :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->leaveRequestedBy }}</span></p>



                    <div class="d-flex justify-content-between">
                        <div class="col-xl-6">
                            <p><b>Department :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->designationId }}</span></p>
                            <p><b>Department :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->departmentId }}</span></p>
                            <p><b>Leave Type :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>
                                @if($data->leavetype_id == 0)
                                Casual/Paid Leave
                                @else
                                    {{ $data->leavetype->leaveType }}

                                @endif
                            </span></p>
                            <p><b>Leave Start :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->leaveStart }}</span></p>
                            <p><b>Leave End :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->leaveEnd }}</span></p>
                            <p><b>Leave Approved/Rejected By :&nbsp;&nbsp;&nbsp;&nbsp;</b>
                                <span>{{ $data->leaveApprovalBy }}</span>
                            </p>
                            <p><b>Leave Approved/Rejected Date :&nbsp;&nbsp;&nbsp;&nbsp;</b>
                                <span>{{ $data->leaveApprovedDate }}</span>
                            </p>

                            <p><b>Leave Status :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span
                                    class="{{ $data->status == 1 ? 'text-success' : 'text-danger' }}">{{ $data->leaveApplication_status }}</span>
                            </p>
                            <p><b>Remarks :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->remarks }}</span></p>
                        </div>
                        <div class="col-xl-6">
                            <p><b>Created On :</b>&nbsp;&nbsp;&nbsp;<span>{{ $data->created_at }}</span></p>
                            <p><b>Created By :</b>&nbsp;&nbsp;&nbsp;<span>{{ $data->createdBy }}</span></p>
                            <p><b>Updated On :</b>&nbsp;&nbsp;&nbsp;<span>{{ $data->updated_at }}</span></p>
                            <p><b>Updated By :</b>&nbsp;&nbsp;&nbsp;<span>{{ $data->updatedBy }}</span></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
