@extends('omis.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="g-gs">
                        <div class="col-xxl-12">
                            <div class="nk-block-head-between flex-wrap gap ">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title py-4">Welcome, {{ auth()->user()->name }}</h2>
                                </div>
                                <div
                                    class="d-flex flex-column flex-sm-row-reverse align-items-sm-center justify-content-sm-between">
                                    <div class="mb-0 mt-4 mt-sm-0">

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
                                    </div>
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
                                    <div class="card-title-group align-items-start">
                                            <div class="card-title">
                                                <h4 class="title">Total Clients</h4>
                                            </div>
                                            <div class="media media-middle media-circle media-sm text-bg-primary-soft">
                                                <em class="icon icon-md ni ni-bar-chart-fill"></em>
                                        </div>
                                    </div>
                                        <div class="mt-2 ">
                                                <div class="amount h1">2,765</div>
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
                        <div class="col-sm-6 col-xl-6 col-xxl-3">
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
                        <div class="col-sm-6 col-xl-6 col-xxl-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="card-title-group align-items-start">
                                        <div class="card-title">
                                            <h4 class="title">Today Leaves</h4>
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
                        <div class="col-sm-6 col-xl-6 col-xxl-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="card-title-group align-items-start">
                                        <div class="card-title">
                                            <h4 class="title">Total Projects</h4>
                                        </div>
                                        <div class="media media-middle media-circle media-sm text-bg-warning-soft">
                                            <em class="icon icon-md ni ni-bar-chart-fill"></em>
                                        </div>
                                    </div>
                                    <div class="mt-2 ">
                                        <div class="amount h1">1,853</div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-6 col-xxl-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="card-title-group align-items-start">
                                        <div class="card-title">
                                            <h4 class="title">Total Tasks</h4>
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
                        <div class="col-sm-6 col-xl-6 col-xxl-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="card-title-group align-items-start">
                                        <div class="card-title">
                                            <h4 class="title">Pending Tasks</h4>
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
                        <div class="col-sm-6 col-xl-6 col-xxl-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="card-title-group align-items-start">
                                        <div class="card-title">
                                            <h4 class="title">Total Leads</h4>
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


                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-body flex-grow-0 py-2">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h5 class="title">Employees</h5>
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
                                            @foreach ($employees as $employee)
                                                {{-- {{ dd($employee) }} --}}
                                                <tr>
                                                    <td class="tb-col">
                                                        <div class="media-group">

                                                            <div class="media-text"><span
                                                                    class="title">{{ $employee->firstName }}
                                                                    {{ $employee->middleName }}
                                                                    {{ $employee->lastName }}</span></div>
                                                        </div>
                                                    </td>
                                                    <td class="tb-col tb-col-end"><span
                                                            class="small">{{ $employee->department_id }} </span></td>
                                                    <td class="tb-col tb-col-end"><span
                                                            class="change up small">{{ $employee->designation_id }}</span>
                                                    </td>
                                                    <td class="tb-col tb-col-end"><span class="small">267</span>
                                                    </td>

                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6">
                            <div class="card h-100">
                                <div class="card-body py-2 flex-grow-0">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h5 class="title">Projects Stats</h5>
                                        </div>
                                        <div class="card-tools d-none d-sm-inline-block"><a href="#"
                                                class="btn btn-sm btn-soft btn-secondary">Export Report</a>
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
