@include("partials.header")
@include("partials.sidebar")

<div class="nk-content">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2 align-items-start">
                            <div class="nk-block-head-content">
                                <div class="d-flex flex-column flex-md-row align-items-md-center">
                                    <div class="media media-huge media-circle"><img src="images/avatar/a.jpg" class="img-thumbnail" alt=""></div>
                                    <div class="mt-3 mt-md-0 ms-md-3">
                                        <h3 class="title mb-1">Florenza Desporte</h3><span class="small">Owner & Founder</span>
                                        <ul class="nk-list-option pt-1">
                                            <li><em class="icon ni ni-map-pin"></em><span class="small">California, United States</span></li>
                                            <li><em class="icon ni ni-building"></em><span class="small">Softnio</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--
                                            <div class="nk-block-head-content">
                                                <div class="d-flex gap g-3">
                                                    <div class="gap-col">
                                                        <div class="box-dotted py-2">
                                                            <div class="d-flex align-items-center">
                                                                <div class="h4 mb-0">44.3K</div><span class="change up ms-1 small"><em class="icon ni ni-arrow-down"></em></span>
                                                            </div>
                                                            <div class="smaller">Followers</div>
                                                        </div>
                                                    </div>
                                                    <div class="gap-col">
                                                        <div class="box-dotted py-2">
                                                            <div class="d-flex align-items-center">
                                                                <div class="h4 mb-0">4.5k</div><span class="change up ms-1 small"><em class="icon ni ni-arrow-up"></em></span>
                                                            </div>
                                                            <div class="smaller">Following</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
-->
                        </div>
                    </div>
                    <div class="nk-block-head-between gap g-2">
                        <div class="gap-col">
                            <ul class="nav nav-pills nav-pills-border gap g-3">
                                <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile" type="button"> Profile </button></li>
                                <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#documents" type="button"> Documents </button></li>
                                <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#projects" type="button"> Project </button></li>
                                <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#tasks" type="button"> Tasks </button></li>
                                <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#leaves" type="button"> Leaves </button></li>
                                <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#timelogs" type="button"> Time Logs </button></li>
                                <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#travel" type="button"> Travel </button></li>
                                <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#appreciation" type="button"> Appreciation </button></li>
                                <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#shiftroaster" type="button"> Shift Roaster </button></li>
                                <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#permission" type="button"> Permission </button></li>
                            </ul>
                        </div>
                        <!--
                                        <div class="gap-col">
                                            <ul class="d-flex gap g-2">
                                                <li class="d-none d-md-block"><a href="user-edit.html" class="btn btn-soft btn-primary"><em class="icon ni ni-edit"></em><span>Edit Profile</span></a></li>
                                                <li class="d-md-none"><a href="user-edit.html" class="btn btn-soft btn-primary btn-icon"><em class="icon ni ni-edit"></em></a></li>
                                            </ul>
                                        </div>
