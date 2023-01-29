@extends('omis.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="g-gs">
                        <div class="col-xxl-12">
                            <div class="row">
                                <div class="col-md-9"></div>
                                <div class="col-md-3">
                                    <div class=" h-100">

                                            <div class="d-flex flex-column flex-sm-row-reverse align-items-sm-center justify-content-sm-between">
                                                <div class="mb-5 mt-4 mt-sm-0">

                                                    @if(empty(auth()->user()->todayAttendance()))
                                                    <button class="btn btn-primary btn-checkIn" >
                                                        + Clock In
                                                    </button>
                                                @else
                                                    <form action="{{route('hr.attendence.checkOut',auth()->user()->todayAttendance()->attendence_id)}}" method="POST">
                                                        @csrf
                                                        <div class="form-group ">
                                                            <input type="hidden" value="{{auth()->user()->id}}">
                                                        <button type="submit" class="btn btn-danger btn-checkOut" >
                                                                + Clock Out
                                                            </button>
                                                    </form>

                                                    @endif
                                                </div>

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
                                        <div
                                        class="media media-middle media-circle media-sm text-bg-primary-soft">
                                        <em class="icon icon-md ni ni-bar-chart-fill"></em></div>
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
                                        <div
                                            class="media media-middle media-circle media-sm text-bg-success-soft">
                                            <em class="icon icon-md ni ni-user-alt-fill"></em></div>
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
                                            <h4 class="title">Total Projects</h4>
                                        </div>
                                        <div
                                            class="media media-middle media-circle media-sm text-bg-warning-soft">
                                            <em class="icon icon-md ni ni-bar-chart-fill"></em></div>
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
                                        <div
                                            class="media media-middle media-circle media-sm text-bg-info-soft">
                                            <em class="icon icon-md ni ni-tag-fill"></em></div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="amount h1">2,153</div>
                                     
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                     
                        <div class="col-xxl-6">
                            <div class="card h-100">
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
                                                <th class="tb-col"><span
                                                        class="overline-title">Name</span></th>
                                                <th class="tb-col tb-col-end"><span
                                                        class="overline-title">Department</span></th>
                                                <th class="tb-col tb-col-end"><span
                                                        class="overline-title">Designation</span></th>
                                                <th class="tb-col tb-col-end"><span
                                                        class="overline-title">Status</span></th>
                                                                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $employees as $employee )
                                            {{-- {{ dd($employee) }} --}}
                                            <tr>
                                                <td class="tb-col">
                                                    <div class="media-group">
                                                    
                                                        <div class="media-text"><span
                                                                class="title">{{  $employee->firstName }} {{  $employee->middleName }} {{  $employee->lastName }}</span></div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-end"><span
                                                        class="small">{{  $employee->department_id }} </span></td>
                                                <td class="tb-col tb-col-end"><span
                                                        class="change up small">{{  $employee->designation_id }}</span></td>
                                                <td class="tb-col tb-col-end"><span class="small">267</span>
                                                </td>
                                               
                                            </tr>
                                            
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xxl-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h5 class="title">Sessions Device</h5>
                                        </div>
                                        <div class="card-tools"><em class="icon-hint icon ni ni-help-fill"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Sessions from device"></em></div>
                                    </div>
                                    <div class="nk-chart-analytics-session-device mt-4"><canvas
                                            data-nk-chart="doughnut" id="sessionsDevice"></canvas></div>
                                    <div
                                        class="chart-legend-group justify-content-around pt-4 flex-wrap gap g-2">
                                        <div class="chart-legend"><span class="dot bg-info"></span>
                                            <div class="chart-legend-text">
                                                <div class="title">Mobile</div>
                                            </div>
                                        </div>
                                        <div class="chart-legend"><span class="dot bg-warning"></span>
                                            <div class="chart-legend-text">
                                                <div class="title">Tablet</div>
                                            </div>
                                        </div>
                                        <div class="chart-legend"><span class="dot bg-success"></span>
                                            <div class="chart-legend-text">
                                                <div class="title">Desktop</div>
                                            </div>
                                        </div>
                                        <div class="chart-legend"><span class="dot bg-purple"></span>
                                            <div class="chart-legend-text">
                                                <div class="title">Others</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xxl-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h5 class="title">Recent Activity</h5>
                                        </div>
                                    </div>
                                    <div class="nk-timeline nk-timeline-center mt-4">
                                        <div class="nk-timeline-group">
                                            <div class="nk-timeline-heading">
                                                <h6 class="overline-title">today</h6>
                                            </div>
                                            <ul class="nk-timeline-list">
                                                <li class="nk-timeline-item">
                                                    <div class="nk-timeline-item-inner">
                                                        <div class="nk-timeline-symbol">
                                                            <div
                                                                class="media media-md media-middle media-circle text-bg-info">
                                                                <em class="icon ni ni-user"></em></div>
                                                        </div>
                                                        <div class="nk-timeline-content">
                                                            <p class="small"><strong>Nick Mark</strong>
                                                                mentioned <strong>Sara Smith</strong> in a
                                                                new post</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nk-timeline-item">
                                                    <div class="nk-timeline-item-inner">
                                                        <div class="nk-timeline-symbol">
                                                            <div
                                                                class="media media-md media-middle media-circle text-bg-warning">
                                                                <em class="icon ni ni-signout"></em></div>
                                                        </div>
                                                        <div class="nk-timeline-content">
                                                            <p class="small">The post <strong>Post
                                                                    Name</strong> was removed by
                                                                <strong>Nick Mark</strong></p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nk-timeline-item">
                                                    <div class="nk-timeline-item-inner">
                                                        <div class="nk-timeline-symbol">
                                                            <div
                                                                class="media media-md media-middle media-circle text-bg-success">
                                                                <em class="icon ni ni-file-text"></em></div>
                                                        </div>
                                                        <div class="nk-timeline-content">
                                                            <p class="small"><strong>Patrick
                                                                    Sullivan</strong> published a new
                                                                <strong>post</strong> </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nk-timeline-group">
                                            <div class="nk-timeline-heading">
                                                <h6 class="overline-title">yesterday</h6>
                                            </div>
                                            <ul class="nk-timeline-list">
                                                <li class="nk-timeline-item">
                                                    <div class="nk-timeline-item-inner">
                                                        <div class="nk-timeline-symbol">
                                                            <div
                                                                class="media media-md media-middle media-circle text-bg-info">
                                                                <em class="icon ni ni-shuffle"></em></div>
                                                        </div>
                                                        <div class="nk-timeline-content">
                                                            <p class="small"><strong>240+</strong> users
                                                                have subscribed to Newsletter #1 </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nk-timeline-item">
                                                    <div class="nk-timeline-item-inner">
                                                        <div class="nk-timeline-symbol">
                                                            <div
                                                                class="media media-md media-middle media-circle text-bg-success">
                                                                <em class="icon ni ni-signout"></em></div>
                                                        </div>
                                                        <div class="nk-timeline-content">
                                                            <p class="small">The post <strong>Post
                                                                    Name</strong> was suspended by
                                                                <strong>Nick Mark</strong> </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h5 class="title">Web Sessions by Region</h5>
                                        </div>
                                        <div class="card-tools"><em class="icon-hint icon ni ni-help-fill"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Web Sessions from region"></em></div>
                                    </div>
                                    <div class="nk-chart-analytics-session-region-map mt-3 mx-auto">
                                        <div class="js-svgmap js-svgmap-zoom-off" id="svgWorldMap"></div>
                                    </div>
                                    <div
                                        class="list-group-heading d-flex align-items-center justify-content-between">
                                        <h6 class="title">Top Region</h6>
                                        <h6 class="title">Sessions</h6>
                                    </div>
                                    <ul class="list-group list-group-borderless list-group-sm">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center smaller">
                                            <span class="title">United States</span><span
                                                class="text">8,465</span></li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center smaller">
                                            <span class="title">United Kingdom</span><span
                                                class="text">6,423</span></li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center smaller">
                                            <span class="title">Canada</span><span class="text">5,764</span>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center smaller">
                                            <span class="title">Germany</span><span
                                                class="text">1,374</span></li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center smaller">
                                            <span class="title">Bangladesh</span><span
                                                class="text">890</span></li>
                                    </ul>
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
                    <form action="{{route('hr.attendence.checkIn')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <input type="hidden" value="{{auth()->user()->id}}">
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
                                <?php createButton("btn-primary","","Save"); ?>
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
    </script>
@endsection

