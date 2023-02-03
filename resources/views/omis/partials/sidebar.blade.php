<div class="nk-sidebar nk-sidebar-fixed is-theme" id="sidebar">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand"><a href="#" class="logo-link">
                <div class="logo-wrap">
                    <img src="assets/images/logo/logo1.png">
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
    @if(auth()->user()->user_type == 'EMPLOYEE')

    @else
    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    @role('super')


                    this is for testing data

                    <li class="nk-menu-item">
                        <a href="{{ route('dashboard') }}" class="nk-menu-link ">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li>
                    @endrole
                    @if(auth()->user()->can('master-country-index'))
                    <li class="nk-menu-item">
                        <a href="{{ route('dashboard') }}" class="nk-menu-link ">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li>
                    @endif

                    <li class="nk-menu-heading">
                        <h6 class="overline-title">Settings</h6>
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-list-index-fill"></em></span>
                            <span class="nk-menu-text">User Management</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{route('setting.users.index')}}" class="nk-menu-link"><span
                                        class="nk-menu-text">User</span></a></li>
                            <li class="nk-menu-item"><a href="{{route('setting.role.index')}}" class="nk-menu-link"><span
                                        class="nk-menu-text">Role</span></a></li>
                            <li class="nk-menu-item"><a href="{{route('setting.permission.index')}}" class="nk-menu-link"><span
                                        class="nk-menu-text">Permissions</span></a></li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                            <span class="nk-menu-text">Settings</span></a>
                        <ul class="nk-menu-sub">

                            <li class="nk-menu-item"><a href="{{ route('settings.organization.index') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Organization</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('settings.organizationsettings.index') }}" class="nk-menu-link"><span
                                            class="nk-menu-text">Organization Setting</span></a></li>

                        </ul>
                    </li>
                    {{-- <li class="nk-menu-item ">
                        <a href="#" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                            <span class="nk-menu-text">Settings</span></a>
                    </li> --}}

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
                                @include('omis.partials.master_sidebar')
                        </ul>
                    </li>
                    <li class="nk-menu-heading">
                        <h6 class="overline-title">Applications Forms</h6>
                    </li>


                                @include('omis.partials.hr_sidebar')


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
    @endif
</div>
