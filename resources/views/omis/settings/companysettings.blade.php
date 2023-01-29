@extends('omis.partials.layouts')
    @section('content')

<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg">
    <div class="nk-app-root">
        <div class="nk-main">
            @include("omis/partials/sidebar")
            <div class="nk-wrap">
                @include("omis/partials/header")


    <div class="nk-content nk-content-inner">
        <div class="nk-content-inner row">


            <div class="nk-content-body">
                <div class="nk-ibx" data-ibx-collapse="xl" id="ibxWrap">
                    <div class="nk-ibx-aside" data-simplebar id="ibxAside" data-overlay="true" data-break="xl">



                        <div class="nk-ibx-aside-header"><button class="btn btn-primary btn-pill"><span>Company
                                    Settings</span></button></div>

                        <ul class="nk-ibx-menu nav flex-column nav-pills">
                            <li><a href="#v-pills-home" class="nk-ibx-menu-item active" data-bs-toggle="pill"><em class="icon ni ni-inbox"></em><span>Global Setting</span></a></li>
                            <li><a href="#v-pills-sms" class="nk-ibx-menu-item" data-bs-toggle="pill"><em class="icon ni ni-star"></em><span>SMS Setting</span></a></li>
                            <li><a href="#v-pills-smsgateway" class="nk-ibx-menu-item" data-bs-toggle="pill"><em class="icon ni ni-whatsapp"></em><span>SMS Gateway</span></a></li>
                            <li><a href="#v-pills-email" class="nk-ibx-menu-item" data-bs-toggle="pill"><em class="icon ni ni-clock"></em><span>Email Setting</span></a></li>
                            <li><a href="#v-pills-notification" class="nk-ibx-menu-item" data-bs-toggle="pill"><em class="icon ni ni-send-alt"></em><span>Notification Setting</span></a></li>
                            <li><a href="#v-pills-emailmessage" class="nk-ibx-menu-item" data-bs-toggle="pill"><em class="icon ni ni-mail"></em><span>Email Message</span></a></li>
                            <li><a href="#v-pills-emailgroup" class="nk-ibx-menu-item" data-bs-toggle="pill"><em class="icon ni ni-emails"></em><span>Email Group</span></a></li>
                            <li><a href="#v-pills-usertable" class="nk-ibx-menu-item" data-bs-toggle="pill"><em class="icon ni ni-user"></em><span>User Table</span></a></li>

                        </ul>
                    </div>



                    <div class="nk-ibx-body px-4">
                        <div class="tab-content me-2">


                            <div class="tab-pane fade show active" id="v-pills-home">
                                <div class="card">
                                    <div class="card-body">
                                
                                        <form class="form-group" action="#" id="form-1">
                                            <div class="row g-3 gx-gs">
                                                <div class="col-md-6">
                                                    <?php createLabel("companyName", "form-label col-form-label main-head", "Company Name") ?>
                                                    <?php createInput("text", "companyName", "companyName", "", "", "", " Company Name") ?>
                                                </div>
                                                <div class="col-md-6">
                                                    <?php createLabel("companyEmail", "form-label col-form-label main-head", "Email") ?>
                                                    <?php createInput("email", "companyEmail", "companyEmail", "", "", "", "Email") ?>
                                                </div>
                                                <div class="col-md-6">
                                                    <?php createLabel("companyAddress", "form-label col-form-label main-head", "Address") ?>
                                                    <?php createInput("text", "companyAddress", "companyAddress", "", "", "", "Address") ?>
                                                </div>
                                
                                                <div class="col-md-6">
                                                    <?php createLabel("companyState", "form-label col-form-label main-head", "State") ?>
                                                    <?php createInput("text", "companyState", "companyState", "", "", "", "State") ?>
                                                </div>
                                                <div class="col-md-6">
                                                    <?php createLabel("phoneNo", "form-label col-form-label main-head", "Phone") ?>
                                                    <?php createInput("number", "phoneNo", "phoneNo", "", "", "", "Phone") ?>
                                                </div>
                                                <div class="col-md-6">
                                                    <?php createLabel("hostName", "form-label col-form-label main-head", "Favicon") ?>
                                                    <?php createInput("text", "hostName", "hostName", "", "", "", "Enter Hostname") ?>
                                                </div>
                                                <div class="col-md-12">
                                                    <?php createLabel("webName", "form-label col-form-label main-head", "Website") ?>
                                                    <?php createInput("text", "webName", "webName", "", "", "", "Website") ?><br>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="dropzoneFile1" class="form-label">Logo</label>
                                                        <div class="form-control-wrap">
                                                            <div class="js-upload" id="dropzoneFile1">
                                                                <div class="dz-message" data-dz-message>
                                                                    <div class="dz-message-icon"></div>
                                                                    <span class="dz-message-text">Drag and drop file</span>
                                                                    <div class="dz-message-btn mt-2">
                                                                        <?php createButton("btn btn-primary", "submit", "Upload") ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                
                                                <div class="col-md-12">
                                                    <?php createButton("btn btn-primary", "submit", "Submit") ?>
                                                </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                            </div>
                                
                                        </form>
                                    </div>
                                </div>
                                {{-- @include('global-setting') --}}
                            </div>

                            <div class="tab-pane fade" id="v-pills-sms">
                                {{-- @include('sms-setting') --}}
                            </div>

                            <div class="tab-pane fade" id="v-pills-smsgateway">
                                {{-- @include('sms-gateway') --}}
                            </div>


                            <div class="tab-pane fade" id="v-pills-email">
                                {{-- @include('email-setting') --}}
                            </div>


                            <div class="tab-pane fade" id="v-pills-notification">
                                {{-- @include('notification-setting') --}}
                            </div>


                            <div class="tab-pane fade" id="v-pills-emailmessage">
                                {{-- @include('email-message') --}}
                            </div>

                            <div class="tab-pane fade" id="v-pills-emailgroup">
                                {{-- @include('email-group') --}}
                            </div>

                            <div class="tab-pane fade" id="v-pills-usertable">
                                {{-- @include('user-table') --}}
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
@endsection