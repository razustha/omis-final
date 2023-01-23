@include("omis/partials/headerincludes")

<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg">
    <div class="nk-app-root">
        <div class="nk-main">
            @include("omis/partials/sidebar")
            <div class="nk-wrap">
                @include("omis/partials/header")
                <div class="nk-content">
                    <div class="container">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="row g-gs">
                                    <div class="col-xxl-7">
                                        <div class="row g-gs">
                                            <div class="col-md-6">
                                                <div class="card h-100">
                                                    <div class="card-body">
                                                        <div class="d-flex flex-column flex-sm-row-reverse align-items-sm-center justify-content-sm-between">
                                                            <div class="nk-chart-project-active js-pureknob" data-readonly="true" data-size="110" data-angle-offset="0.4" data-angle-start="1" data-angle-end="1" data-value="73" data-track-width="0.15"></div>
                                                            <div class="card-title mb-0 mt-4 mt-sm-0">
                                                                <h5 class="title mb-3 mb-xl-5">Active Projects</h5>
                                                                <div class="amount h1">284</div>
                                                                <div class="d-flex align-items-center smaller flex-wrap">
                                                                    <div class="change up"><em class="icon ni ni-upword-alt-fill"></em> +2.7%</div><span class="text-light"> Projects this month</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card h-100">
                                                    <div class="card-body">
                                                        <div class="d-flex flex-column flex-sm-row-reverse align-items-sm-center justify-content-sm-between gx-xl-5">
                                                            <div class="nk-chart-project-earnings"><canvas data-nk-chart="bar" id="earningsChart"></canvas></div>
                                                            <div class="card-title mb-0 mt-4 mt-sm-0">
                                                                <h5 class="title mb-3 mb-xl-5">Projects Earnings</h5>
                                                                <div class="amount h1">$169</div>
                                                                <div class="d-flex align-items-center smaller flex-wrap">
                                                                    <div class="change up"><em class="icon ni ni-upword-alt-fill"></em> 10.5%</div><span class="text-light">From last Week</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card h-100">
                                                    <div class="card-body">
                                                        <div class="d-flex flex-column flex-sm-row-reverse align-items-sm-center justify-content-sm-between gx-xl-5">
                                                            <div class="nk-chart-project-earnings"><canvas data-nk-chart="line" id="totalClientsChart"></canvas></div>
                                                            <div class="card-title mb-0 mt-4 mt-sm-0">
                                                                <h5 class="title mb-3 mb-xl-5">Total Clients</h5>
                                                                <div class="amount h1">970</div>
                                                                <div class="d-flex align-items-center smaller flex-wrap">
                                                                    <div class="change up"><em class="icon ni ni-upword-alt-fill"></em> 2%</div><span class="text-light">Than last month</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card h-100">
                                                    <div class="card-body">
                                                        <div class="d-flex flex-column flex-sm-row-reverse align-items-sm-center justify-content-sm-between gx-xl-5">
                                                            <div class="nk-chart-project-done js-pureknob" data-readonly="true" data-size="136" data-angle-offset="-.5" data-angle-start=".7" data-angle-end=".7" data-value="65" data-color-fg="#F24A8B" data-track-width="0.15"><span class="knob-title small text-light">Task Done</span></div>
                                                            <div class="card-title mb-0 mt-4 mt-sm-0">
                                                                <h5 class="title mb-3 mb-xl-5">Total Task Done</h5>
                                                                <div class="amount h1">768</div>
                                                                <div class="d-flex align-items-center smaller flex-wrap">
                                                                    <div class="change up"><em class="icon ni ni-upword-alt-fill"></em> 14.2%</div><span class="text-light">From last week</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-5">
                                        <div class="card h-100 col-sep">
                                            <div class="card-body py-2 flex-grow-0">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h5 class="title">Projects Overview</h5>
                                                    </div>
                                                    <div class="card-tools">
                                                        <div class="dropdown"><a href="#" class="btn btn-sm btn-icon btn-zoom me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                            <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
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
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body d-flex flex-column justify-content-between">
                                                <div class="row g-gs text-center">
                                                    <div class="col-6 col-sm-3">
                                                        <div class="amount h2 mb-0 text-success">946</div><span class="smaller">Total Projects</span>
                                                    </div>
                                                    <div class="col-6 col-sm-3">
                                                        <div class="amount h2 mb-0 text-primary">280</div><span class="smaller">Active Projects</span>
                                                    </div>
                                                    <div class="col-6 col-sm-3">
                                                        <div class="amount h2 mb-0 text-secondary">586</div><span class="smaller">Revenue</span>
                                                    </div>
                                                    <div class="col-6 col-sm-3">
                                                        <div class="amount h2 mb-0 text-warning">9,453</div><span class="smaller">Working Hours</span>
                                                    </div>
                                                </div>
                                                <div class="nk-chart-project-overview mt-3"><canvas data-nk-chart="bar" id="projectsOverviewChart"></canvas></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-7">
                                        <div class="card h-100">
                                            <div class="card-body py-2 flex-grow-0">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h5 class="title">Projects Stats</h5>
                                                    </div>
                                                    <div class="card-tools d-none d-sm-inline-block"><a href="#" class="btn btn-sm btn-soft btn-secondary">Export Report</a></div>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-middle mb-0">
                                                    <thead class="table-light table-head-sm">
                                                        <tr>
                                                            <th class="tb-col"><span class="overline-title">items</span></th>
                                                            <th class="tb-col tb-col-end tb-col-xxl"><span class="overline-title">budget</span></th>
                                                            <th class="tb-col tb-col-end tb-col-sm"><span class="overline-title">progress</span></th>
                                                            <th class="tb-col tb-col-end  tb-col-xxl"><span class="overline-title">asign</span></th>
                                                            <th class="tb-col tb-col-end"><span class="overline-title">status</span></th>
                                                            <th class="tb-col tb-col-end"><span class="overline-title"><span class="d-none d-sm-inline-blcok">due</span> date</span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="tb-col">
                                                                <div class="media-group">
                                                                    <div class="media media-md media-middle media-circle"><img src="images/product/a.jpg" alt=""></div>
                                                                    <div class="media-text"><a href="#" class="title">Create Wireframe</a><span class="text smaller">Esther Howard</span></div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-col tb-col-end tb-col-xxl"><span class="small">$32,400</span></td>
                                                            <td class="tb-col tb-col-end tb-col-sm">
                                                                <div class="d-flex align-items-center"><span class="small me-1">63%</span>
                                                                    <div class="progress progress-sm w-100">
                                                                        <div class="progress-bar bg-success" data-progress="63%"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-col tb-col-end  tb-col-xxl">
                                                                <div class="media-group media-group-overlap">
                                                                    <div class="media media-xs media-circle media-border border-white" data-bs-toggle="tooltip" data-bs-placement="top" title="David"><img src="images/avatar/a.jpg" alt=""></div>
                                                                    <div class="media media-xs media-circle media-border border-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Sanjoy"><img src="images/avatar/b.jpg" alt=""></div>
                                                                    <div class="media media-xs media-circle media-border border-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Kinchit"><img src="images/avatar/c.jpg" alt=""></div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-col tb-col-end"><span class="badge text-bg-info-soft">In progress</span></td>
                                                            <td class="tb-col tb-col-end"><span class="small">07 Sep 2022</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tb-col">
                                                                <div class="media-group">
                                                                    <div class="media media-md media-middle media-circle"><img src="images/product/b.jpg" alt=""></div>
                                                                    <div class="media-text"><a href="#" class="title">Divine Opulence</a><span class="text smaller">Jenny Wilson</span></div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-col tb-col-end tb-col-xxl"><span class="small">$265,816</span></td>
                                                            <td class="tb-col tb-col-end tb-col-sm">
                                                                <div class="d-flex align-items-center"><span class="small me-1">100%</span>
                                                                    <div class="progress progress-sm w-100">
                                                                        <div class="progress-bar bg-success" data-progress="100%"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-col tb-col-end tb-col-xxl">
                                                                <div class="media-group media-group-overlap">
                                                                    <div class="media media-xs media-circle media-border border-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Alex Smith"><img src="images/avatar/a.jpg" alt=""></div>
                                                                    <div class="media media-xs media-circle media-border border-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Alex Smith"><img src="images/avatar/b.jpg" alt=""></div>
                                                                    <div class="media media-xs media-circle media-border border-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Alex Smith"><img src="images/avatar/c.jpg" alt=""></div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-col tb-col-end"><span class="badge text-bg-success-soft">Completed</span></td>
                                                            <td class="tb-col tb-col-end"><span class="small">12 Aug 2022</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tb-col">
                                                                <div class="media-group">
                                                                    <div class="media media-md media-middle media-circle"><img src="images/product/c.jpg" alt=""></div>
                                                                    <div class="media-text"><a href="#" class="title">Charto CRM</a><span class="text smaller">Cody Fisher</span></div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-col tb-col-end tb-col-xxl"><span class="small">$9,538</span></td>
                                                            <td class="tb-col tb-col-end tb-col-sm">
                                                                <div class="d-flex align-items-center"><span class="small me-1">30%</span>
                                                                    <div class="progress progress-sm w-100">
                                                                        <div class="progress-bar bg-success" data-progress="30%"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-col tb-col-end tb-col-xxl">
                                                                <div class="media-group media-group-overlap">
                                                                    <div class="media media-xs media-circle media-border border-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Alex Smith"><img src="images/avatar/a.jpg" alt=""></div>
                                                                    <div class="media media-xs media-circle media-border border-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Alex Smith"><img src="images/avatar/b.jpg" alt=""></div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-col tb-col-end"><span class="badge text-bg-info-soft">In progress</span></td>
                                                            <td class="tb-col tb-col-end"><span class="small">18 Oct 2022</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tb-col">
                                                                <div class="media-group">
                                                                    <div class="media media-md media-middle media-circle"><img src="images/product/d.jpg" alt=""></div>
                                                                    <div class="media-text"><a href="#" class="title">Mountain Trip Kit </a><span class="text smaller">Savannah Nguyen</span></div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-col tb-col-end tb-col-xxl"><span class="small">$12,930</span></td>
                                                            <td class="tb-col tb-col-end tb-col-sm">
                                                                <div class="d-flex align-items-center"><span class="small me-1">0%</span>
                                                                    <div class="progress progress-sm w-100">
                                                                        <div class="progress-bar bg-success" data-progress="0%"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-col tb-col-end tb-col-xxl">
                                                                <div class="media-group media-group-overlap">
                                                                    <div class="media media-xs media-circle media-border border-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Jhon"><img src="images/avatar/a.jpg" alt=""></div>
                                                                    <div class="media media-xs media-circle media-border border-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Marku"><img src="images/avatar/b.jpg" alt=""></div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-col tb-col-end"><span class="badge text-bg-warning-soft">Pending</span></td>
                                                            <td class="tb-col tb-col-end"><span class="small">25 Jul 2022</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tb-col">
                                                                <div class="media-group">
                                                                    <div class="media media-md media-middle media-circle"><img src="images/product/e.jpg" alt=""></div>
                                                                    <div class="media-text"><a href="#" class="title">Chat Application</a><span class="text smaller">Jane Cooper</span></div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-col tb-col-end tb-col-xxl"><span class="small">$184,384</span></td>
                                                            <td class="tb-col tb-col-end tb-col-sm">
                                                                <div class="d-flex align-items-center"><span class="small me-1">80%</span>
                                                                    <div class="progress progress-sm w-100">
                                                                        <div class="progress-bar bg-success" data-progress="80%"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-col tb-col-end tb-col-xxl">
                                                                <div class="media-group media-group-overlap">
                                                                    <div class="media media-xs media-circle media-border border-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Kevin"><img src="images/avatar/a.jpg" alt=""></div>
                                                                    <div class="media media-xs media-circle media-border border-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Ebadot"><img src="images/avatar/b.jpg" alt=""></div>
                                                                    <div class="media media-xs media-circle media-border border-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Alex Smith"><img src="images/avatar/c.jpg" alt=""></div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-col tb-col-end"><span class="badge text-bg-info-soft">In progress</span></td>
                                                            <td class="tb-col tb-col-end"><span class="small">07 Sep 2022</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tb-col">
                                                                <div class="media-group">
                                                                    <div class="media media-md media-middle media-circle"><img src="images/product/a.jpg" alt=""></div>
                                                                    <div class="media-text"><a href="#" class="title">Mountain Trip Kit </a><span class="text smaller">Jane Cooper</span></div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-col tb-col-end tb-col-xxl"><span class="small">$12,930</span></td>
                                                            <td class="tb-col tb-col-end tb-col-sm">
                                                                <div class="d-flex align-items-center"><span class="small me-1">36%</span>
                                                                    <div class="progress progress-sm w-100">
                                                                        <div class="progress-bar bg-success" data-progress="36%"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-col tb-col-end tb-col-xxl">
                                                                <div class="media-group media-group-overlap">
                                                                    <div class="media media-xs media-circle media-border border-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Jane Smith"><img src="images/avatar/a.jpg" alt=""></div>
                                                                    <div class="media media-xs media-circle media-border border-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Alex Smith"><img src="images/avatar/b.jpg" alt=""></div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-col tb-col-end"><span class="badge text-bg-info-soft">In progress</span></td>
                                                            <td class="tb-col tb-col-end"><span class="small">25 Jul 2022</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-5">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="row g-gs">
                                                    <div class="col-sm-6">
                                                        <div class="card-title">
                                                            <div class="mb-1 small">Next Delivery</div>
                                                            <h2 class="title">Chat Application</h2>
                                                        </div>
                                                        <div class="media-group my-4">
                                                            <div class="media media-md media-middle media-circle"><img src="images/avatar/a.jpg" alt=""></div>
                                                            <div class="media-text"><span class="title">Jenny Wilson</span><span class="text smaller">Manager</span></div>
                                                        </div>
                                                        <p class="small">Flat cartoony illustrations with vivid unblended colors and asymmetrical beautiful purple hair lady</p>
                                                        <div class="list-group-dotted mt-4 mb-5">
                                                            <div class="list-group-wrap">
                                                                <div class="p-3">
                                                                    <div class="h5 mb-0">25 Oct 2022</div><span class="smaller">Due Date</span>
                                                                </div>
                                                                <div class="p-3">
                                                                    <div class="h5 mb-0">$58,642</div><span class="smaller">Budget</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-wrap gap g-3">
                                                            <div class="gap-col"><a href="#" class="btn btn-sm btn-soft btn-primary"><span>View Project</span><em class="icon ni ni-external-alt"></em></a></div>
                                                            <div class="gap-col">
                                                                <div class="media-group media-group-overlap"><a href="#" class="media media-sm media-circle media-border border-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Alex Smith"><img src="images/avatar/a.jpg" alt=""></a><a href="#" class="media media-sm media-circle media-border border-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Kevin Martin"><img src="images/avatar/b.jpg" alt=""></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-end"><img src="images/product/a-lg.jpg" alt="" class="rounded img-cover"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xxl-4">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="card-title-group">
                                                    <div class="card-title mb-0">
                                                        <h5 class="title">Avg. Agent Earnings</h5>
                                                    </div>
                                                    <div class="card-tools">
                                                        <div class="dropdown"><a href="#" class="btn btn-sm btn-icon btn-zoom me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                            <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
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
                                                    </div>
                                                </div>
                                                <div class="amount-wrap mt-3 mb-4">
                                                    <div class="amount h2 mb-1">$238,560.93</div>
                                                    <div class="d-flex align-items-center smaller">
                                                        <div class="change up"><em class="icon ni ni-trend-up"></em> +2%</div><span>than last Week</span>
                                                    </div>
                                                </div>
                                                <div class="list-group-dotted">
                                                    <div class="list-group-wrap flex-column">
                                                        <div class="py-1 px-2">
                                                            <div class="d-flex flex-wrap justify-content-between"><span class="small">2:30 PM</span><span class="small">$5,256.26</span><span class="change down small">-129.34</span></div>
                                                        </div>
                                                        <div class="py-1 px-2">
                                                            <div class="d-flex flex-wrap justify-content-between"><span class="small">3:55 PM</span><span class="small">$5,837.34</span><span class="change up small">+539.84</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-chart-project-avg-earnings mt-4"><canvas data-nk-chart="line" id="avgEarningsChart"></canvas></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xxl-4">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h5 class="title mb-1">Daily Task</h5>
                                                        <p class="small">Percentage of product a user demands</p>
                                                    </div>
                                                </div>
                                                <ul class="nk-schedule mt-4">
                                                    <li class="nk-schedule-item">
                                                        <div class="nk-schedule-item-inner">
                                                            <div class="nk-schedule-symbol active"></div>
                                                            <div class="nk-schedule-content"><span class="smaller">10:00</span>
                                                                <div class="h6 mb-0">IOS Dev Team Meeting</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nk-schedule-item">
                                                        <div class="nk-schedule-item-inner">
                                                            <div class="nk-schedule-symbol active"></div>
                                                            <div class="nk-schedule-content"><span class="smaller">12:00</span>
                                                                <div class="h6 mb-0">Believing is the absence of doubt</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nk-schedule-item">
                                                        <div class="nk-schedule-item-inner">
                                                            <div class="nk-schedule-symbol"></div>
                                                            <div class="nk-schedule-content"><span class="smaller">16:00</span>
                                                                <div class="h6 mb-0">Start with a baseline</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nk-schedule-item">
                                                        <div class="nk-schedule-item-inner">
                                                            <div class="nk-schedule-symbol"></div>
                                                            <div class="nk-schedule-content"><span class="smaller">18:00</span>
                                                                <div class="h6 mb-0">Break through self doubt and fear</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4">
                                        <div class="card h-100">
                                            <div class="card-body py-2 flex-grow-0">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h5 class="title">Members of Employee</h5>
                                                    </div>
                                                    <div class="card-tools d-none d-sm-inline-block"><a href="#" class="btn btn-sm btn-soft btn-secondary"><span>Add Member</span></a></div>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-middle mb-0">
                                                    <thead class="table-light table-head-sm">
                                                        <tr>
                                                            <th class="tb-col"><span class="overline-title">members</span></th>
                                                            <th class="tb-col tb-col-end"><span class="overline-title">tasks</span></th>
                                                            <th class="tb-col tb-col-end tb-col-sm"><span class="overline-title">status</span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="tb-col">
                                                                <div class="media-group">
                                                                    <div class="media media-md media-middle media-circle"><img src="images/product/a.jpg" alt=""></div>
                                                                    <div class="media-text"><span class="title">Timothy Smith</span><span class="text smaller">Product Manager</span></div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-col tb-col-end"><span class="small">238</span></td>
                                                            <td class="tb-col tb-col-end tb-col-sm">
                                                                <div class="nk-chart-knob js-pureknob" data-size="24" data-value="60" data-track-width="0.3" data-angle-offset="0.4" data-hide-value="true" data-color-fg="#22C55E"></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tb-col">
                                                                <div class="media-group">
                                                                    <div class="media media-md media-middle media-circle"><img src="images/product/b.jpg" alt=""></div>
                                                                    <div class="media-text"><span class="title">Alexis Clarke</span><span class="text smaller">React Developer</span></div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-col tb-col-end"><span class="small">107</span></td>
                                                            <td class="tb-col tb-col-end tb-col-sm">
                                                                <div class="nk-chart-knob js-pureknob" data-size="24" data-value="42" data-track-width="0.3" data-hide-value="true" data-angle-offset="0.4" data-color-fg="#0EA5E9"></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tb-col">
                                                                <div class="media-group">
                                                                    <div class="media media-md media-middle media-circle"><img src="images/product/c.jpg" alt=""></div>
                                                                    <div class="media-text"><span class="title">Herbert Stokes</span><span class="text smaller">Lead Designer</span></div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-col tb-col-end"><span class="small">76</span></td>
                                                            <td class="tb-col tb-col-end tb-col-sm">
                                                                <div class="nk-chart-knob js-pureknob" data-size="24" data-value="50" data-track-width="0.3" data-hide-value="true" data-angle-offset="0.4" data-color-fg="#6200EE"></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tb-col">
                                                                <div class="media-group">
                                                                    <div class="media media-md media-middle media-circle"><img src="images/product/d.jpg" alt=""></div>
                                                                    <div class="media-text"><span class="title">Nancy Martino</span><span class="text smaller">UI/UX Designer</span></div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-col tb-col-end"><span class="small">683</span></td>
                                                            <td class="tb-col tb-col-end tb-col-sm">
                                                                <div class="nk-chart-knob js-pureknob" data-size="24" data-value="34" data-track-width="0.3" data-hide-value="true" data-angle-offset="0.4" data-color-fg="#FBBF24"></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tb-col">
                                                                <div class="media-group">
                                                                    <div class="media media-md media-middle media-circle"><img src="images/product/e.jpg" alt=""></div>
                                                                    <div class="media-text"><span class="title">Michael Morris</span><span class="text smaller">Lead Developer</span></div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-col tb-col-end"><span class="small">395</span></td>
                                                            <td class="tb-col tb-col-end tb-col-sm">
                                                                <div class="nk-chart-knob js-pureknob" data-size="24" data-value="26" data-track-width="0.3" data-hide-value="true" data-angle-offset="0.4" data-color-fg="#6200EE"></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tb-col">
                                                                <div class="media-group">
                                                                    <div class="media media-md media-middle media-circle"><img src="images/product/b.jpg" alt=""></div>
                                                                    <div class="media-text"><span class="title">Glen Matney</span><span class="text smaller">Lead Designer</span></div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-col tb-col-end"><span class="small">46</span></td>
                                                            <td class="tb-col tb-col-end tb-col-sm">
                                                                <div class="nk-chart-knob js-pureknob" data-size="24" data-value="46" data-track-width="0.3" data-hide-value="true" data-angle-offset="0.4" data-color-fg="#6200EE"></div>
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
                </div>
                @include("omis/partials/footer")
            </div>
        </div>
    </div>
</body>
@include("omis/partials/footerincludes");