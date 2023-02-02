<div class="nk-sidebar nk-sidebar-fixed is-theme" id="sidebar">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand"><a href="#" class="logo-link">
                <div class="logo-wrap">
                <img src="{{url('assets/images/logo/logo1.png')}}" alt="Image"/>
                </div>
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
                       @include('organization.partials.hr_sidebar')
                </ul>

            </div>
        </div>
    </div>
</div>
