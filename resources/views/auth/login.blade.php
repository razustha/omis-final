@include('omis/partials/headerincludes')

<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg">
    <div class="nk-app-root">
        <div class="nk-main">
            <div class="nk-wrap align-items-center justify-content-center has-mask">
                <div class="mask mask-3"></div>
                <div class="container p-2 p-sm-4">
                    <div class="row flex-lg-row-reverse">
                        <div class="col-lg-5">
                            <div class="card card-gutter-lg rounded-4 card-auth">
                                <div class="card-body">
                                    <div class="brand-logo mb-4">
                                        <div class="logo-wrap">
                                            LOGO HERE
                                        </div>
                                    </div>
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title mb-1">Login to OMIS Application</h3>
                                            <p class="small">Please sign-in to your account and start the adventure.
                                            </p>
                                        </div>
                                    </div>
                                    @if ($errors->any())
                                        {{ implode('', $errors->all('<div>:message</div>')) }}
                                    @endif
                                    <form method="POST" action="{{ route('post.login') }}">
                                        @csrf
                                        <div class="row gy-3">
                                            <div class="col-12">
                                                <div class="form-group"><label for="username" class="form-label">Email
                                                    </label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="email"
                                                            name="email" value="{{ old('email') }}"
                                                            placeholder="Enter Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group"><label for="password"
                                                        class="form-label">Password</label>
                                                    <div class="form-control-wrap"><input type="password"
                                                            class="form-control" id="password" name="password"
                                                            value="{{ old('password') }}" placeholder="Enter Password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex flex-wrap justify-content-between">
                                                    <div class="form-check form-check-sm"><input
                                                            class="form-check-input" type="checkbox" value=""
                                                            id="rememberMe"><label class="form-check-label"
                                                            for="rememberMe"> Remember Me </label></div><a
                                                        href="auth-reset-fancy.html" class="small">Forgot Password?</a>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid"><button class="btn btn-primary" type="submit">Login
                                                        to account</button></div>
                                            </div>
                                        </div>
                                    </form>



                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 align-self-center">
                            <div class="card-body is-theme ps-lg-4 pt-5 pt-lg-0">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="h1 title mb-3">Welcome back to <br> {{ env('APP_NAME') }}</div>
                                        <p>{{ env('APP_DESC') }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('omis/partials/footerincludes')
