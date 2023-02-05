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
                    <div class="h1 nk-support-title mb-3"> <h2 class="text-center">{{ $data['name'] }} Package</h2></div>
                    {{-- <p class="nk-support-desc">Welcome everyone! Search Articles, Public Tickets and watch Videos to find answers. Or, submit a Ticket if needed.</p> --}}
                   
                </div>
            </div>
            <div class="nk-support-body">
                <div class="row g-gs">
                    <div class="col-xl-12">
                        
                                <p><b>Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->name }}</span></p>
                                <p><b>Price :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->price }}</span></p>
                                <p><b>Feature :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->module_name }}</span></p>
                                <p><b>Duration :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->duration }}</span></p>
                                <p><b>Alias :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->alias }}</span></p>
                                <p><b>Description :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{ $data->description }}</span></p>
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
</div>
