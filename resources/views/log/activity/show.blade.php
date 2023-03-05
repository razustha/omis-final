@extends('omis.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Activity Log Lists</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Log</a></li>
                                            <li class="breadcrumb-item"><a href="#">Activity</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">logs
                                            </li>
                                        </ol>
                                    </nav>
                            </div>

                        </div>
                    </div>
                    <div class="nk-block">
                        <h1>Activity log Details</h1>
                            
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
                                                <td class="tb-col">{{$ActivityLogs->user_name}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <td class="tb-col">Controller Name</td>
                                                <td class="tb-col">{{$ActivityLogs->controllerName}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <td class="tb-col">Method Name</td>
                                                <td class="tb-col">{{$ActivityLogs->methodName}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <td class="tb-col">Action URL</td>
                                                <td class="tb-col">{{$ActivityLogs->actionUrl}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <td class="tb-col">Activity</td>
                                                <td class="tb-col">{{$ActivityLogs->activity}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <td class="tb-col">Created At</td>
                                                <td class="tb-col">{{$ActivityLogs->created_at}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <td class="tb-col">Updated At</td>
                                                <td class="tb-col">{{$ActivityLogs->updated_at}}</td>
                                                
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
