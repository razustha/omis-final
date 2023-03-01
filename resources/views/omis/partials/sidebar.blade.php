<div class="nk-sidebar nk-sidebar-fixed is-theme" id="sidebar">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand"><a href="#" class="logo-link">
                <div class="logo-wrap">
                    <!-- <img src="assets/images/logo/logo1.png"> -->
                    <img src="{{ url('assets/images/logo/logo1.png') }}" alt="Image" />
                </div>
            </a>
            <div class="nk-compact-toggle me-n1"><button
                    class="btn btn-md btn-icon text-light btn-no-hover compact-toggle"><em
                        class="icon off ni ni-chevrons-left"></em><em
                        class="icon on ni ni-chevrons-right"></em></button>
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


                    @if(auth()->user()->hasRole('super-super-admin'))
                        <li class="nk-menu-item">
                            <a href="{{ route('dashboard') }}" class="nk-menu-link ">
                                <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                <span class="nk-menu-text">Dashboard</span>
                            </a>
                        </li>
                    @else
                        <li class="nk-menu-item">
                            <a href="{{ route('employee.dashboard') }}" class="nk-menu-link ">
                                <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                <span class="nk-menu-text">Dashboard</span>
                            </a>
                        </li>
                    @endif

                    @can('settings-users-index')
                    <li class="nk-menu-heading">
                        <h6 class="overline-title">Settings</h6>
                    </li>
                    @endcan

                    @role("super-super-admin")
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-package"></em></span>
                            <span class="nk-menu-text">Super Admin</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{ route('superadmin.package.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Packages</span></a>
                            </li>
                            <li class="nk-menu-item"><a href="{{ route('settings.organization.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Organization</span></a>
                            </li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Invoices</span></a>
                            </li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Companies</span></a>
                            </li>
                        </ul>
                    </li>
                    @endrole

                    @if(Gate::check('settings-users-index') || Gate::check('settings-role-index')
                    || Gate::check('settings-permission-index'))
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-list-index-fill"></em></span>
                            <span class="nk-menu-text">User Management</span></a>
                        <ul class="nk-menu-sub">
                       @can('settings-users-index')
                            <li class="nk-menu-item"><a href="{{ route('setting.users.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">User</span></a>
                            </li>
                            @endcan
                         @can('settings-role-index')
                            <li class="nk-menu-item"><a href="{{ route('setting.role.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Role</span></a>
                            </li>
                           @endcan
                           @can('settings-permission-index')
                            <li class="nk-menu-item"><a href="{{ route('setting.permission.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Permissions</span></a>
                            </li>
                            @endcan

                            <li class="nk-menu-item"><a href="{{ route('setting.operation.index') }}"
                                class="nk-menu-link"><span class="nk-menu-text">Operations Logs</span></a>
                                </li>
                        </ul>
                    </li>
                    @endif



                    @if(Gate::check('settings-organization-index'))
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                            <span class="nk-menu-text">Settings</span></a>
                        <ul class="nk-menu-sub">


                            <li class="nk-menu-item"><a href="{{ route('settings.organizationsettings.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Organization
                                        Setting</span></a></li>





                        </ul>
                    </li>
                    @endif


                    {{-- <li class="nk-menu-item ">
                        <a href="#" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                            <span class="nk-menu-text">Settings</span></a>
                    </li> --}}
                    @role("super-super-admin")
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span><span
                                class="nk-menu-text">forms</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{ route('form.create') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">crud</span></a>
                            </li>
                        </ul>
                    </li>
                    @endrole

                    @role('super-super-admin')

                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-account-setting-fill"></em></span><span
                                class="nk-menu-text">Master</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{ route('master.module.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Module </span></a>
                            </li>
                            <li class="nk-menu-item"><a href="{{ route('master.country.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Countries
                                    </span></a>
                            </li>
                            <li class="nk-menu-item"><a href="{{ route('master.state.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">State </span></a>
                            </li>
                            <li class="nk-menu-item"><a href="{{ route('master.district.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">District
                                    </span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('master.city.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Cities </span></a>
                            </li>
                            <li class="nk-menu-item"><a href="{{ route('master.nationality.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Nationality
                                    </span></a></li>
                            {{-- <li class="nk-menu-item"><a href="{{ route('master.organization.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Organization</span></a>
                            </li> --}}
                            <li class="nk-menu-item"><a href="{{ route('master.organizationtype.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Organization Type
                                    </span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('master.organizationcategory.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Organization
                                        Category </span></a>
                            </li>
                            <li class="nk-menu-item"><a href="{{ route('master.policy.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Policy </span></a>
                            </li>
                            <li class="nk-menu-item"><a href="{{ route('master.holidaytypes.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Holiday Types
                                    </span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('master.fleet.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Fleet
                                        Types</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('master.traveltype.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Travel
                                        Types</span></a></li>

                            <li class="nk-menu-item"><a href="{{ route('master.leavetype.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Leave
                                        Type</span></a></li>

                            <li class="nk-menu-item"><a href="{{ route('master.departmenttype.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Department
                                        Type</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('master.employmentsizecategory.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Employment Size
                                        Category</span></a>
                            </li>
                            <li class="nk-menu-item"><a href="{{ route('master.attendancefrom.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Attendance
                                        Form</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('master.jobtitle.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Designation
                                        Type</span></a></li>
                        </ul>
                    </li>
                    @endrole
                    <li class="nk-menu-heading">
                        <h6 class="overline-title">Applications Forms</h6>
                    </li>

                    @if(Gate::check('hr-employee-index') || Gate::check('hr-department-index')
                    || Gate::check('hr-designation-index')|| Gate::check('hr-shiftroster-index')
                    || Gate::check('hr-promotiondemotion-index') || Gate::check('hr-employeementtimeline-index')
                    || Gate::check('hr-employeeonboarding-index')|| Gate::check('hr-resignation-index')
                    || Gate::check('hr-mangeholiday-index') || Gate::check('hr-appreciation-index')
                    || Gate::check('hr-complaints-index') || Gate::check('hr-transfer-index')||
                    Gate::check('hr-warnings-index'))
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-account-setting-fill"></em></span><span
                                class="nk-menu-text">HR</span></a>
                        <ul class="nk-menu-sub">

                            @can('hr-employee-index')
                            <li class="nk-menu-item"><a href="{{ route('hr.employee.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Employee</span></a>
                            </li>
                            @endcan
                            @can('hr-department-index')
                            <li class="nk-menu-item"><a href="{{ route('hr.department.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Department</span></a>
                            </li>
                            @endcan
                            @can('hr-designation-index')
                            <li class="nk-menu-item"><a href="{{ route('hr.designation.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Designation</span></a>
                            </li>
                            @endcan

                            <!-- @can('hr-shiftroster-index')
                                <li class="nk-menu-item"><a href="{{ route('hr.shiftroster.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">Shift
                                            Roaster</span></a></li>
                            @endcan -->
                            @can('hr-promotiondemotion-index')
                            <li class="nk-menu-item"><a href="{{ route('hr.promotiondemotion.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Promotion/Demotion</span></a>
                            </li>
                            @endcan
                            @can('hr.employeementtimeline.index')
                            <li class="nk-menu-item"><a href="{{ route('hr.employeementtimeline.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Employment Timeline
                                    </span></a>
                            </li>
                            @endcan
                            @can('hr-employeeonboarding-index')
                            <li class="nk-menu-item"><a href="{{ route('hr.employeeonboarding.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Employee on
                                        boarding</span></a>
                            </li>
                            @endcan
                            @can('hr-resignation-index')
                            <li class="nk-menu-item"><a href="{{ route('hr.resignation.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Resignation</span></a>
                            </li>
                            @endcan
                            @can('hr-mangeholiday-index')
                            <li class="nk-menu-item"><a href="{{ route('hr.mangeholiday.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Manage
                                        Holiday</span></a></li>
                            @endcan
                            @can('hr-appreciation-index')
                            <li class="nk-menu-item"><a href="{{ route('hr.appreciation.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Appreciation</span></a>
                            </li>
                            @endcan
                            @can('hr-complaints-index')
                            <li class="nk-menu-item"><a href="{{ route('hr.complaints.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Complaints</span></a>
                            </li>
                            @endcan
                            {{-- <li class="nk-menu-item"><a href="{{ route('hr.cms.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Cms</span></a></li>
                            --}}
                            @can('hr-transfer-index')
                            <li class="nk-menu-item"><a href="{{ route('hr.transfer.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Transfer</span></a>
                            </li>
                            @endcan
                            @can('hr-warnings-index')
                            <li class="nk-menu-item"><a href="{{ route('hr.warnings.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Warnings</span></a>
                            </li>
                            @endcan

                        </ul>
                    </li>
                    @endif

                    @can('hr-leaveapplication-index')
                    <li class="nk-menu-item has-sub"><a href="{{ route('hr.leaveapplication.index') }}"
                            class="nk-menu-link"><span class="nk-menu-icon"><em
                                    class="icon ni ni-briefcase"></em></span><span
                                class="nk-menu-text">Leaves</span></a>
                    </li>
                    @endcan

                    @can('master-leavetype-index')
                    <li class="nk-menu-item has-sub"><a href="{{ route('master.leavetype.index') }}"
                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                class="icon ni ni-briefcase"></em></span><span
                            class="nk-menu-text">Leave Type</span></a>
                    </li>


                    @endcan

                    @if(Gate::check('crm-clients-index') || Gate::check('crm-leads-index'))
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-centos"></em></span><span
                                class="nk-menu-text">CRM</span></a>
                        <ul class="nk-menu-sub">
                            @can('crm-clients-index')
                            <li class="nk-menu-item"><a href="{{ route('crm.clients.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Clients</span></a>
                            </li>
                            @endcan
                            @can('crm-leads-index')
                            <li class="nk-menu-item"><a href="{{ route('crm.leads.index') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Leads</span></a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endif


                    <li class="nk-menu-item"><a href="{{ route('eventcalendar') }}" class="nk-menu-link"><span
                                class="nk-menu-icon"><em class="icon ni ni-calendar-alt"></em></span><span
                                class="nk-menu-text">Event Calender</span></a>
                    </li>

                    <li class="nk-menu-item"><a href="{{ route('holidaycalendar') }}" class="nk-menu-link"><span
                        class="nk-menu-icon"><em class="icon ni ni-calendar-alt"></em></span><span
                        class="nk-menu-text">Holiday Calender</span></a>
                    </li>
                    @if(Gate::check('hr-attendence-index') || Gate::check('hr-absentreason-index')
                    || Gate::check('hr-latereasons-index'))
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-clock"></em></span><span
                                class="nk-menu-text">TimeSheet</span></a>
                        <ul class="nk-menu-sub">
                            @can('hr-attendence-index')
                            <li class="nk-menu-item"><a href="{{ route('hr.attendence.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Attendance
                                    </span></a></li>
                            @endcan
                            @can('hr-absentreason-index')
                            <li class="nk-menu-item"><a href="{{ route('hr.absentreason.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Absent Reason
                                    </span></a>
                            </li>
                            @endcan
                            @can('hr-latereasons-index')
                            <li class="nk-menu-item"><a href="{{ route('hr.latereasons.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Late Reason
                                    </span></a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endif

                    @if(Gate::check('work-workprojects-index') || Gate::check('work-tasks-index')
                    || Gate::check('work-timelog-index'))
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-users"></em></span><span
                                class="nk-menu-text">Work</span></a>
                        <ul class="nk-menu-sub">
                            @can('work-workprojects-index')
                            <li class="nk-menu-item"><a href="{{ route('work.workprojects.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Projects</span></a>
                            </li>
                            @endcan
                            @can('work-tasks-index')
                            <li class="nk-menu-item"><a href="{{ route('work.tasks.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Tasks</span></a>
                            </li>
                            @endcan
                            @can('work-timelog-index')
                            <li class="nk-menu-item"><a href="{{ route('work.timelog.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Time
                                        Logs</span></a></li>
                            @endcan
                        </ul>
                    </li>
                    @endif
                    @if(Gate::check('finance-proposal-index') || Gate::check('finance-estimates-index')
                    || Gate::check('finance-financepay-index') || Gate::check('finance-creditnotes-index')
                    || Gate::check('finance-financeexpenses-index') || Gate::check('finance-advancerequest-index')
                    || Gate::check('finance-cashrequest-index') || Gate::check('finance-expensesclaim-index')
                    || Gate::check('finance-invoices-index') )
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-coin-eur"></em></span><span
                                class="nk-menu-text">Finance</span></a>
                        <ul class="nk-menu-sub">
                            @can('finance-proposal-index')
                            <li class="nk-menu-item"><a href="{{ route('finance.proposal.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Proposal</span></a>
                            </li>
                            @endcan
                            @can('finance-estimates-index')
                            <li class="nk-menu-item"><a href="{{ route('finance.estimates.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Estimates</span></a>
                            </li>
                            @endcan
                            @can('finance-financepay-index')
                            <li class="nk-menu-item"><a href="{{ route('finance.financepay.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Payments</span></a>
                            </li>
                            @endcan
                            @can('finance-creditnotes-index')
                            <li class="nk-menu-item"><a href="{{ route('finance.creditnotes.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Credit
                                        Notes</span></a></li>
                            @endcan
                            @can('finance-financeexpenses-index')
                            <li class="nk-menu-item"><a href="{{ route('finance.financeexpenses.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Expenses</span></a>
                            </li>
                            @endcan
                            @can('finance-advancerequest-index')
                            <li class="nk-menu-item"><a href="{{ route('finance.advancerequest.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Advance
                                        Request</span></a></li>
                            @endcan
                            @can('finance-cashrequest-index')
                            <li class="nk-menu-item"><a href="{{ route('finance.cashrequest.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Cash
                                        Request</span></a></li>
                            @endcan
                            @can('finance-expensesclaim-index')
                            <li class="nk-menu-item"><a href="{{ route('finance.expensesclaim.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Expenses
                                        Claim</span></a></li>
                            @endcan
                            @can('finance-invoices-index')
                            <li class="nk-menu-item"><a href="{{ route('finance.invoices.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Invoices</span></a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endif
                    @if(Gate::check('notice-announcement-index') || Gate::check('notice-detailsview-index') ||
                    Gate::check('notice-overview-index'))
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-help-alt"></em></span><span
                                class="nk-menu-text">Notice
                                Board</span></a>
                        <ul class="nk-menu-sub">
                            @can('notice-announcement-index')
                            <li class="nk-menu-item"><a href="{{ route('notice.announcement.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Announcement</span></a>
                            </li>
                            @endcan
                            @can('notice-detailsview-index')
                            <li class="nk-menu-item"><a href="{{ route('notice.detailsview.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Details
                                        View</span></a></li>
                            @endcan
                            @can('notice-overview-index')
                            <li class="nk-menu-item"><a href="{{ route('notice.overview.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Overview</span></a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endif
                    @if(Gate::check('assets-assestcategory-index') || Gate::check('assets-equipmentdemand-index') ||
                    Gate::check('assets-fixedassets-index'))

                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-building-fill"></em></span><span
                                class="nk-menu-text">Assets</span></a>
                        <ul class="nk-menu-sub">
                            @can('assets-assestcategory-index')
                            <li class="nk-menu-item"><a href="{{ route('assets.assestcategory.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Add Assets
                                        Category</span></a>
                            </li>
                            @endcan
                            @can('assets-equipmentdemand-index')
                            <li class="nk-menu-item"><a href="{{ route('assets.equipmentdemand.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Equipment
                                        Demand</span></a></li>
                            @endcan
                            @can('assets-fixedassets-index')
                            <li class="nk-menu-item"><a href="{{ route('assets.fixedassets.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Fixed
                                        Assets</span></a></li>
                            @endcan
                        </ul>
                    </li>
                    @endif
                    @if(Gate::check('payroll-newpayment-index'))
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-layers"></em></span><span
                                class="nk-menu-text">Payroll</span></a>
                        <ul class="nk-menu-sub">
                            @can('payroll-newpayment-index')
                            <li class="nk-menu-item"><a href="{{ route('payroll.newpayment.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">New
                                        Payment</span></a></li>
                            @endcan
                        </ul>
                    </li>
                    @endif

                    @if(Gate::check('recruit-jobinterview-index') || Gate::check('recruit-jobpost-index')
                    || Gate::check('recruit-jobapplication-index') || Gate::check('recruit-interviewschedule-index') ||
                    Gate::check('recruit-jobpost-index')
                    || Gate::check('recruit-offerletter-index') || Gate::check('recruit-experienceletter-index') ||
                    Gate::check('recruit-recuritreports-index'))

                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-signin"></em></span><span
                                class="nk-menu-text">Recruit</span></a>
                        <ul class="nk-menu-sub">
                            @can('recruit-jobinterview-index')
                            <li class="nk-menu-item"><a href="{{ Route('recruit.jobinterview.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Job
                                        Interview</span></a></li>
                            @endcan
                            @can('recruit-jobpost-index')
                            <li class="nk-menu-item"><a href="{{ Route('recruit.jobpost.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Job Post</span></a>
                            </li>
                            @endcan

                            @can('recruit-jobapplication-index')
                            <li class="nk-menu-item"><a href="{{ route('recruit.jobapplication.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Job
                                        Applications</span></a></li>
                            @endcan
                            @can('recruit-interviewschedule-index')
                            <li class="nk-menu-item"><a href="{{ route('recruit.interviewschedule.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Interview
                                        Schedule</span></a></li>
                            @endcan
                            @can('recruit-offerletter-index')
                            <li class="nk-menu-item"><a href="{{ route('recruit.offerletter.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Offer
                                        Letter</span></a></li>
                            @endcan
                            @can('recruit-experienceletter-index')
                            <li class="nk-menu-item"><a href="{{ route('recruit.experienceletter.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Experienced
                                        Letter</span></a></li>
                            @endcan
                            @can('recruit-recuritreports-index')
                            <li class="nk-menu-item"><a href="{{ route('recruit.recuritreports.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Reports</span></a>
                            </li>
                            @endcan

                        </ul>
                    </li>
                    @endif
                    @if(Gate::check('requisition-travel-index') || Gate::check('requisition-requisitiontravel-index')
                    || Gate::check('requisition-compensatoryleave-index') ||
                    Gate::check('requisition-convincerequest-index')
                    || Gate::check('requisition-leaverequest-index'))



                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-user-check-fill"></em></span><span
                                class="nk-menu-text">Requisition</span></a>
                        <ul class="nk-menu-sub">
                            @can('requisition-travel-index')
                            <li class="nk-menu-item"><a href="{{ route('requisition.travel.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Travel
                                        List</span></a></li>
                            @endcan
                            @can('requisition-requisitiontravel-index')
                            <li class="nk-menu-item"><a href="{{ route('requisition.requisitiontravel.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Requisition
                                        Travel</span></a></li>
                            @endcan
                            @can('requisition-compensatoryleave-index')
                            <li class="nk-menu-item"><a href="{{ route('requisition.compensatoryleave.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Compensatory
                                        Leave</span></a></li>
                            @endcan
                            @can('requisition-convincerequest-index')
                            <li class="nk-menu-item"><a href="{{ route('requisition.convincerequest.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Convince
                                        Request</span></a></li>
                            @endcan
                            @can('requisition-leaverequest-index')
                            <li class="nk-menu-item"><a href="{{ route('requisition.leaverequest.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Leave
                                        Request</span></a></li>
                            @endcan


                        </ul>
                    </li>
                    @endif
                    @if(Gate::check('training-trainingtype-index') || Gate::check('training-traininglist-index')
                    || Gate::check('training-trainer-index'))


                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-shield-half"></em></span><span
                                class="nk-menu-text">Training</span></a>
                        <ul class="nk-menu-sub">
                            @can('training-trainingtype-index')
                            <li class="nk-menu-item"><a href="{{ route('training.trainingtype.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Training
                                        Type</span></a></li>
                            @endcan
                            @can('training-traininglist-index')
                            <li class="nk-menu-item"><a href="{{ route('training.traininglist.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Training
                                        List</span></a></li>
                            @endcan
                            @can('training-trainer-index')
                            <li class="nk-menu-item"><a href="{{ route('training.trainer.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Trainer</span></a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endif
                    @if(Gate::check('travelfleet-driverroster-index') || Gate::check('travelfleet-maintenancelog-index')
                    || Gate::check('travelfleet-fleetroster-index') || Gate::check('travelfleet-fleetmanagement-index')
                    || Gate::check('travelfleet-travelslog-index') || Gate::check('travelfleet-vehiclelog-index')
                    || Gate::check('travelfleet-travelrequest-index') || Gate::check('travelfleet-travelcategory-index')
                    || Gate::check('travelfleet-travelapproval-index') || Gate::check('travelfleet-fleetrequest-index'))
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-map-pin-fill"></em></span><span
                                class="nk-menu-text">Travel
                                Fleet</span></a>
                        <ul class="nk-menu-sub">
                            @can('travelfleet-driverroster-index')
                            <li class="nk-menu-item"><a href="{{ route('travelfleet.driverroster.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Driver
                                        Roster</span></a></li>
                            @endcan
                            @can('travelfleet-maintenancelog-index')
                            <li class="nk-menu-item"><a href="{{ route('travelfleet.maintenancelog.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Maintenance
                                        Log</span></a></li>
                            @endcan
                            @can('travelfleet-fleetroster-index')
                            <li class="nk-menu-item"><a href="{{ route('travelfleet.fleetroster.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Fleet
                                        Roster</span></a></li>
                            @endcan
                            @can('travelfleet-fleetmanagement-index')
                            <li class="nk-menu-item"><a href="{{ route('travelfleet.fleetmanagement.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Fleet
                                        Management</span></a></li>
                            @endcan
                            @can('travelfleet-travelslog-index')
                            <li class="nk-menu-item"><a href="{{ route('travelfleet.travelslog.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Service
                                        log</span></a></li>
                            @endcan
                            @can('travelfleet-vehiclelog-index')
                            <li class="nk-menu-item"><a href="{{ route('travelfleet.vehiclelog.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Vehicle
                                        Log</span></a></li>
                            @endcan
                            @can('travelfleet-travelrequest-index')
                            <li class="nk-menu-item"><a href="{{ route('travelfleet.travelrequest.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Travel
                                        Request</span></a></li>
                            @endcan
                            @can('travelfleet-travelcategory-index')
                            <li class="nk-menu-item"><a href="{{ route('travelfleet.travelcategory.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Travel
                                        Category</span></a></li>
                            @endcan
                            @can('travelfleet-travelapproval-index')
                            <li class="nk-menu-item"><a href="{{ route('travelfleet.travelapproval.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Travel
                                        Approval</span></a></li>
                            @endcan
                            @can('travelfleet-fleetrequest-index')
                            <li class="nk-menu-item"><a href="{{ route('travelfleet.fleetrequest.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Fleet
                                        Request</span></a></li>
                            @endcan
                        </ul>
                    </li>
                    @endif
                    @if(Gate::check('officemanagement-generatorlogbook-index') || Gate::check('officemanagement-contract-index')
                    || Gate::check('officemanagement-purchaseservice-index') || Gate::check('officemanagement-cashdeposite-index'))
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-trend-up"></em></span><span
                                class="nk-menu-text">Office
                                Management</span></a>
                        <ul class="nk-menu-sub">
                            @can('officemanagement-generatorlogbook-index')
                            <li class="nk-menu-item"><a href="{{ route('officemanagement.generatorlogbook.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Generator
                                        Logbook</span></a></li>
                            @endcan
                            @can('officemanagement-contract-index')
                            <li class="nk-menu-item"><a href="{{ route('officemanagement.contract.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Contract
                                    </span></a></li>
                            @endcan
                            @can('officemanagement-purchaseservice-index')
                            <li class="nk-menu-item"><a href="{{ route('officemanagement.purchaseservice.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Purchase Service
                                    </span></a></li>
                            @endcan
                            @can('officemanagement-cashdeposite-index')
                            <li class="nk-menu-item"><a href="{{ route('officemanagement.cashdeposite.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Cash
                                        Deposit</span></a></li>
                            @endcan
                        </ul>
                    </li>
                    @endif


                    <!-- <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-table-view"></em></span><span
                                class="nk-menu-text">Roster
                                Management</span></a>
                        <ul class="nk-menu-sub">
                            @can('rostermanagement-rostercategory-index')
                                <li class="nk-menu-item"><a href="{{ route('rostermanagement.rostercategory.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">Roster
                                            Categories</span></a></li>
                            @endcan
                            @can('rostermanagement-rosterentries-index')
                                <li class="nk-menu-item"><a href="{{ route('rostermanagement.rosterentries.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">Roster
                                            Entries</span></a></li>
                            @endcan
                        </ul>
                    </li> -->

                    @if(Gate::check('inventory-barcodemanagement-index') || Gate::check('inventory-product-index')
                    || Gate::check('inventory-goodreceivedreconcile-index') || Gate::check('inventory-purchaseorder-index')
                    || Gate::check('inventory-servicelog-index') || Gate::check('inventory-purchaseentry-index')
                    || Gate::check('inventory-stockreconcile-index') || Gate::check('inventory-service-index'))
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-bag"></em></span><span
                                class="nk-menu-text">Inventory</span></a>
                        <ul class="nk-menu-sub">
                            @can('inventory-barcodemanagement-index')
                            <li class="nk-menu-item"><a href="{{ route('inventory.barcodemanagement.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Barcode
                                        Management</span></a></li>
                            @endcan
                            @can('inventory-product-index')
                            <li class="nk-menu-item"><a href="{{ route('inventory.product.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Product</span></a>
                            </li>
                            @endcan
                            @can('inventory-goodreceivedreconcile-index')
                            <li class="nk-menu-item"><a href="{{ route('inventory.goodreceivedreconcile.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Goods Received
                                        Reconcile</span></a></li>
                            @endcan
                            @can('inventory-purchaseorder-index')
                            <li class="nk-menu-item"><a href="{{ route('inventory.purchaseorder.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Purchase
                                        Order</span></a></li>
                            @endcan
                            @can('inventory-servicelog-index')
                            <li class="nk-menu-item"><a href="{{ route('inventory.servicelog.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Service
                                        Log</span></a></li>
                            @endcan
                            @can('inventory-purchaseentry-index')
                            <li class="nk-menu-item"><a href="{{ route('inventory.purchaseentry.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Purchase
                                        Entry</span></a></li>
                            @endcan
                            @can('inventory-stockreconcile-index')
                            <li class="nk-menu-item"><a href="{{ route('inventory.stockreconcile.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Stock
                                        Reconcile</span></a></li>
                            @endcan
                            @can('inventory-service-index')
                            <li class="nk-menu-item"><a href="{{ route('inventory.service.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Service</span></a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endif
                    @if(Gate::check('reports-taskreports-index') || Gate::check('reports-financereports-index')
                    || Gate::check('reports-leavereports-index') || Gate::check('reports-expensesreports-index')
                    || Gate::check('reports-attendancereports-index'))
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-files"></em></span><span
                                class="nk-menu-text">Reports</span></a>
                        <ul class="nk-menu-sub">
                            @can('reports-taskreports-index')
                            <li class="nk-menu-item"><a href="{{ route('reports.taskreports.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Task
                                        Report</span></a></li>
                            @endcan
                            @can('reports-financereports-index')
                            <li class="nk-menu-item"><a href="{{ route('reports.financereports.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Finance
                                        Report</span></a></li>
                            @endcan
                            @can('reports-leavereports-index')
                            <li class="nk-menu-item"><a href="{{ route('reports.leavereports.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Leave
                                        Report</span></a></li>
                            @endcan
                            @can('reports-expensesreports-index')
                            <li class="nk-menu-item"><a href="{{ route('reports.expensesreports.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Expenses
                                        Report</span></a></li>
                            @endcan
                            @can('reports-attendancereports-index')
                            <li class="nk-menu-item"><a href="{{ route('reports.attendancereports.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Attendance
                                        Report</span></a></li>
                            @endcan

                        </ul>
                    </li>
                    @endif
                    @if(Gate::check('eventsandmeetings-meeting-index') || Gate::check('eventsandmeetings-event-index'))


                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-done"></em></span><span
                                class="nk-menu-text">Events and
                                Meetings</span></a>
                        <ul class="nk-menu-sub">
                            @can('eventsandmeetings-meeting-index')
                            <li class="nk-menu-item"><a href="{{ route('eventsandmeetings.meeting.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Meetings</span></a>
                            </li>
                            @endcan
                            @can('eventsandmeetings-event-index')
                            <li class="nk-menu-item"><a href="{{ route('eventsandmeetings.event.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Events </span></a>
                            </li>
                            @endcan


                        </ul>
                    </li>
                    @endif


                    @if(Gate::check('supplier-suppliercategory-index') || Gate::check('supplier-addsupplier-index'))
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-plus-circle-fill"></em></span><span
                                class="nk-menu-text">Supplier</span></a>
                        <ul class="nk-menu-sub">
                            @can('supplier-suppliercategory-index')
                            <li class="nk-menu-item"><a href="{{ route('supplier.suppliercategory.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Category
                                    </span></a></li>
                            @endcan
                            @can('supplier-addsupplier-index')
                            <li class="nk-menu-item"><a href="{{ route('supplier.addsupplier.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Add
                                        Supplier</span></a></li>
                            @endcan
                        </ul>
                    </li>
                    @endif






                    <!-- <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-files"></em></span><span
                                class="nk-menu-text">Settings</span></a>
                        <ul class="nk-menu-sub">
                            {{ BibClass::createSidebarMenu(url('settings/dictonary'), 'Dictonary') }}
                            {{ BibClass::createSidebarMenu(
                            url('settings/curd/'),
                            'CURD
                            Function',
                            ) }}
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span class="nk-menu-text">404
                                        Classic</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span class="nk-menu-text">504
                                        Classic</span></a></li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>

</div>
