<div class="offcanvas-header border-bottom border-light">
    <h5 class="offcanvas-title" id="offcanvasTopLabel">Organization Details </h5><button type="button" class="btn-close"
        data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body" data-simplebar>
    <div class="nk-block-head-content w-100">



        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2 align-items-start">
                                <div class="nk-block-head-content">
                                    <div class="d-flex flex-column flex-md-row align-items-md-center">
                                        <div class="media media-huge media-circle">
                                            @if ($data->logo)
                                                <img id="holder" style="margin-top:15px;max-height:150px;"
                                                    class="img img-fluid" src="{{ $data->logo }}">
                                            @endif
                                        </div>
                                        <div class="mt-3 mt-md-0 ms-md-3">
                                            <h2 class="title mb-1">{{ $data['organizationName'] }}</h2>
                                            <h3 class="title mb-1"> {{ $data->organizatoinCategory }}</h3>
                                            <span
                                                class="{{ $data->status == 1 ? 'text-success' : 'text-danger' }}">{{ $data->status == 1 ? 'Active' : 'Inactive' }}</span>

                                        </div>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <div class="d-flex gap g-3">

                                        <div class="gap-col">
                                            <div class="gap-col">
                                                <ul class="d-flex gap g-2">
                                                    <li class="d-none d-md-block"><a href="user-edit.html"
                                                            class="btn btn-soft btn-primary"><em
                                                                class="icon ni ni-edit"></em><span>Edit
                                                                Profile</span></a></li>
                                                    <li class="d-none d-md-block"><button
                                                            class="btn btn-primary print_pdf">Print PDF</button></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block-head-between gap g-2">


                        </div>
                    </div>
                    <div class="nk-block">

                        <div class="card card-gutter-md">
                            <div class="card-row card-row-lg col-sep col-sep-lg">
                                <div class="card-aside">
                                    <div class="card-body">
                                        <div class="bio-block">
                                            <h4 class="bio-block-title">Package Details</h4>
                                            <ul class="list-group list-group-borderless small">
                                                <li class="list-group-item"><span
                                                        class="title fw-medium w-40 d-inline-block">Organization
                                                        ID:</span><span class="text">{{$data->organization_id}}</span></li>
                                             

                                                <li class="list-group-item"><span
                                                        class="title fw-medium w-40 d-inline-block">Package
                                                        Name:</span><span class="text">{{$data->package_name}}</span>
                                                </li>
                                                <li class="list-group-item"><span
                                                        class="title fw-medium w-40 d-inline-block">Budget
                                                        Size:</span><span class="text">{{ $data->budgetSize }}</span>
                                                </li>
                                                <!-- <li class="list-group-item"><span
                                                        class="title fw-medium w-40 d-inline-block">Employees
                                                        Quota:</span><span class="text">wesley@gmail.com</span></li>
                                                <li class="list-group-item"><span
                                                        class="title fw-medium w-40 d-inline-block">Storage:</span><span
                                                        class="text">California, United States</span></li> -->
                                                <li class="list-group-item"><span
                                                        class="title fw-medium w-40 d-inline-block">Joining
                                                        Date</span><span class="text">2 Dec 2021</span></li>
                                                <li class="list-group-item"><span
                                                        class="title fw-medium w-40 d-inline-block">Expiring
                                                        Date</span><span class="text">2 Dec 2021</span></li>
                                                <li class="list-group-item"><span
                                                        class="title fw-medium w-40 d-inline-block">Created
                                                        Date</span><span class="text">{{ $data->created_at }}</span>
                                                </li>
                                                <li class="list-group-item"><span
                                                        class="title fw-medium w-40 d-inline-block">Created By
                                                    </span><span class="text">{{ $data->createdBy }}</span></li>
                                                <li class="list-group-item"><span
                                                        class="title fw-medium w-40 d-inline-block">Update At
                                                    </span><span class="text">{{ $data->updated_at }}</span></li>
                                                <li class="list-group-item"><span
                                                        class="title fw-medium w-40 d-inline-block">Updated By
                                                    </span><span class="text">{{ $data->updatedBy }}</span></li>

                                                <li class="list-group-item"><span
                                                        class="title fw-medium w-40 d-inline-block">Alias
                                                    </span><span class="text">{{ $data->alias }}</span></li>

                                            </ul>
                                        </div>


                                    </div>
                                </div>
                                <div class="card-content ">
                                    <div class="card-body">

                                        <h2 class="bio-block-title"> {{ $data['organizationName'] }}</h2>
                                        <hr class="border-light border-3 opacity-75">
                                        <div class="col-xxl-12">
                                            <div class="row">


                                                <div class="col-xl-6">
                                                    <div class="p-3 mb-2 text-dark">
                                                        <h3 class="card-title">Owner Name </h3>
                                                       
                                                        <p class="text text-light">{{ $data->ownerName }}</p>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6">
                                                    <div class="p-3 mb-2 text-dark">
                                                        <h3 class="card-title">Email Address </h3>
                                                        
                                                        <p class="text text-light">{{ $data->emailAddress }}</p>
                                                    </div>
                                                </div>
                                                <hr class="border-light border-3 opacity-75">
                                                <div class="col-xl-4">
                                                    <div class="p-3 mb-2 text-dark">
                                                        <h3 class="card-title">Phone Number </h3>
                                                        
                                                        <p class="text text-light">{{ $data->phoneNumber }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="p-3 mb-2 text-dark">
                                                        <h3 class="card-title">Landline Number</h3>
                                                        
                                                        <p class="text text-light">{{ $data->landLineNumber }}</p>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="p-3 mb-2 text-dark">
                                                        <h3 class="card-title">Fax Number </h3>
                                                       
                                                        <p class="text text-light">{{ $data->faxAddress }}</p>
                                                    </div>
                                                </div>

                                                <hr class="border-light border-3 opacity-75">
                                                <div class="col-xl-3">
                                                    <div class="p-3 mb-2 text-dark">
                                                        <h3 class="card-title">Country </h3>
                                                        
                                                        <p class="text text-light">{{$data['country_id']}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3">
                                                    <div class="p-3 mb-2 text-dark">
                                                        <h3 class="card-title">State </h3>
                                                        
                                                        <p class="text text-light">{{$data['state_id']}}</p>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3">
                                                    <div class="p-3 mb-2 text-dark">
                                                        <h3 class="card-title">District </h3>
                                                        
                                                        <p class="text text-light">{{$data['district_id']}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3">
                                                    <div class="p-3 mb-2 text-dark">
                                                        <h3 class="card-title">City </h3>
                                                        
                                                        <p class="text text-light">{{$data['city_id']}}</p>
                                                    </div>
                                                </div>

                                                <hr class="border-light border-3 opacity-75">
                                                <div class="col-xl-6">
                                                    <div class="p-3 mb-2 text-dark">
                                                        <h3 class="card-title">Document Name </h3>
                                                        
                                                        <p class="text text-light">{{ $data->documentName }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="p-3 mb-2 text-dark">
                                                        <h3 class="card-title">Document Type </h3>
                                                        
                                                        <p class="text text-light">{{ $data->documentType }}</p>
                                                    </div>
                                                </div>

                                                <hr class="border-light border-3 opacity-75">
                                                <div class="col-xl-6">
                                                    <div class="p-3 mb-2 text-dark">
                                                        <h3 class="card-title">Geo Map Location </h3>
                                                        
                                                        <p class="text text-light">{{ $data->geoMapLocation }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="p-3 mb-2 text-dark">
                                                        <h3 class="card-title">Remarks </h3>
                                                        
                                                        <p class="text text-light">{{ $data->remarks }}</p>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>




    </div>
</div>
