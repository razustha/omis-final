@extends('employee.layouts.employee.employee')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="row g-gs">
                        <div class="col-xxl-12">
                            <div class="nk-block-head-between flex-wrap gap g-3">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title py-4">Welcome, {{ auth()->user()->name }}</h2>
                                </div>
                                <div
                                    class="d-flex flex-column flex-sm-row-reverse align-items-sm-center justify-content-sm-between">
                                    <div class="mb-0 mt-4 mt-sm-0">
                                        @if (empty(auth()->user()->todayAttendance()
                                            ))
                                            <button class="btn btn-primary btn-checkIn"> + Clock In </button>
                                        @else
                                            <form
                                                action="{{ route('hr.attendence.checkOut',auth()->user()->todayAttendance()->attendence_id) }}"
                                                method="POST"> @csrf <div class="form-group ">
                                                    <input type="hidden" value="{{ auth()->user()->id }}">
                                                    <button type="submit" class="btn btn-danger btn-checkOut"> - Clock Out
                                                    </button>
                                                </div>
                                            </form>
                                        @endif
                                    </div>
                                    <div class="p-2">
                                        <div class="container">
                                            <div class="clock"></div>
                                            <div class="smaller">{{ date('l') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--profile details -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card h-100 col-sep">
                                    <div class="card-body py-2 flex-grow-0">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h2 class="title mb-4 pt-0">Joining Date</h2>
                                                <div class="nk-block-head-content">
                                                    <div class="d-flex flex-column flex-md-row align-items-md-center">
                                                        <span class="info-box-text">Joining date (HRIS) </span>
                                                        <span
                                                            class="info-box-number">{{ Carbon\Carbon::parse($employeeData->joiningDate)->format('F d, Y') }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- leave -->
                        <div class="row mt-3">
                            <div class="col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-header text-center text-muted">
                                        Leave Allocation ( <b>Total {{$totalLeave}}</b> ) per year
                                    </div>
                                    <div class="card-body">
                                        <canvas id="doughnutChart" width="300" height="300"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-12">
                                <!-- leave card -->
                                <div class="card">
                                    <div class="row p-3">
                                        <!-- paid leave -->
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-gradient-indigo elevation-1"><i
                                                        class="fa-solid fa-person-walking-luggage"></i></span>
                                                <div class="info-box-content">
                                                    <p class="mb-1 font-weight-bold" style="font-size: 17px">Casual/Paid Leave</p>
                                                    <span class="info-box-text">Remaining : <b>{{$leaveLeft}}</b></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- total leave -->
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-gradient-info elevation-1"><i
                                                        class="fa-solid fa-person-hiking"></i></span>
                                                <div class="info-box-content">
                                                    <p class="mb-1 font-weight-bold" style="font-size: 17px">Leave Request</p>
                                                    <span class="info-box-text"><b>{{$totalLeaveTaken}}</b></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of leave card -->
                                <!-- View all leave taken -->
                                {{-- <div class="card collapsed-card">
                                    <button type="button" class="card-header bg-gradient-gray-dark" data-card-widget="collapse">
                                        <h3 class="card-title">View all leave taken ({{$totalLeaveTaken}})</h3>
                                    </button>

                                    <div class="card-body" style="display: none;">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="info-box mb-3" style="background-color: #2ecc71">
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">Paid</span>
                                                        <span
                                                            class="info-box-number">
                                                                {{$paidLeaveTaken}}
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                            @foreach($leaveDetails as $leaveDetail)
                                                <div class="col-md-4">
                                                    <div class="info-box mb-3" style="background-color: {{$leaveDetail['leaveColor']}}">
                                                        <div class="info-box-content">
                                                            <span class="info-box-text">{{$leaveDetail['leaveType']}}</span>
                                                            <span
                                                                class="info-box-number">
                                                                {{$leaveDetail['leaveTaken']}}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div> --}}
                                <!-- end of View all leave taken -->
                                <div class="card">
                                    <div class="card-header">
                                        Leave taken history <a href="{{route('hr.leaveapplication.index')}}"
                                                            class="btn btn-info btn-sm ml-3">View All Requests</a>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                    class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <table class="table table-striped" id="leaveTakenDatatable">
                                            <thead>
                                            <tr>
                                                <th width="70%">Leave</th>
                                                <th width="30%">Requested at</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($leaveRequests as $request)

                                                <tr>
                                                    @if($request->leavetype_id == '0')
                                                    <td>
                                                        <a href="#">Casual/Paid Leave</a>
                                                    </td>
                                                    @else
                                                    <td>
                                                        <a href="#">{{$request->leavetype->leaveType}}</a>
                                                    </td>
                                                    @endif

                                                    <td>{{Carbon\Carbon::parse($request->created_at)->format('F d, Y')}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of leave-->
                        <div class="col-xxl-5">
                            <div class="card h-100 col-sep">
                                <div class="card-body py-2 flex-grow-0">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h2 class="title mb-4 pt-0">Profile Overview</h2>
                                            <div class="nk-block-head-content">
                                                <div class="d-flex flex-column flex-md-row align-items-md-center">
                                                    <div class="media media-huge media-circle">
                                                        <img src="{{ auth()->user()->employee->profilePhoto }}"
                                                            class="img-thumbnail">
                                                    </div>
                                                    <div div class="mt-3 mt-md-0 ms-md-3">
                                                        <h3 class="title mb-1">{{ auth()->user()->name }}
                                                        </h3>
                                                        <span class="small">{{ auth()->user()->user_type }}</span>
                                                        <ul class="nk-list-option pt-1">
                                                            <br>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-tools">
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-sm btn-icon btn-zoom me-n1"
                                                    data-bs-toggle="dropdown">
                                                    <em class="icon ni ni-more-v"></em>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                    <li>
                                                        <div class="dropdown-header pt-2 pb-2">
                                                            <a href="#">
                                                                <h6 class="mb-0">Edit Profile</h6>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="dropdown-header pt-2 pb-2">
                                                            <a href="#">
                                                                <h6 class="mb-0">View Profile</h6>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="row g-gs text-center">
                                        <div class="col-12 col-sm-6">
                                            <div class="amount h2 mb-0 text-success">946 +</div>
                                            <span class="smaller">Total Projects</span>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="amount h2 mb-0 text-primary">280 +</div>
                                            <span class="smaller">Active Projects</span>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="amount h2 mb-0 text-secondary">586 +</div>
                                            <span class="smaller">Revenue</span>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="amount h2 mb-0 text-warning">9,453 +</div>
                                            <span class="smaller">Working Hours</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--profile details -->
                        <!-- project stats -->
                        <div class="col-xxl-7">
                            <div class="card h-100">
                                <div class="card-body py-2 flex-grow-0">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h2 class="title">Projects Stats</h2>
                                        </div>
                                        <div class="card-tools d-none d-sm-inline-block">
                                            <a href="#" class="btn btn-sm btn-soft btn-primary">Export
                                                Report</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-middle mb-0">
                                        <thead class="table-light table-head-sm">
                                            <tr>
                                                <th class="tb-col">
                                                    <span class="overline-title">items</span>
                                                </th>
                                                <th class="tb-col tb-col-end tb-col-xxl">
                                                    <span class="overline-title">budget</span>
                                                </th>
                                                <th class="tb-col tb-col-end tb-col-sm">
                                                    <span class="overline-title">progress</span>
                                                </th>
                                                <th class="tb-col tb-col-end  tb-col-xxl">
                                                    <span class="overline-title">asigned to</span>
                                                </th>
                                                <th class="tb-col tb-col-end">
                                                    <span class="overline-title">status</span>
                                                </th>
                                                <th class="tb-col tb-col-end">
                                                    <span class="overline-title">
                                                        <span class="d-none d-sm-inline-blcok">due</span>
                                                        date </span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="tb-col">
                                                    <div class="media-group">
                                                        <div class="media-text">
                                                            <a href="#" class="title">Create
                                                                Wireframe</a>
                                                            <span class="text smaller">Esther Howard</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-end tb-col-xxl">
                                                    <span class="small">$32,400</span>
                                                </td>
                                                <td class="tb-col tb-col-end tb-col-sm">
                                                    <div class="d-flex align-items-center">
                                                        <span class="small me-1">50%</span>
                                                        <div class="progress progress-sm w-100">
                                                            <div class="progress-bar bg-danger" data-progress="50%"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-end  tb-col-xxl">
                                                    <div class="media-group media-group-overlap">
                                                        <div class="media media-xs media-circle media-border border-white"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="David">
                                                            <img src="/storage/photos/1/unnamed.jpg" alt="">
                                                        </div>
                                                        <div class="media media-xs media-circle media-border border-white"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="David">
                                                            <img src="/storage/photos/1/unnamed.jpg" alt="">
                                                        </div>
                                                        <div class="media media-xs media-circle media-border border-white"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="David">
                                                            <img src="/storage/photos/1/unnamed.jpg" alt="">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-end">
                                                    <span class="badge text-bg-info-soft">In
                                                        progress</span>
                                                </td>
                                                <td class="tb-col tb-col-end">
                                                    <span class="small">07 Sep 2022</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- project stats -->
                        <!-- daily task -->
                        <div class="col-md-6 col-xxl-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h2 class="title">Daily Tasks</h2>
                                            <p class="small">Percentage of product a user demands</p>
                                        </div>
                                    </div>
                                    <ul class="nk-schedule mt-4">
                                        <li class="nk-schedule-item">
                                            <div class="nk-schedule-item-inner">
                                                <div class="nk-schedule-symbol active"></div>
                                                <div class="nk-schedule-content">
                                                    <span class="smaller">01/30/2022</span>
                                                    <div class="h6 mb-0">IOS Dev Team Meeting</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nk-schedule-item">
                                            <div class="nk-schedule-item-inner">
                                                <div class="nk-schedule-symbol active"></div>
                                                <div class="nk-schedule-content">
                                                    <span class="smaller">01/30/2022</span>
                                                    <div class="h6 mb-0">Believing is the absence of doubt
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- daily task -->
                        <!--message-->
                        <div class="col-xxl-4">
                            <div class="card h-100">
                                <div class="nk-aside-heading pt-4">
                                    <div class="gap-col gap-2">
                                        <h2 class="title">Recent Messages</h2>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-zoom btn-icon me-n1" data-bs-toggle="dropdown">
                                            <em class="icon ni ni-more-h"></em>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <div class="dropdown-content py-1">
                                                <ul class="link-list is-compact">
                                                    <li>
                                                        <a href="#">
                                                            <em class="icon ni ni-plus"></em>
                                                            <span>New Chat</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <em class="icon ni ni-user"></em>
                                                            <span>New Contact</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-chat-aside-scroll" data-simplebar>
                                    <div class="nk-aside-content py-2">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <div class="form-control-icon end">
                                                    <em class="icon ni ni-search"></em>
                                                </div>
                                                <input type="text" class="form-control form-control-md rounded-pill"
                                                    id="searchChat" placeholder="Search" />
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nk-chat-list">
                                        <li class="toggle-chat-item" data-target="chatBody">
                                            <div class="media-group">
                                                <div class="media media-circle media-middle">
                                                    <img src="../../images/avatar/a.jpg" alt="" />
                                                </div>
                                                <div class="media-text">
                                                    <span class="title">
                                                        <span>Jessica Drew</span>
                                                        <span class="date">18:30</span>
                                                    </span>
                                                    <span class="text smaller">
                                                        <span>Ok, see you later</span>
                                                        <span class="badge bg-success rounded-pill">2</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="toggle-chat-item" data-target="chatBody">
                                            <div class="media-group">
                                                <div class="media media-circle media-middle">
                                                    <img src="../../images/avatar/b.jpg" alt="" />
                                                </div>
                                                <div class="media-text">
                                                    <span class="title">
                                                        <span>David Moore</span>
                                                        <span class="date">18:16</span>
                                                    </span>
                                                    <span class="text smaller">
                                                        <span>You: i don't remember anything 😄 </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="toggle-chat-item" data-target="chatBody">
                                            <div class="media-group">
                                                <div class="media media-circle media-middle">
                                                    <img src="../../images/avatar/c.jpg" alt="" />
                                                </div>
                                                <div class="media-text">
                                                    <span class="title">
                                                        <span>Greg James</span>
                                                        <span class="date">18:02</span>
                                                    </span>
                                                    <span class="text smaller">
                                                        <span>I got a job at SpaceX 🎉 🚀</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="toggle-chat-item" data-target="chatBody">
                                            <div class="media-group">
                                                <div class="media media-circle media-middle">
                                                    <img src="../../images/avatar/d.jpg" alt="" />
                                                </div>
                                                <div class="media-text">
                                                    <span class="title">
                                                        <span>Emily Dorson</span>
                                                        <span class="date">17:42</span>
                                                    </span>
                                                    <span class="text smaller">
                                                        <span>Table for four, 5PM. Be there.</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--message-->
                        <!--schedule-->
                        <div class="col-md-6 col-xxl-4">
                            <div class="card h-100">
                                <div class="nk-aside-heading pt-4">
                                    <div class="gap-col gap-2 mb-2 mt-1">
                                        <h2 class="title">My Schedule</h2>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-zoom btn-icon me-n1 mb-1" data-bs-toggle="dropdown">
                                            <em class="icon ni ni-more-h"></em>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <div class="dropdown-content py-1">
                                                <ul class="link-list is-compact">
                                                    <li>
                                                        <a href="#">
                                                            <em class="icon ni ni-plus"></em>
                                                            <span>New Task to schedule</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <em class="icon ni ni-user"></em>
                                                            <span>Edit Schedule</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-middle mb-0">
                                        <thead class="table-light table-head-sm">
                                            <tr>
                                                <th class="tb-col">
                                                    <span class="overline-title">Days</span>
                                                </th>
                                                <th class="tb-col tb-col-end">
                                                    <span class="overline-title">Start Time</span>
                                                </th>
                                                <th class="tb-col tb-col-end tb-col-sm">
                                                    <span class="overline-title">End Time</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="tb-col">
                                                    <div class="media-group">
                                                        <div class="media-text">
                                                            <span class="title">Sunday</span>
                                                            <span class="text smaller">Ekadahi</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-end">
                                                    <span class="small">10:00 AM</span>
                                                </td>
                                                <td class="tb-col tb-col-end">
                                                    <span class="small">6:00 PM</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tb-col">
                                                    <div class="media-group">
                                                        <div class="media-text">
                                                            <span class="title">Monday</span>
                                                            <span class="text smaller">Ekadahi</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-end">
                                                    <span class="small">10:00 AM</span>
                                                </td>
                                                <td class="tb-col tb-col-end">
                                                    <span class="small">6:00 PM</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tb-col">
                                                    <div class="media-group">
                                                        <div class="media-text">
                                                            <span class="title">Tuesday</span>
                                                            <span class="text smaller">Ekadahi</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-end">
                                                    <span class="small">10:00 AM</span>
                                                </td>
                                                <td class="tb-col tb-col-end">
                                                    <span class="small">6:00 PM</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tb-col">
                                                    <div class="media-group">
                                                        <div class="media-text">
                                                            <span class="title">Wednesday</span>
                                                            <span class="text smaller">Ekadahi</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-end">
                                                    <span class="small">10:00 AM</span>
                                                </td>
                                                <td class="tb-col tb-col-end">
                                                    <span class="small">6:00 PM</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tb-col">
                                                    <div class="media-group">
                                                        <div class="media-text">
                                                            <span class="title">Thursday</span>
                                                            <span class="text smaller">Ekadahi</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-end">
                                                    <span class="small">10:00 AM</span>
                                                </td>
                                                <td class="tb-col tb-col-end">
                                                    <span class="small">6:00 PM</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tb-col">
                                                    <div class="media-group">
                                                        <div class="media-text">
                                                            <span class="title">Friday</span>
                                                            <span class="text smaller">Ekadahi</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-end">
                                                    <span class="small">10:00 AM</span>
                                                </td>
                                                <td class="tb-col tb-col-end">
                                                    <span class="small">6:00 PM</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tb-col">
                                                    <div class="media-group">
                                                        <div class="media-text">
                                                            <span class="title">Saturday</span>
                                                            <span class="text smaller">Holiday</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-end">
                                                    <span class="small">-</span>
                                                </td>
                                                <td class="tb-col tb-col-end">
                                                    <span class="small">-</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--schedule-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        // Clock
        const clock = document.querySelector('.clock');

        //assigning time values to constants
        const tick = () => {
            const now = new Date();
            let h = now.getHours();
            const m = now.getMinutes();
            const s = now.getSeconds();
            let am_pm = 'AM';

            //transforming 24 hour clock into 12 hour clock
            if (h >= 12) {
                h -= 12;
                am_pm = "PM";
            };
            if (h == 0) {
                h = 12;
                am_pm = "AM";
            };

            //defining html for digital clock
            const html = `
    <span>${h}</span> :
    <span>${m}</span> :
    <span>${s}</span>
    <span class="ampm">${am_pm}</span>
    `;

            //printing html code inside div.clock
            clock.innerHTML = html;
        };

        //refreshing clock every 1 second
        setInterval(tick, 1000);


        const ctx = document.getElementById('doughnutChart').getContext('2d');
        var leaveType = @json($leaveType);
        var leaveCount = @json($leaveCount);
        const doughnutChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: leaveType,
                datasets: [{
                    label: 'Leave',
                    data: leaveCount,
                    backgroundColor: @json($leaveColor),
                    borderColor: @json($leaveColor),
                    borderWidth: 0.5
                }]
            },
            options: {
                maintainAspectRatio: false,
                responsive: true
            }
        });
    </script>
@endsection
