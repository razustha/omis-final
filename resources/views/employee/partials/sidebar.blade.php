<div class="nk-sidebar nk-sidebar-fixed is-theme" id="sidebar">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand"><a href="index-2.html" class="logo-link">
                <div class="logo-wrap">OMIS Projects</div>
            </a>
            <div class="nk-compact-toggle me-n1"><button class="btn btn-md btn-icon text-light btn-no-hover compact-toggle"><em class="icon off ni ni-chevrons-left"></em><em class="icon on ni ni-chevrons-right"></em></button>
            </div>
            <div class="nk-sidebar-toggle me-n1"><button class="btn btn-md btn-icon text-light btn-no-hover sidebar-toggle"><em class="icon ni ni-arrow-left"></em></button></div>
        </div>
    </div>
    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{ route('employee.dashboard') }}" class="nk-menu-link ">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-account-setting-fill"></em></span><span class="nk-menu-text">HR</span></a>
                        <ul class="nk-menu-sub">

                            <li class="nk-menu-item"><a href="{{route('employee.attandance.index')}}" class="nk-menu-link"><span class="nk-menu-text">Attandance</span></a></li>
                            <li class="nk-menu-item"><a href="{{route('employee.leaves.index')}}" class="nk-menu-link"><span class="nk-menu-text">Request Leave</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span class="nk-menu-text">Holiday</span></a></li>
                            
                        </ul>
                    </li>

                   <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-users"></em></span><span class="nk-menu-text">Work</span></a>
                        <ul class="nk-menu-sub">

                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span class="nk-menu-text">Projects</span></a></li>

                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span class="nk-menu-text">Tasks</span></a></li>


                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span class="nk-menu-text">Time Logs</span></a></li>
                        </ul>
                    </li>

                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-coin-eur"></em></span><span class="nk-menu-text">Finance</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span class="nk-menu-text">Expenses</span></a></li>
                        </ul>
                    </li>

                   <li class="nk-menu-item ">
                        <a href="#" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-done"></em></span>
                            <span class="nk-menu-text">Events</span></a>
                    </li>

                   <li class="nk-menu-item ">
                        <a href="#" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                            <span class="nk-menu-text">Settings</span></a>
                    </li>
       

             </ul>
            </div>
        </div>
    </div>
</div>