<div class="offcanvas-header border-bottom border-light">
    <h5 class="offcanvas-title" id="offcanvasTopLabel">Show Package</h5><button type="button" class="btn-close"
        data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body" data-simplebar>
    <div class="nk-block-head-content w-100">
        <div class="d-flex justify-content-between pb-4">

            <h2>Package Details</h2>
            <button class="btn btn-primary print_pdf">Print PDF</button>
        </div>

        <div class="card nk-support-wrap overflow-hidden">
            <div class="nk-support-header bg-lighter has-mask">
                <div class="mask mask-4"></div>
                <div class="nk-support-header-content text-center">
                    <div class="h1 nk-support-title mb-3">
                        <h1 class="text-center">{{ $data['name'] }} Package</h1>
                    </div>
                    {{-- <p class="nk-support-desc">Welcome everyone! Search Articles, Public Tickets and watch Videos to find answers. Or, submit a Ticket if needed.</p> --}}

                </div>
            </div>
            <div class="nk-support-body">
                
                <div class="row g-gs">
                   
                    <div class="col-xl-3">
                        <div class="nk-pricing-card-title mb-4">
                            <h3 class="nk-block-title">Name</h3>
                            <p class="text text-light">{{ $data->name }}</p>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="nk-pricing-card-title mb-4">
                            <h3 class="title">Price</h3>
                            <p class="text text-light">{{ $data->price }}</p>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="nk-pricing-card-title mb-4">
                            <h3 class="title">Duration</h3>
                            <p class="text text-light">{{ $data->duration }} year</p>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="nk-pricing-card-title mb-4">
                            <h3 class="title">Status</h3>
                            <p class="text text-light"><span
                                class="{{ $data->status == 1 ? 'text-success' : 'text-danger' }}">{{ $data->status == 1 ? 'Active' : 'Inactive' }}</span></p>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="nk-pricing-card-title mb-4">
                            <h3 class="title">Features</h3>
                            <p class="text text-light">{{ $data->module_name }} year</p>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="nk-pricing-card-title mb-4">
                            <h3 class="title">Remarks</h3>
                            <p class="text text-light">{{ $data->remarks }} year</p>
                        </div>
                    </div>

                    <div class="col-xl-3">
                        <div class="nk-pricing-card-title mb-4">
                            <h3 class="title">Created On :</h3>
                            <p class="text text-light">{{ $data->created_at }}</p>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="nk-pricing-card-title mb-4">
                            <h3 class="title">Created By :</h3>
                            <p class="text text-light">{{ $data->createdBy }}</p>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="nk-pricing-card-title mb-4">
                            <h3 class="title">Updated On :</h3>
                            <p class="text text-light">{{ $data->updated_at }}</p>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="nk-pricing-card-title mb-4">
                            <h3 class="title">Updated By</h3>
                            <p class="text text-light">{{ $data->updatedBy }}</p>
                        </div>
                    </div>
                    
               

                </div>
            </div>
        </div>


    </div>
</div>
