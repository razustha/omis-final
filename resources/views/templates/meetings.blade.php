
@include("partials.header")
@include("partials.sidebar")
<div class="nk-content">
                    <div class="container">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head">
     <div class="nk-block-head-between flex-wrap gap g-2">
        <div class="nk-block-head-content">
            <h2 class="nk-block-title">Add Meeting</h1>
                <nav>
                    <ol class="breadcrumb breadcrumb-arrow mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Event and Meetings</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Meetings
                        </li>
                    </ol>
                </nav>
        </div>
        <div class="nk-block-head-content">
            <ul class="d-flex">
                <li><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <em class="icon ni ni-plus"></em>Add Meeting</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add a Meeting</h5> <button
                                        type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="nk-block-head-content nk-block-head-tools">
                        <ul class="">
                          <li>
                             <div class="modal-body">
                                    <div class="form-group"> <label for="meetingTitle"
                                            class="form-label">Meeting Title</label>
                                        <div class="form-control-wrap"> 
                                            <?php createInput("text","meetingTitle","meetingTitle","","","","Meeting Title");?>
                                        </div>
                                    </div>
                                    <div class="form-group"> <label for="meetingDate"
                                            class="form-label">Meeting Date</label>
                                        <div class="form-control-wrap"><?php createInput("date","meetingDate","meetingDate","","","","Meeting Date");?>
                                        </div>
                                    </div>
                                    <div class="form-group"> <label for="meetingTime"
                                            class="form-label">Meeting time</label>
                                            <?php createInput("time","meetingTime","meetingTime","","","","Meeting Time");?>
                                        </div>
                      
                                    <div class="form-group">
                                        <label class="form-label">Select Company</label>
                                        <div class="form-control-wrap"> <select class="js-select" data-search="true"
                                                data-sort="false">
                                                <option value="">Select Company</option>
                                                <option value="1">PayPal</option>
                                                <option value="2">Bank Transfer</option>
                                                <option value="3">Skrill</option>
                                                <option value="4">Moneygram</option>
                                            </select> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Select Department</label>
                                        <div class="form-control-wrap"> <select class="js-select" data-search="true"
                                                data-sort="false">
                                                <option value="">Select Department</option>
                                                <option value="1">PayPal</option>
                                                <option value="2">Bank Transfer</option>
                                                <option value="3">Skrill</option>
                                                <option value="4">Moneygram</option>
                                            </select> </div>
                                    </div>

                                    <div class="form-group">
                                    <label class="form-label">Meeting Note</label>
                                     <?php createTextarea('','meetingNote','3','') ?>
                                    </div>

                                </div>
                                <div class="modal-footer"> <button type="button" class="btn btn-sm btn-secondary"
                                        data-bs-dismiss="modal">Close</button> <button type="button"
                                        class="btn btn-sm btn-primary">Save changes</button> </div>
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
<div class="nk-block">
    <div class="card">
        <table class="datatable-init table" data-nk-container="table-responsive">
            <thead class="table-light">
                <tr>
                    <th class="tb-col"><span class="overline-title">Company</span></th>
                    <th class="tb-col"><span class="overline-title">Department</span>
                    </th>
                    <th class="tb-col"><span class="overline-title">Meeting Title</span></th>
                    <th class="tb-col tb-col-xl"><span class="overline-title">Meeting Date</span></th>
                    <th class="tb-col tb-col-xxl"><span class="overline-title">Meeting Time</span></th>
                    <th class="tb-col tb-col-end" data-sortable="false"><span class="overline-title">Action</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tb-col">
                        <div class="media-group">

                            <div class="media-text"><a href="user-profile.html" class="title">Florenza Desporte</a><span
                                    class="small text">florenza@gmail.com</span></div>
                        </div>
                    </td>
                    <td class="tb-col">Administrator</td>
                    <td class="tb-col">Basic</td>
                    <td class="tb-col tb-col-xl">Auto Debit</td>
                    <td class="tb-col tb-col-xxl">2022/04/25</td>
                    <td class="tb-col tb-col-end">
                        <div class="dropdown"><a href="#" class="btn btn-sm btn-icon btn-zoom me-n1"
                                data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                <div class="dropdown-content py-1">
                                    <ul class="link-list link-list-hover-bg-primary link-list-md">
                                        <li><a href="user-edit.html"><em
                                                    class="icon ni ni-edit"></em><span>Edit</span></a>
                                        </li>
                                        <li><a href="user-edit.html"><em
                                                    class="icon ni ni-trash"></em><span>Delete</span></a>
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


@include("partials.footer")