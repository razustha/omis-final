@extends('organization.layouts.organization.organization')
@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="g-gs">
                        <div class="col-xxl-12">
                            <div class="nk-block-head-between flex-wrap gap ">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title py-4">Welcome, {{auth()->user()->name}}</h2>
                                </div>
                                <div
                                    class="d-flex flex-column flex-sm-row-reverse align-items-sm-center justify-content-sm-between">
                                   <!--  <div class="mb-0 mt-4 mt-sm-0">

                                        @if (empty(auth()->user()->todayAttendance()
                                            ))
                                            <button class="btn btn-primary btn-checkIn">
                                                + Clock In
                                            </button>
                                        @else
                                            <form
                                                action="{{ route('hr.attendence.checkOut',auth()->user()->todayAttendance()->attendence_id) }}"
                                                method="POST">
                                                @csrf
                                                <div class="form-group ">
                                                    <input type="hidden" value="{{ auth()->user()->id }}">
                                                    <button type="submit" class="btn btn-danger btn-checkOut">
                                                        - Clock Out
                                                    </button>
                                                </div>
                                            </form>
                                        @endif
                                    </div> -->

                                    <div class="p-2">
                                        <div class="container">
                                            <div class="clock"></div>
                                            <div class="smaller">{{ date('l')}}</div>
                                        </div>

                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row g-gs">
                        <div class="col-sm-6 col-xl-6 col-xxl-3">

                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="card-title-group align-items-start row">
                                        <div class="col-sm-7 col-xl-7 col-xxl-6">
                                            <div class="card-title">
                                                <h4 class="title">Total Clients</h4>
                                            </div>
                                            <div class="mt-2 ">
                                                <div class="amount h1">2,765</div>

                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-6 col-xxl-3">
                                            <div class="media media-middle media-circle media-sm text-bg-primary-soft">
                                                <em class="icon icon-md ni ni-bar-chart-fill"></em>
                                            </div>
                                        </div>
                                                  <div class="d-flex align-items-center smaller mt-3">
                              <div class="change up ">
                                <em class="icon ni ni-upword-alt-fill"></em> 10.5%
                              </div>
                              <span class="text-light">From last 2 Weeks</span>
                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-6 col-xxl-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="card-title-group align-items-start">
                                        <div class="card-title">
                                            <h4 class="title">Total Employees</h4>
                                        </div>
                                        <div class="media media-middle media-circle media-sm text-bg-success-soft">
                                            <em class="icon icon-md ni ni-user-alt-fill"></em>
                                        </div>
                                    </div>
                                    <div class="mt-2 ">
                                        <div class="amount h1">250</div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-6 col-xxl-2">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="card-title-group align-items-start">
                                        <div class="card-title">
                                            <h4 class="title">Today Attendance</h4>
                                        </div>
                                        <div class="media media-middle media-circle media-sm text-bg-info-soft">
                                            <em class="icon icon-md ni ni-tag-fill"></em>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="amount h1">2,153</div>

                                    </div>

                                </div>
                            </div>
                        </div>

                                      <div class="col-sm-6 col-xl-6 col-xxl-2">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="card-title-group align-items-start">
                                        <div class="card-title">
                                            <h4 class="title">Total Projects</h4>
                                        </div>
                                        <div class="media media-middle media-circle media-sm text-bg-danger-soft">
                                           <em class="icon ni ni-book-read"></em>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="amount h1">2,153</div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-6 col-xxl-2">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="card-title-group align-items-start">
                                        <div class="card-title">
                                            <h4 class="title">Today Leaves</h4>
                                        </div>
                                        <div class="media media-middle media-circle media-sm text-bg-warning -soft">
                                            <em class="icon icon-md ni ni-tag-fill"></em>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="amount h1">2,153</div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xxl-6">
                      <div class="card h-100">
                        <div class="card-body">
                          <div class="card-title-group">
                            <div class="card-title">
                              <h2 class="title">Projects Statistics</h2>
                                 <span class="small">Graphically,</span>
                            </div>
                            <div class="card-tools">
                              <em class="icon-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="Project Statistics"></em>
                            </div>
                          </div>
                          <div class="nk-chart-analytics-session-device mt-4">
                            <canvas data-nk-chart="doughnut" id="sessionsDevice"></canvas>
                          </div>
                          <div class="chart-legend-group justify-content-around pt-4 flex-wrap gap g-2">
                            <div class="chart-legend">
                              <span class="dot bg-info"></span>
                              <div class="chart-legend-text">
                                <div class="title">On Hold</div>
                              </div>
                            </div>
                            <div class="chart-legend">
                              <span class="dot bg-warning"></span>
                              <div class="chart-legend-text">
                                <div class="title">On Work</div>
                              </div>
                            </div>
                            <div class="chart-legend">
                              <span class="dot bg-success"></span>
                              <div class="chart-legend-text">
                                <div class="title">Completed</div>
                              </div>
                            </div>
                            <div class="chart-legend">
                              <span class="dot bg-purple"></span>
                              <div class="chart-legend-text">
                                <div class="title">Maintainance</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                        <div class="col-xxl-6">
                            <div class="card h-100">
                                <div class="card-body py-2 flex-grow-0">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h2 class="title">Projects Status</h2>
                                               <span class="small">Overview</span>
                                        </div>
                                        <div class="card-tools d-none d-sm-inline-block"><a href="#"
                                                class="btn btn-lg btn-soft btn-danger">Export Report</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-middle mb-0">
                                        <thead class="table-light table-head-sm">
                                            <tr>
                                                <th class="tb-col"><span class="overline-title">items</span>
                                                </th>

                                                <th class="tb-col tb-col-center tb-col-sm"><span
                                                        class="overline-title">progress</span></th>
                                                <th class="tb-col tb-col-center  tb-col-xxl"><span
                                                        class="overline-title">asign</span></th>
                                                <th class="tb-col tb-col-center"><span
                                                        class="overline-title">status</span></th>
                                                <th class="tb-col tb-col-center"><span class="overline-title"><span
                                                            class="d-none d-sm-inline-blcok">due</span>
                                                        date</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="tb-col">
                                                    <div class="media-group">
                                                        <div class="media media-md media-middle media-circle">
                                                            <img src="assets/images/product/a.jpg" alt="">
                                                        </div>
                                                        <div class="media-text"><a href="#" class="title">Create
                                                                Wireframe</a><span class="text smaller">Esther
                                                                Howard</span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="tb-col tb-col-center tb-col-sm">
                                                    <div class="d-flex align-items-center"><span
                                                            class="small me-1">63%</span>
                                                        <div class="progress progress-sm w-100">
                                                            <div class="progress-bar bg-success" data-progress="63%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-center  tb-col-xxl">
                                                    <div class="media-group media-group-overlap">
                                                        <div class="media media-xs media-circle media-border border-white"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="David"><img src="assets/images/avatar/a.jpg"
                                                                alt=""></div>
                                                        <div class="media media-xs media-circle media-border border-white"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Sanjoy"><img src="assets/images/avatar/b.jpg"
                                                                alt=""></div>
                                                        <div class="media media-xs media-circle media-border border-white"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Kinchit"><img src="assets/images/avatar/c.jpg"
                                                                alt=""></div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-center"><span class="badge text-bg-info-soft">In
                                                        progress</span>
                                                </td>
                                                <td class="tb-col tb-col-center"><span class="small">07 Sep
                                                        2022</span></td>
                                            </tr>
                                            <tr>
                                                <td class="tb-col">
                                                    <div class="media-group">
                                                        <div class="media media-md media-middle media-circle">
                                                            <img src="assets/images/product/b.jpg" alt="">
                                                        </div>
                                                        <div class="media-text"><a href="#" class="title">Divine
                                                                Opulence</a><span class="text smaller">Jenny Wilson</span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="tb-col tb-col-center tb-col-sm">
                                                    <div class="d-flex align-items-center"><span
                                                            class="small me-1">100%</span>
                                                        <div class="progress progress-sm w-100">
                                                            <div class="progress-bar bg-success" data-progress="100%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-center tb-col-xxl">
                                                    <div class="media-group media-group-overlap">
                                                        <div class="media media-xs media-circle media-border border-white"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Alex Smith"><img src="assets/images/avatar/a.jpg"
                                                                alt=""></div>
                                                        <div class="media media-xs media-circle media-border border-white"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Alex Smith"><img src="assets/images/avatar/b.jpg"
                                                                alt=""></div>
                                                        <div class="media media-xs media-circle media-border border-white"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Alex Smith"><img src="assets/images/avatar/c.jpg"
                                                                alt=""></div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-center"><span
                                                        class="badge text-bg-success-soft">Completed</span>
                                                </td>
                                                <td class="tb-col tb-col-center"><span class="small">12 Aug
                                                        2022</span></td>
                                            </tr>
                                            <tr>
                                                <td class="tb-col">
                                                    <div class="media-group">
                                                        <div class="media media-md media-middle media-circle">
                                                            <img src="assets/images/product/c.jpg" alt="">
                                                        </div>
                                                        <div class="media-text"><a href="#" class="title">Charto
                                                                CRM</a><span class="text smaller">Cody Fisher</span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="tb-col tb-col-center tb-col-sm">
                                                    <div class="d-flex align-items-center"><span
                                                            class="small me-1">30%</span>
                                                        <div class="progress progress-sm w-100">
                                                            <div class="progress-bar bg-success" data-progress="30%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-center tb-col-xxl">
                                                    <div class="media-group media-group-overlap">
                                                        <div class="media media-xs media-circle media-border border-white"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Alex Smith"><img src="assets/images/avatar/a.jpg"
                                                                alt=""></div>
                                                        <div class="media media-xs media-circle media-border border-white"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Alex Smith"><img src="assets/images/avatar/b.jpg"
                                                                alt=""></div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-center"><span class="badge text-bg-info-soft">In
                                                        progress</span>
                                                </td>
                                                <td class="tb-col tb-col-center"><span class="small">18 Oct
                                                        2022</span></td>
                                            </tr>
                                            <tr>
                                                <td class="tb-col">
                                                    <div class="media-group">
                                                        <div class="media media-md media-middle media-circle">
                                                            <img src="assets/images/product/d.jpg" alt="">
                                                        </div>
                                                        <div class="media-text"><a href="#" class="title">Mountain
                                                                Trip Kit </a><span class="text smaller">Savannah
                                                                Nguyen</span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="tb-col tb-col-center tb-col-sm">
                                                    <div class="d-flex align-items-center"><span
                                                            class="small me-1">0%</span>
                                                        <div class="progress progress-sm w-100">
                                                            <div class="progress-bar bg-success" data-progress="0%"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-center tb-col-xxl">
                                                    <div class="media-group media-group-overlap">
                                                        <div class="media media-xs media-circle media-border border-white"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Jhon"><img src="assets/images/avatar/a.jpg"
                                                                alt=""></div>
                                                        <div class="media media-xs media-circle media-border border-white"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Marku"><img src="assets/images/avatar/b.jpg"
                                                                alt=""></div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-center"><span
                                                        class="badge text-bg-warning-soft">Pending</span>
                                                </td>
                                                <td class="tb-col tb-col-center"><span class="small">25 Jul
                                                        2022</span></td>
                                            </tr>
                                            <tr>
                                                <td class="tb-col">
                                                    <div class="media-group">
                                                        <div class="media media-md media-middle media-circle">
                                                            <img src="assets/images/product/e.jpg" alt="">
                                                        </div>
                                                        <div class="media-text"><a href="#" class="title">Chat
                                                                Application</a><span class="text smaller">Jane
                                                                Cooper</span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="tb-col tb-col-center tb-col-sm">
                                                    <div class="d-flex align-items-center"><span
                                                            class="small me-1">80%</span>
                                                        <div class="progress progress-sm w-100">
                                                            <div class="progress-bar bg-success" data-progress="80%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-center tb-col-xxl">
                                                    <div class="media-group media-group-overlap">
                                                        <div class="media media-xs media-circle media-border border-white"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Kevin"><img src="assets/images/avatar/a.jpg"
                                                                alt=""></div>
                                                        <div class="media media-xs media-circle media-border border-white"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Ebadot"><img src="assets/images/avatar/b.jpg"
                                                                alt=""></div>
                                                        <div class="media media-xs media-circle media-border border-white"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Alex Smith"><img src="assets/images/avatar/c.jpg"
                                                                alt=""></div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-center"><span class="badge text-bg-info-soft">In
                                                        progress</span>
                                                </td>
                                                <td class="tb-col tb-col-center"><span class="small">07 Sep
                                                        2022</span></td>
                                            </tr>
                                            <tr>
                                                <td class="tb-col">
                                                    <div class="media-group">
                                                        <div class="media media-md media-middle media-circle">
                                                            <img src="assets/images/product/a.jpg" alt="">
                                                        </div>
                                                        <div class="media-text"><a href="#" class="title">Mountain
                                                                Trip Kit </a><span class="text smaller">Jane Cooper</span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="tb-col tb-col-center tb-col-sm">
                                                    <div class="d-flex align-items-center"><span
                                                            class="small me-1">36%</span>
                                                        <div class="progress progress-sm w-100">
                                                            <div class="progress-bar bg-success" data-progress="36%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-center tb-col-xxl">
                                                    <div class="media-group media-group-overlap">
                                                        <div class="media media-xs media-circle media-border border-white"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Jane Smith"><img src="assets/images/avatar/a.jpg"
                                                                alt=""></div>
                                                        <div class="media media-xs media-circle media-border border-white"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Alex Smith"><img src="assets/images/avatar/b.jpg"
                                                                alt=""></div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-center"><span class="badge text-bg-info-soft">In
                                                        progress</span>
                                                </td>
                                                <td class="tb-col tb-col-center "><span class="small">25 Jul
                                                        2022</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



