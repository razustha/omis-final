<div class="nk-sidebar nk-sidebar-fixed is-theme" id="sidebar">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand"><a href="index-2.html" class="logo-link">
                <div class="logo-wrap">OMIS Projects</div>
            </a>
            <div class="nk-compact-toggle me-n1"><button
                    class="btn btn-md btn-icon text-light btn-no-hover compact-toggle"><em
                        class="icon off ni ni-chevrons-left"></em><em class="icon on ni ni-chevrons-right"></em></button>
            </div>
            <div class="nk-sidebar-toggle me-n1"><button
                    class="btn btn-md btn-icon text-light btn-no-hover sidebar-toggle"><em
                        class="icon ni ni-arrow-left"></em></button></div>
        </div>
    </div>
    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="#" class="nk-menu-link ">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li>

                           <li class="nk-menu-heading">
                    <h6 class="overline-title">Settings</h6>
                </li>
                <li class="nk-menu-item has-sub">
                    <a href="#" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon"><em class="icon ni ni-list-index-fill"></em></span>
                        <span class="nk-menu-text">User Management</span></a>
                    <ul class="nk-menu-sub">
                        <li class="nk-menu-item"><a href="employeeview" class="nk-menu-link"><span
                                    class="nk-menu-text">User</span></a></li>
                        <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                    class="nk-menu-text">Role</span></a></li>
                        <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                    class="nk-menu-text">Permissions</span></a></li>
                    </ul>
                </li>
                <li class="nk-menu-item ">
                    <a href="#" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                        <span class="nk-menu-text">Settings</span></a>
                </li>

                <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                        class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span><span
                        class="nk-menu-text">forms</span></a>
                <ul class="nk-menu-sub">
                    <li class="nk-menu-item"><a href="{{ route('form.create') }}" class="nk-menu-link"><span
                                class="nk-menu-text">crud</span></a></li>
                </ul>
            </li>
            <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                class="nk-menu-icon"><em class="icon ni ni-account-setting-fill"></em></span><span
                class="nk-menu-text">Master</span></a>
        <ul class="nk-menu-sub">
            <li class="nk-menu-item"><a href="{{ route('master.country.index') }}"
                    class="nk-menu-link"><span class="nk-menu-text">Countries </span></a></li>
            <li class="nk-menu-item"><a href="{{ route('master.state.index') }}"
                    class="nk-menu-link"><span class="nk-menu-text">state </span></a></li>
            <li class="nk-menu-item"><a href="{{ route('hr.organization.index') }}"
                    class="nk-menu-link"><span class="nk-menu-text">Organization</span></a></li>
            <li class="nk-menu-item"><a href="{{ route('master.district.index') }}"
                    class="nk-menu-link"><span class="nk-menu-text">District </span></a></li>
            <li class="nk-menu-item"><a href="{{ route('master.city.index') }}"
                    class="nk-menu-link"><span class="nk-menu-text">Cities </span></a></li>

            <li class="nk-menu-item"><a href="{{ route('master.nationality.index') }}"
                    class="nk-menu-link"><span class="nk-menu-text">Nationality </span></a></li>
            <li class="nk-menu-item"><a href="{{ route('master.policy.index') }}"
                    class="nk-menu-link"><span class="nk-menu-text">Policy </span></a></li>

            <li class="nk-menu-item"><a href="{{ route('master.organizationtype.index') }}"
                    class="nk-menu-link"><span class="nk-menu-text">Organization Type </span></a></li>
            {{-- <li class="nk-menu-item"><a href="{{ route('master.employee.index') }}"
                    class="nk-menu-link"><span class="nk-menu-text">Employee </span></a></li> --}}
            <li class="nk-menu-item"><a href="{{ route('master.organizationcategory.index') }}"
                    class="nk-menu-link"><span class="nk-menu-text">Organization Category </span></a>
            </li>
            <li class="nk-menu-item"><a href="{{ route('master.holidaytypes.index') }}"
                    class="nk-menu-link"><span class="nk-menu-text">Holiday Types </span></a></li>
            <li class="nk-menu-item"><a href="{{ route('master.fleet.index') }}"
                    class="nk-menu-link"><span class="nk-menu-text">Fleet Types</span></a></li>
            <li class="nk-menu-item"><a href="{{ route('master.traveltype.index') }}"
                    class="nk-menu-link"><span class="nk-menu-text">Travel Types</span></a></li>
            <li class="nk-menu-item"><a href="{{route ('master.departmenttype.index')}}" class="nk-menu-link"><span
                        class="nk-menu-text">Department Type</span></a></li>
            <li class="nk-menu-item"><a href="{{ route('master.employmentsizecategory.index') }}"
                    class="nk-menu-link"><span class="nk-menu-text">Employment Size
                        Category</span></a></li>
            <li class="nk-menu-item"><a href="{{ route('master.attendancefrom.index') }}"
                    class="nk-menu-link"><span class="nk-menu-text">Attendance Form</span></a></li>
            <li class="nk-menu-item"><a href="{{ route('master.jobtitle.index') }}"
                    class="nk-menu-link"><span class="nk-menu-text">Job Title</span></a></li>
        </ul>
    </li>
                <li class="nk-menu-heading">
                    <h6 class="overline-title">Applications Forms</h6>
                </li>

                    


                    
                    
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-account-setting-fill"></em></span><span
                                class="nk-menu-text">HR</span></a>
                        <ul class="nk-menu-sub">
                           
                            <li class="nk-menu-item"><a href="{{route('hr.employee.index')}}"
                                    class="nk-menu-link"><span class="nk-menu-text">Employee</span></a></li>
                          
                            <li class="nk-menu-item"><a href="{{ route('hr.leaveapplication.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Leaves </span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('hr.shiftroster.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Shift Roaster</span></a></li>
                       <li class="nk-menu-item"><a href="{{ route('hr.promotiondemotion.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Promotion/Demotion</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('hr.employeementtimeline.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Employment Timeline </span></a>
                            </li>
                            <li class="nk-menu-item"><a href="{{ route('hr.resignation.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Resignation</span></a>
                            </li>
                                               
                            <li class="nk-menu-item"><a href="{{ route('hr.mangeholiday.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Manage Holiday</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('hr.designation.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Designation</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('hr.department.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Department</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('hr.appreciation.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Appreciation</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('hr.complaints.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Complaints</span></a></li>
                            {{-- <li class="nk-menu-item"><a href="{{ route('hr.cms.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Cms</span></a></li> --}}
                                    <li class="nk-menu-item"><a href="{{ route('hr.transfer.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Transfer</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('hr.warnings.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Warnings</span></a></li>
                          
                             
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                        class="nk-menu-icon"><em class="icon ni ni-centos"></em></span><span
                        class="nk-menu-text">CRM</span></a>
                <ul class="nk-menu-sub">
                  
                    <li class="nk-menu-item"><a href="{{ route('crm.clients.index') }}"
                            class="nk-menu-link"><span class="nk-menu-text">Clients</span></a></li>
                    <li class="nk-menu-item"><a href="{{ route('crm.leads.index') }}"
                            class="nk-menu-link"><span class="nk-menu-text">Leads</span></a></li>
                </ul>
            </li>
            

            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                        class="nk-menu-icon"><em class="icon ni ni-calendar-alt"></em></span><span
                        class="nk-menu-text">Calender</span></a>
            </li>

                    <li class="nk-menu-item has-sub"><a href="#"
                                        class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-clock"></em></span><span
                                            class="nk-menu-text">TimeSheet</span></a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item"><a href="{{ route('hr.attendence.index') }}"
                                                class="nk-menu-link"><span class="nk-menu-text">Create Attendance
                                                </span></a></li>
                                        <li class="nk-menu-item"><a href="{{ route('hr.absentreason.index') }}"
                                                class="nk-menu-link"><span class="nk-menu-text">Absent Reason </span></a>
                                        </li>

                                        <li class="nk-menu-item"><a href="{{route('hr.latereasons.index')}}"
                                                class="nk-menu-link"><span class="nk-menu-text">Late Reason </span></a>
                                        </li>
                                    </ul>
                                </li>

                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-users"></em></span><span
                                class="nk-menu-text">Work</span></a>
                        <ul class="nk-menu-sub">
                         
                            <li class="nk-menu-item"><a href="{{ route('work.workprojects.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Projects</span></a></li>
                     
                            <li class="nk-menu-item"><a href="{{ route('work.tasks.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Tasks</span></a></li>
                     
                           
                            <li class="nk-menu-item"><a href="{{route('work.timelog.index')}}" class="nk-menu-link"><span
                                        class="nk-menu-text">Time Logs</span></a></li>
                        </ul>
                    </li>

                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-coin-eur"></em></span><span
                                class="nk-menu-text">Finance</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{ route('finance.proposal.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Proposal</span></a></li>
                            <li class="nk-menu-item"><a href="{{route('finance.estimates.index')}}"
                                    class="nk-menu-link"><span class="nk-menu-text">Estimates</span></a></li>
                         
                            <li class="nk-menu-item"><a href="{{ route('finance.financepay.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Payments</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('finance.creditnotes.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Credit Notes</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('finance.financeexpenses.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Expenses</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('finance.advancerequest.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Advance Request</span></a></li>
                         
                            <li class="nk-menu-item"><a href="{{ route('finance.cashrequest.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Cash Request</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('finance.expensesclaim.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Expenses Claim</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('finance.invoices.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Invoices</span></a></li>
                        </ul>
                    </li>
            
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-help-alt"></em></span><span
                                class="nk-menu-text">Notice Board</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{ route('notice.announcement.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Announcement</span></a></li>
                          
                            <li class="nk-menu-item"><a href="{{ route('notice.detailsview.index') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Details View</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('hr.overview.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Overview</span></a>
                            </li>
                        </ul>
                    </li>

                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-building-fill"></em></span><span
                                class="nk-menu-text">Assets</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{ route('assets.assestcategory.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Add Assets Category</span></a>
                            </li>
                            <li class="nk-menu-item"><a href="{{ route('assets.equipmentdemand.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Equipment Demand</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('assets.fixedassets.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Fixed Assets</span></a></li>
                        </ul>

                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-layers"></em></span><span
                                class="nk-menu-text">Payroll</span></a>
                        <ul class="nk-menu-sub">
                          
                        
                            <li class="nk-menu-item"><a href="{{route('payroll.newpayment.index')}}" class="nk-menu-link"><span
                                        class="nk-menu-text">New Payment</span></a></li>
                        </ul>
                    </li>

                    <!-- <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-package"></em></span><span
                                class="nk-menu-text">Forms</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Form Controls</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Form Select</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Date &amp; Time Picker</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Form Upload</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Input group</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Floating labels</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Checks and radios</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Form Range</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Form Validation</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Form Layout</span></a></li>
                            <li class="nk-menu-item has-sub"><a href="#"
                                    class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Rich
                                        Editors</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                                class="nk-menu-text">Quill</span></a></li>
                                    <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                                class="nk-menu-text">Tinymce</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->

                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-signin"></em></span><span
                                class="nk-menu-text">Recruit</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{Route('recruit.jobinterview.index')}}" class="nk-menu-link" ><span
                                        class="nk-menu-text">Job Interview</span></a></li>
                            <li class="nk-menu-item"><a href="{{Route('recruit.jobpost.index')}}" class="nk-menu-link" ><span
                                        class="nk-menu-text">Job Post</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" ><span
                                        class="nk-menu-text">Skills</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" ><span
                                        class="nk-menu-text">Jobs</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" ><span
                                        class="nk-menu-text">Job Applications</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" ><span
                                        class="nk-menu-text">Interview Schedule</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" ><span
                                        class="nk-menu-text">Offer Letter</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" ><span
                                        class="nk-menu-text">Experienced Letter</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" ><span
                                        class="nk-menu-text">Candidate Database</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" ><span
                                        class="nk-menu-text">Reports</span></a></li>
                        </ul>
                    </li>

                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-user-check-fill"></em></span><span
                                class="nk-menu-text">Requisition</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{ route('requisition.travel.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Travel List</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('requisition.requisitiontravel.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Requisition Travel</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('requisition.compensatoryleave.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Compensatory Leave</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('requisition.convincerequest.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Convince Request</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('requisition.leaverequest.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Leave Request</span></a></li>
                            

                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-shield-half"></em></span><span
                                class="nk-menu-text">Training</span></a>
                        <ul class="nk-menu-sub">
                        <li class="nk-menu-item"><a href="{{route('training.trainingtype.index')}}"
                                    class="nk-menu-link"><span class="nk-menu-text">Training Type</span></a></li>
                        <li class="nk-menu-item"><a href="{{route('training.traininglist.index')}}"
                                    class="nk-menu-link"><span class="nk-menu-text">Training List</span></a></li>
                        <li class="nk-menu-item"><a href="{{route('training.trainer.index')}}"
                                    class="nk-menu-link"><span class="nk-menu-text">Trainer</span></a></li>
</ul>
</li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-map-pin-fill"></em></span><span
                                class="nk-menu-text">Travel Fleet</span></a>
                        <ul class="nk-menu-sub">
                        <li class="nk-menu-item"><a href="{{ route('travelfleet.driverroster.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Driver Roster</span></a></li>
                        <li class="nk-menu-item"><a href="{{ route('travelfleet.maintenancelog.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Maintenance Log</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('travelfleet.fleetroster.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Fleet Roster</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('travelfleet.fleetmanagement.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Fleet Management</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('travelfleet.travelslog.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Service log</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('travelfleet.vehiclelog.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Vehicle Log</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('travelfleet.travelrequest.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Travel Request</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('travelfleet.travelcategory.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Travel Category</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('travelfleet.travelapproval.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Travel Approval</span></a></li>
                                    <li class="nk-menu-item"><a href="{{ route('requisition.fleetrequest.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Fleet Request</span></a></li>
</ul>
</li>

<li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-trend-up"></em></span><span
                                class="nk-menu-text">Office Management</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{ route('officemanagement.generatorlogbook.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Generator Logbook</span></a></li>
                                    <li class="nk-menu-item"><a href="{{ route('hr.contract.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Contract </span></a></li>
                                    <li class="nk-menu-item"><a href="{{ route('officemanagement.purchaseservice.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Purchase Service </span></a></li>
                                    <li class="nk-menu-item"><a href="{{ route('finance.cashdeposite.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Cash Deposit</span></a></li>
</ul>
</li>


                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-table-view"></em></span><span
                                class="nk-menu-text">Roster Management</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{route('rostermanagement.rostercategory.index')}}"
                                    class="nk-menu-link"><span class="nk-menu-text">Roster Categories</span></a></li>
                                                            <li class="nk-menu-item"><a href="{{route('rostermanagement.rosterentries.index')}}"
                                    class="nk-menu-link"><span class="nk-menu-text">Roster Entries</span></a></li>
                                </ul>
                            </li>


                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-bag"></em></span><span
                                class="nk-menu-text">Inventory</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{ route('inventory.barcodemanagement.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Barcode Management</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('inventory.product.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Product</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('inventory.goodreceivedreconcile.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Goods Received Reconcile</span></a></li>
                                      <li class="nk-menu-item"><a href="{{ route('inventory.purchaseorder.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Purchase Order</span></a></li>
                                    <li class="nk-menu-item"><a href="{{ route('inventory.servicelog.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Service Log</span></a></li>
                                    <li class="nk-menu-item"><a href="{{ route('inventory.purchaseentry.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Purchase Entry</span></a></li>
                                     <li class="nk-menu-item"><a href="{{ route('inventory.stockreconcile.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Stock Reconcile</span></a></li>
                        <li class="nk-menu-item"><a href="{{ route('inventory.service.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Service</span></a></li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-files"></em></span><span
                                class="nk-menu-text">Reports</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{ route('reports.travelreports.index') }}" class="nk-menu-link" ><span
                                        class="nk-menu-text">Task Report</span></a></li>
                         
                            <li class="nk-menu-item"><a href="{{ route('reports.financereports.index')}}" class="nk-menu-link" ><span
                                        class="nk-menu-text">Finance Report</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('reports.leavereports.index')}}" class="nk-menu-link" ><span
                                        class="nk-menu-text">Leave Report</span></a></li>
                            <li class="nk-menu-item"><a href="{{route('reports.expensesreports.index')}}" class="nk-menu-link" ><span
                                        class="nk-menu-text">Expenses Report</span></a></li>
                            <li class="nk-menu-item"><a href="{{route('reports.attendancereports.index')}}" class="nk-menu-link" ><span
                                        class="nk-menu-text">Attendance Report</span></a></li>
                          
                                                                </ul>
                    </li>

                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-done"></em></span><span
                                class="nk-menu-text">Events and Meetings</span></a>
                        <ul class="nk-menu-sub">
                           
                            <li class="nk-menu-item"><a href="{{route('eventsandmeetings.meeting.index')}}"
                                    class="nk-menu-link"><span class="nk-menu-text">Meetings</span></a></li>

                                    <li class="nk-menu-item"><a href="{{ route('hr.event.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Events </span></a></li>
                        
                                        </ul>
                                        </li>



                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-plus-circle-fill"></em></span><span
                                class="nk-menu-text">Supplier</span></a>
                        <ul class="nk-menu-sub">
                           
                            <li class="nk-menu-item"><a href="{{route('supplier.suppliercategory.index')}}"
                                    class="nk-menu-link"><span class="nk-menu-text">Category </span></a></li>
                           
                                    <li class="nk-menu-item"><a href="{{ route('master.addsupplier.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Add Supplier</span></a></li>
</ul>
</li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-archived"></em></span><span
                                class="nk-menu-text">File Manager</span></a>
                        <ul class="nk-menu-sub">

                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" ><span
                                        class="nk-menu-text">404 Classic</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" ><span
                                        class="nk-menu-text">504 Classic</span></a></li>
                        </ul>
                    </li>
                    {{-- <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-files"></em></span><span
                                class="nk-menu-text">Settings</span></a>
                        <ul class="nk-menu-sub">
                            {{ BibClass::createSidebarMenu(url('settings/dictonary'), 'Dictonary') }}
                            {{ BibClass::createSidebarMenu(url('settings/curd/'), 'CURD Function') }}
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" ><span
                                        class="nk-menu-text">404 Classic</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" ><span
                                        class="nk-menu-text">504 Classic</span></a></li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
</div>
