@extends('omis.partials.layouts')
 @section('content')


    
    
            
            <div class="nk-content nk-content-inner">
                <div class="nk-content-inner row">
                    <div class="nk-content-body">
                        <div class="nk-ibx" data-ibx-collapse="xl" id="ibxWrap">
                          <!--  -->
                            <div
                                class="nk-ibx-aside"
                                data-simplebar
                                id="ibxAside"
                                data-overlay="true"
                                data-break="xl"
                            >
                                <div class="nk-ibx-aside-header">
                                    <button class="btn btn-primary btn-pill">
                                        <span>Organization Settings</span>
                                    </button>
                                </div>

                                <ul
                                    class="nk-ibx-menu nav flex-column nav-pills"
                                >
                                        <a
                                            href="#v-pills-home"
                                            class="nk-ibx-menu-item active"
                                            data-bs-toggle="pill"
                                            ><em class="icon ni ni-inbox"></em
                                            ><span>Global Setting</span></a
                                        >
                                

                                    <li>
                                        <a
                                            href="#v-pills-notification"
                                            class="nk-ibx-menu-item"
                                            data-bs-toggle="pill"
                                            ><em
                                                class="icon ni ni-send-alt"
                                            ></em
                                            ><span
                                                >Notification Setting</span
                                            ></a
                                        >
                                    </li>
                                </ul>
                            </div>
<!--  -->
                            <div class="nk-ibx-body px-4">
                                <div class="tab-content me-2">
                                    <!--  -->
                                    <div
                                        class="tab-pane fade show active p-3"
                                        id="v-pills-home"
                                    >
                                      
                                                <form
                                                    class="form-group"
                                                    action="{{
                                                        route(
                                                            'settings.organizationsettings.update'
                                                        )
                                                    }}"
                                                    id="form-1"
                                                    method="POST"
                                                >
                                                    @csrf @method('PUT')
                                                    <div class="row g-3 gx-gs">
                                                        <div class="col-md-6">
                                                            {{
                                                                createText(
                                                                    "organizationSetting[company_name]",
                                                                    "organizationSetting[company_name]",
                                                                    "Company Name",
                                                                    "",
                                                                    organizationSetting(
                                                                        "company_name"
                                                                    )
                                                                )
                                                            }}
                                                            {{
                                                                createText(
                                                                    "organizationSetting[phone]",
                                                                    "organizationSetting[phone]",
                                                                    "Company Phone",
                                                                    "",
                                                                    organizationSetting(
                                                                        "phone"
                                                                    )
                                                                )
                                                            }}
                                                        </div>
                                                        <div class="col-md-6">
                                                            {{
                                                                createText(
                                                                    "organizationSetting[email]",
                                                                    "organizationSetting[email]",
                                                                    "Company Email",
                                                                    "",
                                                                    organizationSetting(
                                                                        "email"
                                                                    )
                                                                )
                                                            }}
                                                            {{
                                                                createText(
                                                                    "organizationSetting[address]",
                                                                    "organizationSetting[address]",
                                                                    "Company Address",
                                                                    "",
                                                                    organizationSetting(
                                                                        "address"
                                                                    )
                                                                )
                                                            }}
                                                        </div>

                                                        <div class="col-md-12">
                                                            <?php createButton("btn btn-primary", "submit", "Submit") ?>
                                                        </div>
                                                    </div>
                                                </form>
                                           
                                        {{-- @include('global-setting') --}}
                                    </div>
                                   <!--  -->
                                    <div
                                        class="tab-pane fade"
                                        id="v-pills-notification"
                                    >
                                    <!--  -->
                                        <form
                                            class="form-group"
                                            action="{{
                                                route(
                                                    'settings.notificationsettings.update'
                                                )
                                            }}"
                                            id="form-1"
                                            method="POST"
                                        >
                                            @csrf @method('PUT')
                                            <!--  -->
                                            <div class="row g-3 gx-gs">
                                                <div class="col-md-6">
                                                    {{
                                                        createText(
                                                            "notificationSetting[sms]",
                                                            "notificationSetting[sms]",
                                                            "SMS ",
                                                            "",
                                                            notificationSetting(
                                                                "sms"
                                                            )
                                                        )
                                                    }}
                                                    {{
                                                        createText(
                                                            "notificationSetting[facebook]",
                                                            "notificationSetting[facebook]",
                                                            "Facebook ",
                                                            "",
                                                            notificationSetting(
                                                                "facebook"
                                                            )
                                                        )
                                                    }}
                                                </div>
                                                <div class="col-md-6">
                                                    {{
                                                        createText(
                                                            "notificationSetting[linkedin]",
                                                            "notificationSetting[linkedin]",
                                                            "LinkedIn",
                                                            "",
                                                            notificationSetting(
                                                                "linkedin"
                                                            )
                                                        )
                                                    }}
                                                </div>

                                                <div class="col-md-12">
                                                    <?php createButton("btn btn-primary", "submit", "Submit") ?>
                                                </div>
                                                <!--  -->
                                            </div>
                                            <!--  -->
                                        </form>
                                        <!--  -->
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
          
        
    

 @endsection
