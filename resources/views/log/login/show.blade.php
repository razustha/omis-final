@extends('omis.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Login Log Lists</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Log</a></li>
                                            <li class="breadcrumb-item"><a href="#">Login</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">logs
                                            </li>
                                        </ol>
                                    </nav>
                            </div>

                        </div>
                    </div>
                    <div class="nk-block">
                        <h1>Login log Details</h1>
                            
                            <div class="card">
                                <table class="datatable-init table" data-nk-container="table-responsive">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="tb-col"><span class="overline-title">Action</span></th>
                                            <th class="tb-col"><span class="overline-title">Value</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td class="tb-col">User Name</td>
                                                <td class="tb-col">{{$LoginLogs->user_name}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <td class="tb-col">User IP</td>
                                                <td class="tb-col">{{$LoginLogs->ip}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <td class="tb-col">User Agent</td>
                                                <td class="tb-col">{{$LoginLogs->user_agent}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <td class="tb-col">Type</td>
                                                <td class="tb-col">{{$LoginLogs->type}}</td>
                                                
                                            </tr>
                                            
                                            <tr>
                                                <td class="tb-col">Login At</td>
                                                <td class="tb-col">{{$LoginLogs->login_at}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <td class="tb-col">LOgout At</td>
                                                <td class="tb-col">{{$LoginLogs->logout_at}}</td>
                                                
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
@endsection