<div class="col-xxl-6">
                            <div class="card">
                                <div class="card-body flex-grow-0 py-2">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h2 class="title">Assets List</h2>
                                             <span class="small">Assets Details</span>
                                        </div>
                                        {{-- <div class="card-tools">
                                            <div class="dropdown"><a href="#"
                                                    class="btn btn-sm btn-icon btn-zoom me-n1"
                                                    data-bs-toggle="dropdown"><em
                                                        class="icon ni ni-more-v"></em></a>
                                                <ul
                                                    class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                    <li>
                                                        <div class="dropdown-header pt-2 pb-0">
                                                            <h6 class="mb-0">Options</h6>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a href="#" class="dropdown-item">7 Days</a></li>
                                                    <li><a href="#" class="dropdown-item">15 Days</a></li>
                                                    <li><a href="#" class="dropdown-item">30 Days</a></li>
                                                </ul>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-middle mb-0">
                                        <thead class="table-light table-head-sm">
                                            <tr>
                                                <th class="tb-col"><span class="overline-title">Assets Name</span></th>
                                                <th class="tb-col tb-col-end"><span
                                                        class="overline-title">Requested By</span></th>
                                                <th class="tb-col tb-col-end"><span
                                                        class="overline-title">Approved By</span></th>
                                                <th class="tb-col tb-col-end"><span class="overline-title">Status</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
<div class="col-xxl-6">
                            <div class="card">
                                <div class="card-body flex-grow-0 py-2">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h2 class="title">Employees List</h2>
                                               <span class="small">Employee joined</span>
                                        </div>
                                        {{-- <div class="card-tools">
                                            <div class="dropdown"><a href="#"
                                                    class="btn btn-sm btn-icon btn-zoom me-n1"
                                                    data-bs-toggle="dropdown"><em
                                                        class="icon ni ni-more-v"></em></a>
                                                <ul
                                                    class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                    <li>
                                                        <div class="dropdown-header pt-2 pb-0">
                                                            <h6 class="mb-0">Options</h6>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a href="#" class="dropdown-item">7 Days</a></li>
                                                    <li><a href="#" class="dropdown-item">15 Days</a></li>
                                                    <li><a href="#" class="dropdown-item">30 Days</a></li>
                                                </ul>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-middle mb-0">
                                        <thead class="table-light table-head-sm">
                                            <tr>
                                                <th class="tb-col"><span class="overline-title">Name</span></th>
                                                <th class="tb-col tb-col-end"><span
                                                        class="overline-title">Department</span></th>
                                                <th class="tb-col tb-col-end"><span
                                                        class="overline-title">Designation</span></th>
                                                <th class="tb-col tb-col-end"><span class="overline-title">Status</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-6">
                      <div class="card h-100">
                        <div class="card-body">
                     <h2 card="title">Latest Notices </h2>
                     <span class="small">Notice Board</span>
                            <div class="accordion mt-3" id="accordionExample">    <div class="accordion-item">      <h2 class="accordion-header">        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">         Notice Title #1        </button>      </h2>      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">        <div class="accordion-body">          <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.        </div>      </div>    </div>    <div class="accordion-item">      <h2 class="accordion-header">        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">          Notice Title #2        </button>      </h2>      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">        <div class="accordion-body">          <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.        </div>      </div>    </div>    <div class="accordion-item">      <h2 class="accordion-header">        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">         Notice
                            Title #3        </button>      </h2>      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">        <div class="accordion-body">          <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.        </div>      </div>    </div></div>

                    </div>
                </div>
            </div>

                        <div class="col-xxl-6">
                        <div class="card h-100">
                        <div class="card-body">
                                 <h2 card="title">Events And Meetings </h2>
                                 <span class="small">Event and meeting tabs</span>
                                    <div class="content mt-3">
                                        <ul class="nav nav-tabs mb-3">  <li class="nav-item">    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button">Events List</button>  </li>  <li class="nav-item">    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button">Meetings List</button>  </li>
                                        </ul>

                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="home-tab-pane">
                                <table class="table">  <thead>    <tr>      <th scope="col">S.No.</th>      <th scope="col">Event Time</th>      <th scope="col">Event Title</th>      <th scope="col">Event Date</th>    </tr>  </thead>  <tbody>    <tr>      <th scope="row">1</th>      <td>12:00 AM</td>      <td>bibhuti Solutions</td>      <td>31-02-2000</td>    </tr>  </tbody></table>
                                                    </div>

                                     <div class="tab-pane fade" id="profile-tab-pane">
                                   <table class="table">  <thead>    <tr>      <th scope="col">S.No.</th>      <th scope="col"> Time</th>      <th scope="col"> Title</th>      <th scope="col"> Date</th>  <th scope="col">Department</th>    </tr>  </thead>  <tbody>    <tr>      <th scope="row">1</th>      <td>12:00 AM</td>      <td>bibhuti Solutions</td>      <td>31-02-2000</td>   <td>Develpoment</td> </tr>  </tbody></table>
                                 </div>


                                      </div>

                                </div>
                            </div>
                        </div>
                    </div>



    {{-- Update CheckIn --}}
    <div class="modal fade new_CheckIn" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title align-self-center mt-0 text-center" id="exampleModalLabel">Add Check In</h5>
                    <button type="button" class="btn-primary close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('hr.attendence.checkIn') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <input type="hidden" value="{{ auth()->user()->id }}">
                            <div class="col-md-12">
                                {{ createText('location', 'location', 'location') }}
                            </div>
                            <div class="col-md-12">
                                <div class="col-lg-12">
                                    {{ createText('workFrom', 'workFrom', 'Work From') }}
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <?php createButton('btn-primary', '', 'Save'); ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).on('click', ".btn-checkIn", function() {
            $('.new_CheckIn').modal('show');

        })

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
    </script>
@endsection