-->
                    </div>
                </div>
                <div class="nk-block">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane show active" id="profile" tabindex="0">
                            <div class="card card-gutter-md">
                                <div class="card-row card-row-lg col-sep col-sep-lg">
                                    <div class="card-aside">
                                        <div class="card-body">
                                            <div class="bio-block">
                                                <h4 class="bio-block-title">Details</h4>
                                                <ul class="list-group list-group-borderless small">
                                                    <li class="list-group-item"><span class="title fw-medium w-40 d-inline-block">Account ID:</span><span class="text">ID-45453423</span></li>
                                                    <li class="list-group-item"><span class="title fw-medium w-40 d-inline-block">Full Name:</span><span class="text">Wesley Burland</span></li>
                                                    <li class="list-group-item"><span class="title fw-medium w-40 d-inline-block">Email:</span><span class="text">wesley@gmail.com</span></li>
                                                    <li class="list-group-item"><span class="title fw-medium w-40 d-inline-block">Address:</span><span class="text">California, United States</span></li>
                                                    <li class="list-group-item"><span class="title fw-medium w-40 d-inline-block">Joining Date</span><span class="text">2 Dec 2021</span></li>
                                                </ul>
                                            </div>
                                            <div class="bio-block">
                                                <h4 class="bio-block-title mb-2">Skills</h4>
                                                <ul class="d-flex flex-wrap gap gx-1">
                                                    <li><a href="#" class="badge text-bg-secondary-soft">Photoshop</a></li>
                                                    <li><a href="#" class="badge text-bg-secondary-soft">illustrator</a></li>
                                                    <li><a href="#" class="badge text-bg-secondary-soft">HTML</a></li>
                                                    <li><a href="#" class="badge text-bg-secondary-soft">CSS</a></li>
                                                    <li><a href="#" class="badge text-bg-secondary-soft">Javascript</a></li>
                                                    <li><a href="#" class="badge text-bg-secondary-soft">React</a></li>
                                                    <li><a href="#" class="badge text-bg-secondary-soft">Vue</a></li>
                                                    <li><a href="#" class="badge text-bg-secondary-soft">Angular</a></li>
                                                    <li><a href="#" class="badge text-bg-secondary-soft">Python</a></li>
                                                </ul>
                                            </div>
                                            <div class="bio-block">
                                                <h4 class="bio-block-title mb-3">Social</h4>
                                                <ul class="d-flex flex-wrap gap g-2">
                                                    <li><a href="#" class="media media-sm media-middle text-bg-dark"><em class="icon ni ni-github-circle"></em></a></li>
                                                    <li><a href="#" class="media media-sm media-middle text-bg-danger"><em class="icon ni ni-dribbble"></em></a></li>
                                                    <li><a href="#" class="media media-sm media-middle text-bg-info"><em class="icon ni ni-twitter"></em></a></li>
                                                    <li><a href="#" class="media media-sm media-middle text-bg-pink"><em class="icon ni ni-linkedin"></em></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-content col-sep">
                                        <div class="card-body">
                                            <div class="bio-block">
                                                <h4 class="bio-block-title">About Me</h4>
                                                <p>I code and design websites worldwide. Mauris varius tellus vitae tristique sagittis. Sed aliquet, est nec auctor aliquet, orci ex vestibulum ex, non pharetra lacus erat ac nulla.</p>
                                                <p>Sed vulputate, ligula eget mollis auctor, lectus elit feugiat urna, eget euismod turpis lectus sed ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc ut velit finibus, scelerisque sapien vitae, pharetra est. Nunc accumsan ligula vehicula scelerisque vulputate. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, dolore?</p>
                                                <div class="row g-gs">
                                                    <div class="col-lg-6">
                                                        <div class="small">Designation:</div>
                                                        <h5 class="small">Node.js Developer</h5>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="small">Website:</div>
                                                        <h5 class="small">www.softnio.com</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="bio-block">
                                                <h4 class="bio-block-title">Recent Activity</h4>
                                                <ul class="nk-schedule mt-4">
                                                    <li class="nk-schedule-item">
                                                        <div class="nk-schedule-item-inner">
                                                            <div class="nk-schedule-symbol active"></div>
                                                            <div class="nk-schedule-content"><span class="smaller">2:12 PM</span>
                                                                <div class="h6">Added 3 New Images</div>
                                                                <ul class="d-flex flex-wrap gap g-2 py-2">
                                                                    <li>
                                                                        <div class="media media-xxl"><img src="../images/product/a.jpg" alt="" class="img-thumbnail"></div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="media media-xxl"><img src="../images/product/b.jpg" alt="" class="img-thumbnail"></div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="media media-xxl"><img src="../images/product/c.jpg" alt="" class="img-thumbnail"></div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nk-schedule-item">
                                                        <div class="nk-schedule-item-inner">
                                                            <div class="nk-schedule-symbol active"></div>
                                                            <div class="nk-schedule-content"><span class="smaller">4:23 PM</span>
                                                                <div class="h6">Invitation for creative designs pattern</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nk-schedule-item">
                                                        <div class="nk-schedule-item-inner">
                                                            <div class="nk-schedule-symbol active"></div>
                                                            <div class="nk-schedule-content nk-schedule-content-no-border"><span class="smaller">10:30 PM</span>
                                                                <div class="h6">Task report - uploaded weekly reports</div>
                                                                <div class="list-group-dotted mt-3">
                                                                    <div class="list-group-wrap">
                                                                        <div class="p-3">
                                                                            <div class="media-group">
                                                                                <div class="media rounded-0"><img src="../images/icon/file-type-pdf.svg" alt=""></div>
                                                                                <div class="media-text ms-1"><a href="#" class="title">Modern Designs Pattern</a><span class="text smaller">1.6.mb</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="p-3">
                                                                            <div class="media-group">
                                                                                <div class="media rounded-0"><img src="../images/icon/file-type-doc.svg" alt=""></div>
                                                                                <div class="media-text ms-1"><a href="#" class="title">cPanel Upload Guidelines</a><span class="text smaller">18kb</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="p-3">
                                                                            <div class="media-group">
                                                                                <div class="media rounded-0"><img src="../images/icon/file-type-code.svg" alt=""></div>
                                                                                <div class="media-text ms-1"><a href="#" class="title">Weekly Finance Reports</a><span class="text smaller">10mb</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nk-schedule-item">
                                                        <div class="nk-schedule-item-inner">
                                                            <div class="nk-schedule-symbol active"></div>
                                                            <div class="nk-schedule-content nk-schedule-content-no-border flex-grow-1"><span class="smaller">5:05 PM</span>
                                                                <div class="h6">You have received a new order</div>
                                                                <div class="alert alert-info mt-2" role="alert">
                                                                    <div class="d-flex"><em class="icon icon-lg ni ni-file-code opacity-75"></em>
                                                                        <div class="ms-2 d-flex flex-wrap flex-grow-1 justify-content-between">
                                                                            <div>
                                                                                <h6 class="alert-heading mb-0">Business Template - UI/UX design</h6><span class="smaller">Shared information with your team to understand and contribute to your project.</span>
                                                                            </div>
                                                                            <div class="d-block mt-1"><a href="#" class="btn btn-md btn-info"><em class="icon ni ni-download"></em><span>Download</span></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane show " id="documents" tabindex="0">
                            <div class="nk-content">
                                <div class="nk-content-inner">
                                    <div class="nk-content-body">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-between flex-wrap gap g-1">
                                                <div class="nk-block-head-content">
                                                    <h2 class="nk-block-title">Upload Document</h2>
                                                </div>
                                                <div class="nk-block-head-content">
                                                    <ul class="d-flex">
                                                        <li><a href="#" class="btn btn-md d-md-none btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">span>Add</span></a></li>
                                                        <li><button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                Upload Document</button>
                                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Upload Document</h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="nk-block-head-content nk-block-head-tools">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="modal-body">
                                                                                        <form method="" action="">
                                                                                            <div class="form-group">
                                                                                                <label for="documentType" class="form-label">Upload Document</label>
                                                                                                <div class="form-control-wrap">
                                                                                                    <div class="js-upload" id="dropzoneFile1">
                                                                                                        <div class="dz-message" data-dz-message>
                                                                                                            <div class="dz-message-icon"></div> <span class="dz-message-text">Drag and drop file</span>
                                                                                                            <div class="dz-message-btn mt-2"> <button class="btn btn-md btn-primary">Upload</button> </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div><br>
                                                                                            <div class="form-group">
                                                                                                <?php createLabel('documentType', 'form-label', 'Document Type') ?>
                                                                                                <?php createSelect('documentType', 'documentType', '', '', ['Citizenship', 'Driving License']) ?>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                        </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="nk-block">
                                        <table class="datatable-init table">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="tb-col"><span class="overline-title">Document Name</span></th>
                                                    <th class="tb-col"><span class="overline-title">Document Type</span></th>
                                                    <th class="tb-col"><span class="overline-title">Upload Date</span></th>
                                                    <th class="tb-col"><span class="overline-title">Action</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="tb-col">
                                                        <div class="media-group">
                                                            <div class="media-text"><a href="user-profile.html" class="title">rsz_20221120_150047.docx</a></div>
                                                        </div>
                                                    </td>
                                                    <td class="tb-col tb-col-xl">Citizenship</td>
                                                    <td class="tb-col tb-col-xxl">2022/04/25</td>
                                                    <td class="tb-col tb-col-xxl">


                                                        <ul class="d-flex flex-wrap ">
                                                            <li><a href="#" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft"><em class="icon ni ni-eye"></em></a></li>
                                                            <li><a href="#" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                                                            <li><button type="button" data-route="#" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
                                                        </ul>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="tb-col">
                                                        <div class="media-group">
                                                            <div class="media-text"><a href="user-profile.html" class="title">rsz_20221120_150047.docx</a></div>
                                                        </div>
                                                    </td>
                                                    <td class="tb-col tb-col-xl">Citizenship</td>
                                                    <td class="tb-col tb-col-xxl">2022/04/25</td>
                                                    <td class="tb-col tb-col-xxl">


                                                        <ul class="d-flex flex-wrap ">
                                                            <li><a href="#" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft"><em class="icon ni ni-eye"></em></a></li>
                                                            <li><a href="#" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                                                            <li><button type="button" data-route="#" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
                                                        </ul>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="tb-col">
                                                        <div class="media-group">
                                                            <div class="media-text"><a href="user-profile.html" class="title">rsz_20221120_150047.docx</a></div>
                                                        </div>
                                                    </td>
                                                    <td class="tb-col tb-col-xl">Citizenship</td>
                                                    <td class="tb-col tb-col-xxl">2022/04/25</td>
                                                    <td class="tb-col tb-col-xxl">


                                                        <ul class="d-flex flex-wrap ">
                                                            <li><a href="#" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft"><em class="icon ni ni-eye"></em></a></li>
                                                            <li><a href="#" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                                                            <li><button type="button" data-route="#" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
                                                        </ul>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="tb-col">
                                                        <div class="media-group">
                                                            <div class="media-text"><a href="user-profile.html" class="title">rsz_20221120_150047.docx</a></div>
                                                        </div>
                                                    </td>
                                                    <td class="tb-col tb-col-xl">Citizenship</td>
                                                    <td class="tb-col tb-col-xxl">2022/04/25</td>
                                                    <td class="tb-col tb-col-xxl">


                                                        <ul class="d-flex flex-wrap ">
                                                            <li><a href="#" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft"><em class="icon ni ni-eye"></em></a></li>
                                                            <li><a href="#" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                                                            <li><button type="button" data-route="#" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
                                                        </ul>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="tab-pane show " id="projects" tabindex="0">

                            <div class="nk-content">
                                <div class="nk-content-inner">
                                    <div class="nk-content-body">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-between flex-wrap gap g-1">



                                                <div class="nk-head-content">
                                                    <ul class="d-flex gap-2">
                                                        <li><a href="#" class="btn btn-md d-md-none btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal"><span>Add</span></a></li>
                                                        <li><button class="btn btn-primary"><em class="icon ni ni-inbox-in-fill"></em>&nbsp;Export</button></li>
                                                        <li> <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#addOffcanvas"><em class="icon ni ni-filter-fill"></em> &nbsp; Filter</button></li>
                                                        <li> <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#project"><em class="icon ni ni-plus"></em> &nbsp; Add Project</button></li>
                                                    </ul>
                                                </div>

                                            </div>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="nk-block">
                                        <table class="table">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="tb-col"><span class="overline-title">S.No</span></th>
                                                    <th class="tb-col"><span class="overline-title">Project Name</span></th>
                                                    <th class="tb-col"><span class="overline-title">Project Code</span></th>
                                                    <th class="tb-col"><span class="overline-title">Members</span></th>
                                                    <th class="tb-col"><span class="overline-title">Assigned Date</span></th>
                                                    <th class="tb-col"><span class="overline-title">Deadline</span></th>
                                                    <th class="tb-col"><span class="overline-title">Process</span></th>
                                                    <th class="tb-col"><span class="overline-title">Action</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="tb-col">1</td>

                                                    <td class="tb-col">
                                                        <div class="media-group">
                                                            <div class="media-text"><a href="user-profile.html" class="title">Office management information system</a></div>
                                                        </div>
                                                    </td>

                                                    <td class="tb-col">OMIS</td>

                                                    <td class="tb-col ">
                                                        <div class="media-group media-group-overlap">
                                                            <div class="media media-xs media-circle media-border border-white" data-bs-toggle="tooltip" data-bs-placement="top" title="David">
                                                                <img src="images/avatar/a.jpg" alt="" />
                                                            </div>
                                                            <div class="media media-xs media-circle media-border border-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Sanjoy">
                                                                <img src="images/avatar/b.jpg" alt="" />
                                                            </div>
                                                            <div class="media media-xs media-circle media-border border-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Kinchit">
                                                                <img src="images/avatar/c.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td class="tb-col">2022/04/25</td>

                                                    <td class="tb-col">2022/04/25</td>

                                                    <td class="tb-col">
                                                        <div class="progress mt-1">
                                                            <div class="progress-bar" data-progress="70%">70%</div>
                                                        </div>

                                                    </td>

                                                    <td>
                                                        <div class="dropdown"><a href="#" class="btn btn-sm btn-icon btn-zoom me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                                <div class="dropdown-content py-1">
                                                                    <ul class="link-list link-list-hover-bg-primary link-list-md">
                                                                        <li><a href="user-edit.html"><em class="icon ni ni-edit"></em><span>Public Gantt Chart</span></a>
                                                                        </li>
                                                                        <li><a href="user-edit.html"><em class="icon ni ni-trash"></em><span>Public Task Board</span></a>
                                                                        </li>
                                                                        <li><a href="user-profile.html"><em class="icon ni ni-eye"></em><span>View
                                                                                    Details</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <!--TASK-->

                        <div class="tab-pane show " id="tasks" tabindex="0">
                            <div class="card card-gutter-md g-1">
                                <div class="nk-content">
                                    <div class="nk-block">
                                        <div class="nk-todo" data-todo-collapse="xl" id="todoWrap">
                                            <div class="container">
                                                <div>

                                                    <div class="nk-block-head-between flex-wrap gap g-2">
                                                        <div class="nk-block-head-content">
                                                            <h2 class="nk-block-title">
                                                                <div class="form-control-wrap mb-3">
                                                                    <div class="form-control-icon start text-light md ps-0">
                                                                        <em class="icon ni ni-search"></em>
                                                                    </div>
                                                                    <input class="form-control form-control-md form-control-plaintext" type="text" placeholder="Search Task">
                                                                </div>
                                                            </h2>
                                                        </div>
                                                        <div class="nk-block-head-content">
                                                            <ul class="d-flex">
                                                                <li><a href="#" class="btn btn-md d-md-none btn-primary"><em class="icon ni ni-plus"></em><span>Create</span></a></li>
                                                                <li> <button class="mb-3 btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#addTasksModal"><em class="icon ni ni-plus"></em><span>Add Task</span></button></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">

                                                        <ul class="nav nav-tabs mb-3 nav-tabs-s1">
                                                            <li class="nav-item"> <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#custom-mytask-tab-pane" type="button">My Task</button> </li>
                                                            <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab" data-bs-target="#custom-completed-tab-pane" type="button">Completed</button> </li>
                                                            <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab" data-bs-target="#custom-urgent-tab-pane" type="button">Urgent</button> </li>
                                                            <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab" data-bs-target="#custom-deleted-tab-pane" type="button">Deleted</button> </li>
                                                            <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab" data-bs-target="#custom-edited-tab-pane" type="button">Edited</button> </li>
                                                            <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab" data-bs-target="#custom-marked-tab-pane" type="button">Marked</button> </li>
                                                        </ul>
                                                        <div class="tab-content" id="myTabContent">
                                                            <div class="tab-pane fade show active" id="custom-mytask-tab-pane">

                                                                <!-- task lists -->
                                                                <div class="nk-todo-item">
                                                                    <div class="nk-todo-item-elem nk-todo-item-check">
                                                                        <div class="form-check form-check-sm"><input class="form-check-input todo-check-toggle" type="checkbox" value="" id="todo01"></div>
                                                                    </div>
                                                                    <div class="nk-todo-item-elem nk-todo-item-star">
                                                                        <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="nk-todo-item-elem nk-todo-item-content">
                                                                        <div class="nk-todo-item-subject">Weekly Bigbazar Shopping
                                                                        </div>
                                                                    </div>
                                                                    <div class="nk-todo-item-elem nk-todo-item-action">
                                                                        <div class="d-flex align-items-center justify-content-end">
                                                                            <div class="gap-col"><a href="#" class="btn btn-sm btn-icon btn-zoom"><em class="icon ni ni-list-check"></em></a></div>
                                                                            <div class="gap-col"><a href="#" class="btn btn-sm btn-icon btn-zoom"><em class="icon ni ni-edit"></em></a></div>
                                                                            <div class="gap-col"><a href="#" class="btn btn-sm btn-icon btn-zoom"><em class="icon ni ni-trash"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- task lists -->

                                                            </div>
                                                            <div class="tab-pane fade" id="custom-completed-tab-pane">
                                                                <!-- task lists -->
                                                                <div class="nk-todo-item">
                                                                    <div class="nk-todo-item-elem nk-todo-item-check">
                                                                        <div class="form-check form-check-sm"><input class="form-check-input todo-check-toggle" type="checkbox" value="" id="todo01"></div>
                                                                    </div>
                                                                    <div class="nk-todo-item-elem nk-todo-item-star">
                                                                        <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="nk-todo-item-elem nk-todo-item-content">
                                                                        <div class="nk-todo-item-subject">Weekly Bigbazar Shopping
                                                                        </div>
                                                                    </div>
                                                                    <div class="nk-todo-item-elem nk-todo-item-action">
                                                                        <div class="d-flex align-items-center justify-content-end">
                                                                            <div class="gap-col"><a href="#" class="btn btn-sm btn-icon btn-zoom"><em class="icon ni ni-list-check"></em></a></div>
                                                                            <div class="gap-col"><a href="#" class="btn btn-sm btn-icon btn-zoom"><em class="icon ni ni-edit"></em></a></div>
                                                                            <div class="gap-col"><a href="#" class="btn btn-sm btn-icon btn-zoom"><em class="icon ni ni-trash"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- task lists -->
                                                            </div>

                                                            <div class="tab-pane fade" id="custom-urgent-tab-pane">
                                                                <!-- task lists -->
                                                                <div class="nk-todo-item">
                                                                    <div class="nk-todo-item-elem nk-todo-item-check">
                                                                        <div class="form-check form-check-sm"><input class="form-check-input todo-check-toggle" type="checkbox" value="" id="todo01"></div>
                                                                    </div>
                                                                    <div class="nk-todo-item-elem nk-todo-item-star">
                                                                        <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="nk-todo-item-elem nk-todo-item-content">
                                                                        <div class="nk-todo-item-subject">Weekly Bigbazar Shopping
                                                                        </div>
                                                                    </div>
                                                                    <div class="nk-todo-item-elem nk-todo-item-action">
                                                                        <div class="d-flex align-items-center justify-content-end">
                                                                            <div class="gap-col"><a href="#" class="btn btn-sm btn-icon btn-zoom"><em class="icon ni ni-list-check"></em></a></div>
                                                                            <div class="gap-col"><a href="#" class="btn btn-sm btn-icon btn-zoom"><em class="icon ni ni-edit"></em></a></div>
                                                                            <div class="gap-col"><a href="#" class="btn btn-sm btn-icon btn-zoom"><em class="icon ni ni-trash"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- task lists -->
                                                            </div>

                                                            <div class="tab-pane fade" id="custom-deleted-tab-pane">
                                                                <!-- task lists -->
                                                                <div class="nk-todo-item">
                                                                    <div class="nk-todo-item-elem nk-todo-item-check">
                                                                        <div class="form-check form-check-sm"><input class="form-check-input todo-check-toggle" type="checkbox" value="" id="todo01"></div>
                                                                    </div>
                                                                    <div class="nk-todo-item-elem nk-todo-item-star">
                                                                        <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="nk-todo-item-elem nk-todo-item-content">
                                                                        <div class="nk-todo-item-subject">Weekly Bigbazar Shopping
                                                                        </div>
                                                                    </div>
                                                                    <div class="nk-todo-item-elem nk-todo-item-action">
                                                                        <div class="d-flex align-items-center justify-content-end">
                                                                            <div class="gap-col"><a href="#" class="btn btn-sm btn-icon btn-zoom"><em class="icon ni ni-list-check"></em></a></div>
                                                                            <div class="gap-col"><a href="#" class="btn btn-sm btn-icon btn-zoom"><em class="icon ni ni-edit"></em></a></div>
                                                                            <div class="gap-col"><a href="#" class="btn btn-sm btn-icon btn-zoom"><em class="icon ni ni-trash"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- task lists -->
                                                            </div>

                                                            <div class="tab-pane fade" id="custom-edited-tab-pane">
                                                                <!-- task lists -->
                                                                <div class="nk-todo-item">
                                                                    <div class="nk-todo-item-elem nk-todo-item-check">
                                                                        <div class="form-check form-check-sm"><input class="form-check-input todo-check-toggle" type="checkbox" value="" id="todo01"></div>
                                                                    </div>
                                                                    <div class="nk-todo-item-elem nk-todo-item-star">
                                                                        <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="nk-todo-item-elem nk-todo-item-content">
                                                                        <div class="nk-todo-item-subject">Weekly Bigbazar Shopping
                                                                        </div>
                                                                    </div>
                                                                    <div class="nk-todo-item-elem nk-todo-item-action">
                                                                        <div class="d-flex align-items-center justify-content-end">
                                                                            <div class="gap-col"><a href="#" class="btn btn-sm btn-icon btn-zoom"><em class="icon ni ni-list-check"></em></a></div>
                                                                            <div class="gap-col"><a href="#" class="btn btn-sm btn-icon btn-zoom"><em class="icon ni ni-edit"></em></a></div>
                                                                            <div class="gap-col"><a href="#" class="btn btn-sm btn-icon btn-zoom"><em class="icon ni ni-trash"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- task lists -->
                                                            </div>

                                                            <div class="tab-pane fade" id="custom-marked-tab-pane">
                                                                <!-- task lists -->
                                                                <div class="nk-todo-item">
                                                                    <div class="nk-todo-item-elem nk-todo-item-check">
                                                                        <div class="form-check form-check-sm"><input class="form-check-input todo-check-toggle" type="checkbox" value="" id="todo01"></div>
                                                                    </div>
                                                                    <div class="nk-todo-item-elem nk-todo-item-star">
                                                                        <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="nk-todo-item-elem nk-todo-item-content">
                                                                        <div class="nk-todo-item-subject">Weekly Bigbazar Shopping
                                                                        </div>
                                                                    </div>
                                                                    <div class="nk-todo-item-elem nk-todo-item-action">
                                                                        <div class="d-flex align-items-center justify-content-end">
                                                                            <div class="gap-col"><a href="#" class="btn btn-sm btn-icon btn-zoom"><em class="icon ni ni-list-check"></em></a></div>
                                                                            <div class="gap-col"><a href="#" class="btn btn-sm btn-icon btn-zoom"><em class="icon ni ni-edit"></em></a></div>
                                                                            <div class="gap-col"><a href="#" class="btn btn-sm btn-icon btn-zoom"><em class="icon ni ni-trash"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- task lists -->
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <div class="nk-todo-head-pagination">
                                                        <ul class="nk-todo-head-nav">
                                                            <li class="nk-todo-toggle"><button class="btn btn-md btn-zoom btn-icon toggle-todo-aside" data-target="todoAside" data-parent=""><em class="icon ni ni-menu-right"></em></button>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="nk-todo-list" data-simplebar>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>








                        <div class="modal fade" id="addTasksModal" tabindex="-1" aria-labelledby="addTasksModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="addTasksModalLabel">Create Task</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#">
                                            <div class="row g-3">
                                                <div class="col-lg-12">
                                                    <div class="form-group"><label class="form-label">Task title</label>
                                                        <div class="form-control-wrap"><input type="text" class="form-control" placeholder="Task title"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group"><label class="form-label">Assigned To</label>
                                                        <div class="form-control-wrap"><select class="js-select" data-sort="false">
                                                                <option value="">Select a user</option>
                                                                <option value="1">Alex Smith</option>
                                                                <option value="2">Kevin Martin</option>
                                                                <option value="3">Kamran Ahmed</option>
                                                            </select></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group"><label class="form-label">Due Date</label>
                                                        <div class="form-control-wrap"><input placeholder="dd/mm/yyyy" type="text" class="form-control js-datepicker" autocomplete="off" id="due-date"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group"><label class="form-label">Status</label>
                                                        <div class="form-control-wrap"><select class="js-select" data-sort="false">
                                                                <option value="">Select a status</option>
                                                                <option value="1">New</option>
                                                                <option value="2">Open</option>
                                                                <option value="3">Pending</option>
                                                                <option value="4">Closed</option>
                                                            </select></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group"><label class="form-label">Priority</label>
                                                        <div class="form-control-wrap"><select class="js-select" data-sort="false">
                                                                <option value="">Select a priority</option>
                                                                <option value="1">Medium</option>
                                                                <option value="2">Low</option>
                                                                <option value="3">High</option>
                                                                <option value="4">Urgent</option>
                                                            </select></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="d-flex gap g-2">
                                                        <div class="gap-col"><button class="btn btn-primary" type="submit">Add Task</button>
                                                        </div>
                                                        <div class="gap-col"><button type="button" class="btn border-0" data-bs-dismiss="modal">Discard</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="tab-pane show " id="leaves" tabindex="0">
                            <div class="card card-gutter-md">
                                <div class="tab-pane show " id="projects" tabindex="0">

                                    <div class="nk-content">
                                        <div class="nk-content-inner">
                                            <div class="nk-content-body">
                                                <div class="nk-block-head">
                                                    <div class="nk-block-head-between flex-wrap gap g-1">



                                                        <div class="nk-head-content">
                                                            <ul class="d-flex gap-2">
                                                                <li><a href="#" class="btn btn-md d-md-none btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal"><span>Add</span></a></li>
                                                                <li><button class="btn btn-primary"><em class="icon ni ni-inbox-in-fill"></em>&nbsp;Export</button></li>
                                                                <li> <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#reqleave"><em class="icon ni ni-plus"></em> &nbsp; Request Leave</button></li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                    </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="nk-block">
                                                <table class="table">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th class="tb-col"><span class="overline-title">S.No</span></th>
                                                            <th class="tb-col"><span class="overline-title">Leave Requested By</span></th>
                                                            <th class="tb-col"><span class="overline-title">Leave Approved By</span></th>
                                                            <th class="tb-col"><span class="overline-title">Leave Start Date</span></th>
                                                            <th class="tb-col"><span class="overline-title">Leave End Date</span></th>
                                                            <th class="tb-col"><span class="overline-title">Status</span></th>
                                                            <th class="tb-col"><span class="overline-title">Action</span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="tb-col">1</td>

                                                            <td class="tb-col">
                                                                <div class="media-group">
                                                                    <div class="media-text">Jenish Limbu</div>
                                                                </div>
                                                            </td>

                                                            <td class="tb-col"><a href="user-profile.html" class="title">Raju Shrestha</a></td>



                                                            <td class="tb-col">2022/04/25</td>

                                                            <td class="tb-col">2022/04/25</td>

                                                            <td class="tb-col">

                                                                <span class="badge text-bg-success-soft">Approved</span>


                                                            </td>

                                                            <td>
                                                                <div class="dropdown"><a href="#" class="btn btn-sm btn-icon btn-zoom me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                                        <div class="dropdown-content py-1">
                                                                            <ul class="link-list link-list-hover-bg-primary link-list-md">
                                                                                <li><a href="user-edit.html"><em class="icon ni ni-edit"></em><span>Public Gantt Chart</span></a>
                                                                                </li>
                                                                                <li><a href="user-edit.html"><em class="icon ni ni-trash"></em><span>Public Task Board</span></a>
                                                                                </li>
                                                                                <li><a href="user-profile.html"><em class="icon ni ni-eye"></em><span>View
                                                                                            Details</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="tab-pane show " id="timelogs" tabindex="0">
                            <div class="card card-gutter-md">
                                <div class="nk-content">

                                    <div class="nk-content-inner">
                                        <div class="nk-content-body">
                                            <div class="nk-block-head">
                                                <div class="nk-block-head-between flex-wrap gap g-2">

                                                    <div class="nk-block-head-content">
                                                        <ul class="d-flex">
                                                            <button class="btn btn-primary btn-add" data-bs-toggle="offcanvas" data-bs-target="#addOffcanvas"> <em class="icon ni ni-plus"></em>Add Timelog</button>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>


                                            <table class="datatable-init table" data-nk-container="table-responsive">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th class="tb-col"><span class="overline-title">S.N.</span></th>

                                                        <th class="tb-col"><span class="overline-title">Estimate Time</span></th>
                                                        <th class="tb-col"><span class="overline-title">Start Date</span></th>
                                                        <th class="tb-col"><span class="overline-title">End Date</span></th>

                                                        <th class="tb-col"><span class="overline-title">status</span></th>
                                                        <th class="tb-col" data-sortable="false"><span class="overline-title">Action</span></th>
                                                    </tr>
                                                </thead>

                                            </table>
                                            {{-- Add Modal --}}
                                            <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                                                <div class="offcanvas-header border-bottom border-light">
                                                    <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Timelog</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                                                <div class="offcanvas-body" data-simplebar>
                                                    <div class="card h-100">
                                                        <div class="card-body">
                                                            <form>
                                                                <input type="hidden" name="_token" value="vwADvyetHVewekrMj3k7Bpg4D9XdaetgYlYpUR6U">
                                                                <div class="row">
                                                                    <div class="col-lg-6"> <label for="projectName" class="form-label col-form-label"> Project Name </label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" id="projectName" placeholder="" name="projectName" class="form-control " value="">
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-lg-6"> <label for="projectTask" class="form-label col-form-label"> Project Task </label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" id="projectTask" placeholder="" name="projectTask" class="form-control " value="">
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-lg-4"> <label for="projectEstimateTime" class="form-label col-form-label"> Project Estimate Time </label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="time" id="projectEstimateTime" placeholder="" name="projectEstimateTime" class="form-control " value="">
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-lg-4"> <label for="projectStartDate" class="form-label col-form-label"> Project Start Date </label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="date" id="projectStartDate" placeholder="" name="projectStartDate" class="form-control " value="">
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-lg-4"> <label for="projectEndDate" class="form-label col-form-label"> Project End Date </label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="date" id="projectEndDate" placeholder="" name="projectEndDate" class="form-control " value="">
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-lg-6"> <label for="alias" class="form-label col-form-label"> Alias </label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" id="alias" placeholder="" name="alias" class="form-control " value="">
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <label for="status" class="form-label col-form-label"> Status </label>
                                                                        <div class="form-control-wrap">
                                                                            <select class="form-select " name="status" id="status" aria-label="Default select example">
                                                                                <option value="1" selected>Active</option>
                                                                                <option value="0">Inactive</option>
                                                                            </select>
                                                                        </div>


                                                                    </div>
                                                                    <div class="col-lg-12"> <label for="remarks" class="form-label col-form-label"> Remarks </label>
                                                                        <div class="form-control-wrap">
                                                                            <?php createTextarea('remarks', 'remarks', '3', '') ?>
                                                                        </div>

                                                                    </div> <br>
                                                                    <div class="col-md-12"> <button class="mt-3 btn btn-primary  btn-primary" type="submit">
                                                                            Submit </button>
                                                                    </div>
                                                            </form>
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



                    <div class="tab-pane show " id="travel" tabindex="0">
                        <div class="card card-gutter-md">
                            <div class="nk-content">

                                <div class="nk-content-inner">
                                    <div class="nk-content-body">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-between flex-wrap gap g-2">
                                                <div class="nk-block-head-content">
                                                    <ul class="d-flex">
                                                        <button class="btn btn-primary btn-add" data-bs-toggle="offcanvas" data-bs-target="#travelRequest"> <em class="icon ni ni-plus"></em>Add Travel Request</button>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-block">

                                            <table class="datatable-init table" data-nk-container="table-responsive">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th class="tb-col"><span class="overline-title">S.N.</span></th>
                                                        <th class="tb-col"><span class="overline-title">traveller Name</span></th>
                                                        <th class="tb-col"><span class="overline-title">destination</span></th>
                                                        <th class="tb-col"><span class="overline-title">date</span></th>
                                                        <th class="tb-col"><span class="overline-title">time</span></th>

                                                        <th class="tb-col"><span class="overline-title">totalDays</span></th>

                                                        <th class="tb-col"><span class="overline-title">status</span></th>
                                                        <th class="tb-col" data-sortable="false"><span class="overline-title">Action</span></th>
                                                    </tr>
                                                </thead>

                                            </table>
                                            {{-- Add Modal --}}
                                            <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="travelRequest">
                                                <div class="offcanvas-header border-bottom border-light">
                                                    <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Travel Request</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>

                                                <div class="offcanvas-body" data-simplebar>


                                                    <form>
                                                        <input type="hidden" name="_token" value="rZd4xWwWDPDCfCIIXQYE1NjZrYBtUiWH4IOMpGG0">

                                                        <div class="row">

                                                            <div class="col-lg-6"> <label for="travellerName" class="form-label col-form-label"> Traveller Name </label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" id="travellerName" placeholder="" name="travellerName" class="form-control " value="">
                                                                </div>

                                                            </div>

                                                            <div class="col-lg-6"> <label for="destination" class="form-label col-form-label"> Destination </label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" id="destination" placeholder="" name="destination" class="form-control " value="">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6"> <label for="date" class="form-label col-form-label"> Date </label>
                                                                <div class="form-control-wrap">
                                                                    <input type="date" id="date" placeholder="" name="date" class="form-control " value="">
                                                                </div>

                                                            </div>

                                                            <div class="col-lg-6"> <label for="time" class="form-label col-form-label"> Time </label>
                                                                <div class="form-control-wrap">
                                                                    <input type="time" id="time" placeholder="" name="time" class="form-control " value="">
                                                                </div>

                                                            </div>





                                                            <div class="col-lg-4"> <label for="totalDays" class="form-label col-form-label"> Total Days </label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" id="totalDays" placeholder="" name="totalDays" class="form-control " value="">
                                                                </div>

                                                            </div>

                                                            <div class="col-lg-4"> <label for="alias" class="form-label col-form-label"> Alias </label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" id="alias" placeholder="" name="alias" class="form-control " value="">
                                                                </div>

                                                            </div>

                                                            <div class="col-lg-4">
                                                                <label for="status" class="form-label col-form-label"> Status </label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select " name="status" id="status" aria-label="Default select example">
                                                                        <option value="1" selected>Active</option>
                                                                        <option value="0">Inactive</option>
                                                                    </select>
                                                                </div>


                                                            </div>

                                                            <div class="col-lg-12"> <label for="remarks" class="form-label col-form-label"> Remarks </label>
                                                                <div class="form-control-wrap">
                                                                    {{createTextarea('','remarks','3','')}}
                                                                </div>

                                                            </div> <br>

                                                            <div class="col-md-12"> <button class="mt-3 btn btn-primary  btn-primary" type="submit">
                                                                    Submit </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="tab-pane show " id="appreciation" tabindex="0">
                        <div class="card card-gutter-md">
                            <div class="nk-content">
                                <div class="nk-content-inner">
                                    <div class="nk-content-body">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-between flex-wrap gap g-2">
                                                <div class="nk-block-head-content">
                                                    <ul class="d-flex">
                                                        <button class="btn btn-primary btn-add" data-bs-toggle="offcanvas" data-bs-target="#addAppreciation"> <em class="icon ni ni-plus"></em>Add Appreciation</button>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-block">

                                            <table class="datatable-init table" data-nk-container="table-responsive">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th class="tb-col"><span class="overline-title">S.N.</span></th>
                                                        <th class="tb-col"><span class="overline-title">Title</span></th>
                                                        <th class="tb-col"><span class="overline-title">Type</span></th>
                                                        <th class="tb-col"><span class="overline-title">Appreciated By</span></th>
                                                        <th class="tb-col"><span class="overline-title">Recieved By</span></th>
                                                        <!-- <th class="tb-col"><span class="overline-title">Recieved On</span></th>
