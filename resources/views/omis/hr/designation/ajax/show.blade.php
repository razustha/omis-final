<div class="offcanvas-header border-bottom border-light">
    <h5 class="offcanvas-title" id="offcanvasTopLabel">Designation Details</h5><button type="button" class="btn-close"
        data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body" data-simplebar>
    <div class="nk-block-head-content w-100">
        <div class="d-flex justify-content-between pb-4">

            <h2>{{ $data['designationName'] }}</h2>
            <button class="btn btn-primary print_pdf">Print PDF</button>
        </div>
        <div class="card w-100">
            <div class="p-5">

                <div class="card-head">
                    <h2 class="text-center"></h2>
                </div>
                <div class="card-body">





                    <div class="d-flex justify-content-between">
                        <div class="col-xl-6">
                            
                            <p><b>Status :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span
                                    class="{{ $data->status == 1 ? 'text-success' : 'text-danger' }}">{{ $data->status == 1 ? 'Active' : 'Inactive' }}</span>
                            </p>
                            <p><b>Alias :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->alias }}</span></p>
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
