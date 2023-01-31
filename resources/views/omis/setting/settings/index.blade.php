@extends('omis.partials.layouts')
@section('content')

    <div class="nk-content nk-content-inner">
        <div class="nk-content-inner row">


            <div class="nk-content-body">
                <div class="nk-ibx" data-ibx-collapse="xl" id="ibxWrap">
                    <div class="nk-ibx-aside" data-simplebar id="ibxAside" data-overlay="true" data-break="xl">



                        <div class="nk-ibx-aside-header"><button class="btn btn-primary btn-pill"><span>Company
                                    Settings</span></button></div>

                        <ul class="nk-ibx-menu nav flex-column nav-pills">
                            <li><a href="#v-pills-home" class="nk-ibx-menu-item active" data-bs-toggle="pill"><em
                                        class="icon ni ni-inbox"></em><span>Global Setting</span></a></li>
                            <li><a href="#v-pills-sms" class="nk-ibx-menu-item" data-bs-toggle="pill"><em
                                        class="icon ni ni-star"></em><span>SMS Setting</span></a></li>
                            <li><a href="#v-pills-smsgateway" class="nk-ibx-menu-item" data-bs-toggle="pill"><em
                                        class="icon ni ni-whatsapp"></em><span>SMS Gateway</span></a></li>
                            <li><a href="#v-pills-email" class="nk-ibx-menu-item" data-bs-toggle="pill"><em
                                        class="icon ni ni-clock"></em><span>Email Setting</span></a></li>
                            <li><a href="#v-pills-notification" class="nk-ibx-menu-item" data-bs-toggle="pill"><em
                                        class="icon ni ni-send-alt"></em><span>Notification Setting</span></a></li>
                            <li><a href="#v-pills-emailmessage" class="nk-ibx-menu-item" data-bs-toggle="pill"><em
                                        class="icon ni ni-mail"></em><span>Email Message</span></a></li>
                            <li><a href="#v-pills-emailgroup" class="nk-ibx-menu-item" data-bs-toggle="pill"><em
                                        class="icon ni ni-emails"></em><span>Email Group</span></a></li>
                            <li><a href="#v-pills-usertable" class="nk-ibx-menu-item" data-bs-toggle="pill"><em
                                        class="icon ni ni-user"></em><span>User Table</span></a></li>

                        </ul>
                    </div>



                    <div class="nk-ibx-body px-4">
                        <div class="tab-content me-2">


                            <div class="tab-pane fade show active" id="v-pills-home">
                                @include('global-setting')
                            </div>

                            <div class="tab-pane fade" id="v-pills-sms">
                                @include('sms-setting')
                            </div>

                            <div class="tab-pane fade" id="v-pills-smsgateway">
                                @include('sms-gateway')
                            </div>


                            <div class="tab-pane fade" id="v-pills-email">
                                @include('email-setting')
                            </div>


                            <div class="tab-pane fade" id="v-pills-notification">
                                @include('notification-setting')
                            </div>


                            <div class="tab-pane fade" id="v-pills-emailmessage">
                                @include('email-message')
                            </div>

                            <div class="tab-pane fade" id="v-pills-emailgroup">
                                @include('email-group')
                            </div>

                            <div class="tab-pane fade" id="v-pills-usertable">
                                @include('user-table')
                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
