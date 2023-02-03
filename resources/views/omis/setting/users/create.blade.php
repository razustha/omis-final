@extends('omis.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Add Users</h1>

                            </div>
                            
                        </div>
                    </div>

                    <div class="nk-block">

                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('setting.users.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">{{ createText('user_type', 'user_type', 'User Type') }}
                                        </div>
                                        
                                        <div class="col-lg-6">{{ createText('name', 'name', 'Name') }}
                                        </div>
                                        <div class="col-lg-6">{{ createText('mobile', 'mobile', 'Mobile') }}
                                        </div>
                                        <div class="col-lg-6">{{ createText('email', 'email', 'Email') }}
                                        </div>
                                        
                                        <div class="col-lg-6">{{ createText('password', 'password', 'Password') }}
                                        </div>
                                        
                                        <div class="col-md-12"><?php createButton('btn-primary', '', 'Submit'); ?>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
