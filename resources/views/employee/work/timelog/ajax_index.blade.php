@extends('employee.layouts.employee.employee')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Timelog List</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Timelog</a></li>
                                            <li class="breadcrumb-item"><a href="#">Timelog Manage</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Timelog
                                            </li>
                                        </ol>
                                    </nav>
                            </div>
                            <div class="nk-block-head-content">
                                {{-- <ul class="d-flex">
                                        {!!createCanvasButton("customBtnAdd","","Timelog","work.timelog.create") !!}
                                    </ul> --}}
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="card">
                            <table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
                                <thead class="table-light">
                                    <tr>
                                        <th class="tb-col"><span class="overline-title">S.N.</span></th>
                                        <th class="tb-col"><span class="overline-title">project Name</span></th>
                                        <th class="tb-col"><span class="overline-title">project Task</span></th>
                                        <th class="tb-col"><span class="overline-title">Log Date</span></th>
                                        <th class="tb-col"><span class="overline-title">Start Time</span></th>
                                        <th class="tb-col"><span class="overline-title">End Time</span></th>
                                        <th class="tb-col"><span class="overline-title">Taks status</span></th>
                                        {{-- <th class="tb-col" data-sortable="false"><span class="overline-title">Action</span>
                                        </th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="tb-col">{{ $i++ }}</td>
                                            <td class="tb-col">{{ $item->tasks->workProject->projectTitle }}</td>
                                            <td class="tb-col">{{ $item->tasks->tasksName }}</td>
                                            <td class="tb-col">{{ $item->tasks_logDate }}</td>
                                            <td class="tb-col">{{ $item->tasks_startTime }}</td>
                                            <td class="tb-col">{{ $item->tasks_endTime }}</td>

                                            <td class="tb-col">
                                                @if($item->tasks->tasks_status == "pending")
                                                    <span class="badge text-bg-warning">Pending</span>
                                                @else
                                                    <span class="badge text-bg-success">Completed</span>
                                                @endif
                                            </td>
                                            {{-- <td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                    <li>
                                                        {!! actionCanvasButton('', 'btn-showCanvas', 'showoffcanvas', 'eye', 'work.timelog.show', $item->timelog_id) !!}
                                                    </li>
                                                    <li>
                                                        {!! actionCanvasButton('', 'btn-editCanvas', 'editoffcanvas', 'edit', 'work.timelog.edit', $item->timelog_id) !!}
                                                    </li>
                                                    <li>{!! deleteCanvasButton('', 'btn-hover-danger', 'work.timelog.destroy', $item->timelog_id) !!}</li>
                                                </ul>
                                            </td> --}}
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{-- Add Modal --}}
                            <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                                <div class="offcanvas-header border-bottom border-light">
                                    <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Timelog</h5><button
                                        type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body" data-simplebar>
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="alert alert-danger print-error-msg" style="display:none">
                                                <ul></ul>
                                            </div>
                                            <div id="addConvasByAjax">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Edit Modal --}}
                        <div class="offcanvas offcanvas-end offcanvas-size-xxlg editoffcanvas" id="editoffcanvas">
                            <div class="offcanvas-header border-bottom border-light">
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit Timelog<h5><button type="button"
                                            class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body" data-simplebar>
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="alert alert-danger print-error-msg" style="display:none">
                                            <ul></ul>
                                        </div>
                                        <div id="editConvasByAjax">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Edit Modal --}}

                        {{-- Edit Modal --}}
                        <div class="offcanvas offcanvas-end offcanvas-size-xxlg showoffcanvas" id="showoffcanvas">

                        </div>
                        {{-- Edit Modal --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
