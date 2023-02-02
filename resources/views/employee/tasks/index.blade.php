@extends('employee.layouts.employee.employee')
    @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <!-- head content -->
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title mt-3">Tasks List</h2>
                                        <nav>
                                            <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                <li class="breadcrumb-item"><a href="#">Tasks</a></li>
                                                <li class="breadcrumb-item"><a href="#">Tasks Manage</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Tasks
                                                </li>
                                            </ol>
                                        </nav>
                                </div>

                                <div class="nk-block-head-content">
                                    <ul class="d-flex"></ul>
                                </div>

                            </div>
                        </div>
                        <!-- head content -->

                        <div class="nk-block">
                            <div class="card">
                                <table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
                                    <thead class="table-light">
                                        <tr>
                                        <th class="tb-col"><span class="overline-title">S.N.</span></th>
                                        <th class="tb-col"><span class="overline-title">tasksStartDate</span></th>
                                        <th class="tb-col"><span class="overline-title">tasksEndDate</span></th>
                                        <th class="tb-col"><span class="overline-title">tasksAssignedTo</span></th>
                                        <th class="tb-col"><span class="overline-title">status</span></th>
                                        <th class="tb-col" data-sortable="false"><span class="overline-title">Action</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
@endsection
    