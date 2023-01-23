
<script src="{{asset('assets/js/bundle.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>


<div class="offcanvas offcanvas-end offcanvas-size-lg" id="notificationOffcanvas">
    <div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">Recent Notification</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <ul class="nk-schedule">
            <li class="nk-schedule-item">
                <div class="nk-schedule-item-inner">
                    <div class="nk-schedule-symbol active"></div>
                    <div class="nk-schedule-content"><span class="smaller">2:12 PM</span>
                        <div class="h6">Added 3 New Images</div>
                        <ul class="d-flex flex-wrap gap g-2 py-2">
                            <li>
                                <div class="media media-xxl"><img src="images/product/a.jpg" alt="" class="img-thumbnail"></div>
                            </li>
                            <li>
                                <div class="media media-xxl"><img src="images/product/b.jpg" alt="" class="img-thumbnail"></div>
                            </li>
                            <li>
                                <div class="media media-xxl"><img src="images/product/c.jpg" alt="" class="img-thumbnail"></div>
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
                                        <div class="media rounded-0"><img src="images/icon/file-type-pdf.svg" alt=""></div>
                                        <div class="media-text ms-1"><a href="#" class="title">Modern Designs Pattern</a><span class="text smaller">1.6.mb</span></div>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <div class="media-group">
                                        <div class="media rounded-0"><img src="images/icon/file-type-doc.svg" alt=""></div>
                                        <div class="media-text ms-1"><a href="#" class="title">Cpanel Upload Guidelines</a><span class="text smaller">18kb</span></div>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <div class="media-group">
                                        <div class="media rounded-0"><img src="images/icon/file-type-code.svg" alt=""></div>
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
                    <div class="nk-schedule-content"><span class="smaller">3:23 PM</span>
                        <div class="h6">Assigned you to new database design project</div>
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
            <li class="nk-schedule-item">
                <div class="nk-schedule-item-inner">
                    <div class="nk-schedule-symbol active"></div>
                    <div class="nk-schedule-content"><span class="smaller">2:45 PM</span>
                        <div class="h6">Project status updated successfully</div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<!-- Start Timer -->
<div class="modal fade " id="startTimer" data-bs-keyboard="false" tabindex="-1" aria-labelledby="scrollableLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-top">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollableLabel"> <em class="icon ni ni-clock"></em> Start Timer</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"> 
                
                <div class="col-lg-12">
                    <div class="form-group">
                    <?php createLabel('project', 'form-label', 'Project'); ?>
                    
                    <?php createSelect('project', 'project', '', '', ['Select One', 'Male', 'Female', 'Other']); ?>
                    </div>
                </div>
<br>
                <div class="col-lg-12">
                    <div class="form-group">
                    <?php createLabel('task', 'form-label', 'Task'); ?>
                    
                    <?php createSelect('task', 'task', '', '', ['Select One', 'Male', 'Female', 'Other']); ?>
                    </div>
                </div>

                <br>
                <div class="col-lg-12">
                    <div class="form-group">
                       
                        <div class="form-control-wrap">
                            <?php createInput('text', 'memo', 'memo', 'Memo', 'form-label', '', '', 'Memo'); ?>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer"><button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-danger"><em class="icon ni ni-play-fill"></em> Start Timer</button>
            </div>
        </div>
    </div>
</div>
<!-- End Timer -->

<div class="offcanvas offcanvas-end offcanvas-size-lg" id="dashboardOffcanvas">
    <div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">Dashboard Widgets</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="row">
            <form class="row ">
            <div class="col-sm-6 col-lg-6">
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault"> Profile </label></div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault"> Shift Schedule </label></div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault"> Notices </label></div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault"> Tasks </label></div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault"> Projects</label></div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault"> My Task</label></div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault"> My Calender</label></div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault"> Week Timelogs</label></div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault"> One Leave Today</label></div>
            </div>     
            <div class="col-sm-6 col-lg-6">
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault"> Leads</label></div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault"> Total Clients</label></div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault">  Total Employees</label></div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault">  Total Projects</label></div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault">  Due Invoices</label></div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault"> Hours Logged</label></div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault"> Pending Tasks</label></div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault"> Today Attendance</label></div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault"> Leaves Calendar</label></div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault"> Overdue Tasks</label></div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault"> Pending FollowUp</label></div>
            </div>
            
            
            <div class="col-sm-6 col-lg-6">
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault"> User Activity Timeline</label></div>
            </div>
            
            <div class="col-sm-6 col-lg-6">
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault"> Timelogs</label></div>
            </div>
           
            <div class="col-lg-12"><button class="btn btn-primary" type="submit">Update Profile</button></div>
            </form>
            
            
            


        </div>
               

        
    </div>
</div>
