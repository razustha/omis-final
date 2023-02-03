<div class="offcanvas-header border-bottom border-light">
    <h5 class="offcanvas-title" id="offcanvasTopLabel">Show Employee Onboarding</h5><button type="button" class="btn-close"
        data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body" data-simplebar>
    <div class="nk-block-head-content w-100">
        <div class="d-flex justify-content-between pb-4">

            <h2>Employee Onboarding Details</h2>
            <button class="btn btn-primary print_pdf">Print PDF</button>
        </div>
        <div class="card w-100">
            <div class="p-5">

                <div class="card-head">
                    <h2 class="text-center">{{ $data['employee_id'] }}</h2>
                </div>
                <div class="card-body">
                    <p><b>Employee Id :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->employee_id }}</span></p>
                    <p><b>Department Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->departmentName }}</span></p>
                    <p><b>Designation :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->designation }}</span></p>
                    <p><b>Working Shift :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->workingShift }}</span></p>
                    <p><b>Working Hour :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->workingHour }}</span></p>
                    <p><b>Working Mode :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->workingMode }}</span></p>
                    <p><b>Joined Date :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->joinDate }}</span></p>
                    <p><b>Day From :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->dayFrom }}</span></p>
                    <p><b>Day To :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->dayTo }}</span></p>
                    <p><b>Department Logo :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->departmentLogo }}</span></p>
                    <p><b>Alias :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->alias }}</span></p>
                    <p><b>Status :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span
                            class="{{ $data->status == 1 ? 'text-success' : 'text-danger' }}">{{ $data->status == 1 ? 'Active' : 'Inactive' }}</span>
                    </p>
                    <p><b>Remarks :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->remarks }}</span></p>
                    <div class="d-flex justify-content-between">
                        <div>
                            <p><b>Created On :</b>&nbsp;&nbsp;&nbsp;<span>{{ $data->created_at }}</span></p>
                            <p><b>Created By :</b>&nbsp;&nbsp;&nbsp;<span>{{ $data->createdBy }}</span></p>
                        </div>
                        <div>
                            <p><b>Updated On :</b>&nbsp;&nbsp;&nbsp;<span>{{ $data->updated_at }}</span></p>
                            <p><b>Updated By :</b>&nbsp;&nbsp;&nbsp;<span>{{ $data->updatedBy }}</span></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