<th class="tb-col"><span class="overline-title">Approved On</span></th> -->
                                                        <!-- <th class="tb-col"><span class="overline-title">alias</span></th> -->
                                                        <th class="tb-col"><span class="overline-title">status</span></th>
                                                        <th class="tb-col" data-sortable="false"><span class="overline-title">Action</span></th>
                                                    </tr>
                                                </thead>

                                            </table>
                                            {{-- Add Modal --}}
                                            <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addAppreciation">
                                                <div class="offcanvas-header border-bottom border-light">
                                                    <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Travel Request</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                                                <div class="offcanvas-body" data-simplebar>
                                                    <form method="POST" action="#" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-lg-6">{{createText("appreciationTitle","Title","Appreciation Title")}}
                                                            </div>
                                                            <div class="col-lg-6">{{createText("appreciationType","appreciationType","Appreciation Type")}}
                                                            </div>
                                                            <div class="col-lg-6">{{createText("appreciatedBy","appreciatedBy","Appreciated By")}}
                                                            </div>
                                                            <div class="col-lg-6">{{createText("recievedBy","recievedBy","Recieved By")}}
                                                            </div>
                                                            <div class="col-lg-6">{{createDate("appreciationRecievedOn","appreciationRecievedOn","Recieved On", "", "", "")}}
                                                            </div>
                                                            <div class="col-lg-6">{{createDate("appreciatioanApprovedOn","appreciatioanApprovedOn","Approved On", "", '', '')}}
                                                            </div>
                                                            <div class="col-lg-6">{{createText("alias","alias","Alias")}}
                                                            </div>
                                                            <div class="col-lg-6">{{createLabel('status', 'form-label col-form-label', 'Status')}}{{CreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
                                                            </div>
                                                            <div class="col-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks","","")}}
                                                            </div> <br>
                                                            <div class="col-md-12"><?php createButton("btn-primary mt-3", "", "Submit"); ?>
                                                            </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






                <div class="tab-pane show " id="shiftroaster" tabindex="0">
                    <div class="card card-gutter-md">
                        <div class="nk-content">
                            <div class="nk-content-inner">
                                <div class="nk-content-body">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-between flex-wrap gap g-2">
                                            <div class="nk-block-head-content">
                                                <ul class="d-flex">
                                                    <button class="btn btn-primary btn-add" data-bs-toggle="offcanvas" data-bs-target="#addShiftroaster"> <em class="icon ni ni-plus"></em>Add Shift Roaster</button>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-block">

                                        <table class="datatable-init table" data-nk-container="table-responsive">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="tb-col"><span class="overline-title">S.N.</span></th>
                                                    <th class="tb-col"><span class="overline-title">Roster Id</span></th>
                                                    <th class="tb-col"><span class="overline-title">From Date</span></th>
                                                    <th class="tb-col"><span class="overline-title">To Date</span></th>
                                                    <th class="tb-col"><span class="overline-title">shift</span></th>
                                                    <th class="tb-col"><span class="overline-title">alias</span></th>
                                                    <th class="tb-col"><span class="overline-title">status</span></th>
                                                    <th class="tb-col" data-sortable="false"><span class="overline-title">Action</span></th>
                                                </tr>
                                            </thead>
                                        </table>
                                        {{-- Add Modal --}}
                                        <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addShiftroaster">
                                            <div class="offcanvas-header border-bottom border-light">
                                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Shift Roaster</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body" data-simplebar>
                                                <div class="card-body">
                                                    <form method="POST" action="#" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-lg-6">{{createText("rosterName_id","rosterName_id","Roster Id")}}
                                                            </div>
                                                            <div class="col-lg-6">{{createDate("shiftFromDate","shiftFromDate","From Date", "", "", "")}}
                                                            </div>
                                                            <div class="col-lg-6">{{createDate("shiftToDate","shiftToDate","To Date", "", "", "")}}
                                                            </div>
                                                            <div class="col-lg-6">{{createText("shift","shift","Shift")}}
                                                            </div>
                                                            <div class="col-lg-6">{{createText("alias","alias","Alias")}}
                                                            </div>
                                                            <div class="col-lg-6">{{createLabel("status", "form-label col-form-label", "Status")}}{{CreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
                                                            </div>
                                                            <div class="col-12">{{createLabel("remarks", "form-label col-form-label", "Remarks")}}{{createTextArea("remarks","remarks","remarks","", "")}}
                                                            </div> <br>
                                                            <div class="col-md-12"><?php createButton("mt-3 btn-primary", "", "Submit"); ?>
                                                            </div>
                                                    </form>
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




            <div class="tab-pane show " id="permission" tabindex="0">
                <div class="card card-gutter-md">
                    <div class="card-row">
                        <div class="nk-content">
                            <div class="nk-content-inner">
                                <div class="nk-content-body">
                                    <div class="nk-block">
                                        <table class="datatable-init table" data-nk-container="table-responsive">
                                            <thead>
                                                <tr>
                                                    <th><span class="overline-title">Module</span></th>
                                                    <th><span class="overline-title">ADD</span></th>
                                                    <th><span class="overline-title">VIEW</span></th>
                                                    <th><span class="overline-title">EDIT</span></th>
                                                    <th><span class="overline-title">DELETE</span></th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Client</td>
                                                    <td>
                                                        <div class="form-group">
                                                        <div class="form-control-wrap"> <select class="form-select" id="exampleFormSelect1" aria-label="Default select example">
                                                                    <option selected>Open this select menu</option>
                                                                    <option value="1">None</option>
                                                                    <option value="2">All</option>
                                                                    <option value="3">Only Selected</option>
                                                                </select> </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                        <div class="form-control-wrap"> <select class="form-select" id="exampleFormSelect1" aria-label="Default select example">
                                                                    <option selected>Open this select menu</option>
                                                                    <option value="1">None</option>
                                                                    <option value="2">All</option>
                                                                    <option value="3">Only Selected</option>
                                                                </select> </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                        <div class="form-control-wrap"> <select class="form-select" id="exampleFormSelect1" aria-label="Default select example">
                                                                    <option selected>Open this select menu</option>
                                                                    <option value="1">None</option>
                                                                    <option value="2">All</option>
                                                                    <option value="3">Only Selected</option>
                                                                </select> </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                        <div class="form-control-wrap"> <select class="form-select" id="exampleFormSelect1" aria-label="Default select example">
                                                                    <option selected>Open this select menu</option>
                                                                    <option value="1">None</option>
                                                                    <option value="2">All</option>
                                                                    <option value="3">Only Selected</option>
                                                                </select> </div>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>Employee</td>
                                                    <td>
                                                        <div class="form-group">
                                                        <div class="form-control-wrap"> <select class="form-select" id="exampleFormSelect1" aria-label="Default select example">
                                                                    <option selected>Open this select menu</option>
                                                                    <option value="1">None</option>
                                                                    <option value="2">All</option>
                                                                    <option value="3">Only Selected</option>
                                                                </select> </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                        <div class="form-control-wrap"> <select class="form-select" id="exampleFormSelect1" aria-label="Default select example">
                                                                    <option selected>Open this select menu</option>
                                                                    <option value="1">None</option>
                                                                    <option value="2">All</option>
                                                                    <option value="3">Only Selected</option>
                                                                </select> </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                        <div class="form-control-wrap"> <select class="form-select" id="exampleFormSelect1" aria-label="Default select example">
                                                                    <option selected>Open this select menu</option>
                                                                    <option value="1">None</option>
                                                                    <option value="2">All</option>
                                                                    <option value="3">Only Selected</option>
                                                                </select> </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                        <div class="form-control-wrap"> <select class="form-select" id="exampleFormSelect1" aria-label="Default select example">
                                                                    <option selected>Open this select menu</option>
                                                                    <option value="1">None</option>
                                                                    <option value="2">All</option>
                                                                    <option value="3">Only Selected</option>
                                                                </select> </div>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>HR</td>
                                                    <td>
                                                        <div class="form-group">
                                                        <div class="form-control-wrap"> <select class="form-select" id="exampleFormSelect1" aria-label="Default select example">
                                                                    <option selected>Open this select menu</option>
                                                                    <option value="1">None</option>
                                                                    <option value="2">All</option>
                                                                    <option value="3">Only Selected</option>
                                                                </select> </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                        <div class="form-control-wrap"> <select class="form-select" id="exampleFormSelect1" aria-label="Default select example">
                                                                    <option selected>Open this select menu</option>
                                                                    <option value="1">None</option>
                                                                    <option value="2">All</option>
                                                                    <option value="3">Only Selected</option>
                                                                </select> </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                        <div class="form-control-wrap"> <select class="form-select" id="exampleFormSelect1" aria-label="Default select example">
                                                                    <option selected>Open this select menu</option>
                                                                    <option value="1">None</option>
                                                                    <option value="2">All</option>
                                                                    <option value="3">Only Selected</option>
                                                                </select> </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                        <div class="form-control-wrap"> <select class="form-select" id="exampleFormSelect1" aria-label="Default select example">
                                                                    <option selected>Open this select menu</option>
                                                                    <option value="1">None</option>
                                                                    <option value="2">All</option>
                                                                    <option value="3">Only Selected</option>
                                                                </select> </div>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>Manager</td>
                                                    <td>
                                                        <div class="form-group">
                                                        <div class="form-control-wrap"> <select class="form-select" id="exampleFormSelect1" aria-label="Default select example">
                                                                    <option selected>Open this select menu</option>
                                                                    <option value="1">None</option>
                                                                    <option value="2">All</option>
                                                                    <option value="3">Only Selected</option>
                                                                </select> </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                        <div class="form-control-wrap"> <select class="form-select" id="exampleFormSelect1" aria-label="Default select example">
                                                                    <option selected>Open this select menu</option>
                                                                    <option value="1">None</option>
                                                                    <option value="2">All</option>
                                                                    <option value="3">Only Selected</option>
                                                                </select> </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                        <div class="form-control-wrap"> <select class="form-select" id="exampleFormSelect1" aria-label="Default select example">
                                                                    <option selected>Open this select menu</option>
                                                                    <option value="1">None</option>
                                                                    <option value="2">All</option>
                                                                    <option value="3">Only Selected</option>
                                                                </select> </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                        <div class="form-control-wrap"> <select class="form-select" id="exampleFormSelect1" aria-label="Default select example">
                                                                    <option selected>Open this select menu</option>
                                                                    <option value="1">None</option>
                                                                    <option value="2">All</option>
                                                                    <option value="3">Only Selected</option>
                                                                </select> </div>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>Content Writer</td>
                                                    <td>
                                                        <div class="form-group">
                                                        <div class="form-control-wrap"> <select class="form-select" id="exampleFormSelect1" aria-label="Default select example">
                                                                    <option selected>Open this select menu</option>
                                                                    <option value="1">None</option>
                                                                    <option value="2">All</option>
                                                                    <option value="3">Only Selected</option>
                                                                </select> </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                        <div class="form-control-wrap"> <select class="form-select" id="exampleFormSelect1" aria-label="Default select example">
                                                                    <option selected>Open this select menu</option>
                                                                    <option value="1">None</option>
                                                                    <option value="2">All</option>
                                                                    <option value="3">Only Selected</option>
                                                                </select> </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                        <div class="form-control-wrap"> <select class="form-select" id="exampleFormSelect1" aria-label="Default select example">
                                                                    <option selected>Open this select menu</option>
                                                                    <option value="1">None</option>
                                                                    <option value="2">All</option>
                                                                    <option value="3">Only Selected</option>
                                                                </select> </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-control-wrap"> <select class="form-select" id="exampleFormSelect1" aria-label="Default select example">
                                                                    <option selected>Open this select menu</option>
                                                                    <option value="1">None</option>
                                                                    <option value="2">All</option>
                                                                    <option value="3">Only Selected</option>
                                                                </select> </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxl" id="addOffcanvas">
                <div class="offcanvas-header border-bottom border-dark">
                    <h5 class="offcanvas-title" id="offcanvasTopLabel">Filters</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body" data-simplebar>
                    <div class="nk-block">
                        <form action="#">
                            <div class="row g-gs">
                                <div class="col-lg-12">
                                    <?php createLabel('projectCategory', 'form-label', 'Project Category') ?>
                                    <?php createSelect('projectCategory', 'projectCategory', '', 'Project Category', ['category1', 'category2']) ?>
                                </div>
                                <div class="col-lg-12">
                                    <?php createLabel('projectDepartment', 'form-label', 'Project Department') ?>
                                    <?php createSelect('projectDepartment', 'projectDepartment', '', 'Project Department', ['category1', 'category2']) ?>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group"> <label class="form-label">Select Members</label>
                                        <div class="form-control-wrap">
                                            <select class="js-select" id="exampleFormSelectMultiple" multiple aria-label="multiple select example" data-search="true">
                                                <option value="1">PayPal</option>
                                                <option value="2">Bank Transfer</option>
                                                <option value="3">Skrill</option>
                                                <option value="4">Moneygram</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <?php createLabel('projectPinned', 'form-label', 'Project Pinned') ?>
                                    <?php createSelect('projectPinned', 'projectPinned', '', 'Project Pinned', ['category1', 'category2']) ?>
                                </div>

                                <div class="col-lg-12">
                                    <hr>
                                    <?php createButton('btn btn-primary', '', 'Clear') ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <div id="project" class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg">
                <div class="offcanvas-header border-bottom border-dark">
                    <h5 class="offcanvas-title" id="offcanvasTopLabel">Filters</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body" data-simplebar>
                    <div class="nk-block">
                        <form action="#">
                            <div class="row g-gs">
                                <div class="col-lg-6">
                                    <?php createText('projectName', 'projectName', 'Project Name', '', '', '') ?>
                                </div>
                                <div class="col-lg-6">
                                    <?php createText('projectId', 'projectId', 'Project ID', '', '', '') ?>
                                </div>
                                <div class="col-lg-6">
                                    <?php createLabel('projectCategory', 'form-label', 'Project Category') ?>
                                    <?php createSelect('projectCategory', 'projectCategory', '', 'Project Category', ['category1', 'category2']) ?>
                                </div>
                                <div class="col-lg-6">
                                    <?php createLabel('projectDepartment', 'form-label', 'Project Department') ?>
                                    <?php createSelect('projectDepartment', 'projectDepartment', '', 'Project Department', ['category1', 'category2']) ?>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Assigned To</label>
                                    <div class="form-control-wrap">
                                        <select class="js-select" id="exampleFormSelectMultiple" multiple aria-label="multiple select example" data-search="true">
                                            <option value="1">PayPal</option>
                                            <option value="2">Bank Transfer</option>
                                            <option value="3">Skrill</option>
                                            <option value="4">Moneygram</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <?php createLabel('projectDeadline', 'form-label', 'Project Deadline') ?>
                                    <?php createDate('projectDeadline', 'projectDeadline', 'Deadline', '', '', '') ?>
                                </div>

                                <div class="col-lg-12">
                                    <hr>
                                    <?php createButton('btn btn-primary', '', 'Submit') ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <div id="reqleave" class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg">
                <div class="offcanvas-header border-bottom border-dark">
                    <h5 class="offcanvas-title" id="offcanvasTopLabel">Filters</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body" data-simplebar>
                    <div class="nk-block">
                        <form action="#">
                            <div class="row g-gs">

                                <div class="col-lg-6">
                                    <?php createText('leaveRequestedBy', 'leaveRequestedBy', 'Leave Requested By', '', '', '') ?>
                                </div>
                                <div class="col-lg-6">
                                    <?php createText('leaveRequestedBy', 'leaveRequestedBy', 'Leave Approved By', '', '', '') ?>
                                </div>
                                <div class="col-lg-3">
                                    <?php createDate('leaveStartDate', 'leaveStartDate', 'Leave Start Date', '', '', '') ?>
                                </div>
                                <div class="col-lg-3">
                                    <?php createDate('leaveEndDate', 'leaveEndDate', 'Leave End Date', '', '', '') ?>
                                </div>
                                <div class="col-lg-3">
                                    <?php createLabel('leaveType', 'form-label', 'Leave Type') ?>
                                    <?php createSelect('leaveType', 'leaveType', '', 'Leave Type', ['category1', 'category2']) ?>
                                </div>
                                <div class="col-lg-3">
                                    <?php createLabel('leaveStatus', 'form-label', 'Leave Status') ?>
                                    <?php createSelect('leaveStatus', 'leaveStatus', '', 'Leave Status', ['category1', 'category2']) ?>
                                </div>

                                <div class="col-lg-12">
                                    <?php createLabel('remarks', 'form-label', 'Remarks') ?>
                                    <?php createTextarea('', 'remarks', '3', '') ?>
                                </div>

                                <div class="col-lg-12">
                                    <hr>
                                    <?php createButton('btn btn-primary', '', 'Submit') ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            @include("partials.footer")