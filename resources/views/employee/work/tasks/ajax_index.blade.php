@extends('employee.layouts.employee.employee')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Tasks List</h1>
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
                                <ul class="d-flex">
                                    <a class="btn btn-primary" href="{{route('work.tasks.allTaskList')}}">
                                        View Task Board
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="card">
                            <table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
                                <thead class="table-light">
                                    <tr>
                                        <th class="tb-col"><span class="overline-title">S.N.</span></th>
                                        <th class="tb-col"><span class="overline-title">Project</span></th>
                                        <th class="tb-col"><span class="overline-title">Tasks Title</span></th>
                                        <th class="tb-col"><span class="overline-title">Start Date</span></th>
                                        <th class="tb-col"><span class="overline-title">End Date</span></th>
                                        <th class="tb-col"><span class="overline-title">Task Status</span></th>
                                        <th class="tb-col" data-sortable="false"><span class="overline-title">Action</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="tb-col">{{ $i++ }}</td>
                                            <td class="tb-col">{{ $item->task->workProject->projectTitle }}</td>
                                            <td class="tb-col">
                                                @if($item->task->tasks_status == "pending")
                                                    @if(!empty($item->task->latestTimeLog($item->task->tasks_id)))
                                                        <button href="javascript:;" class="text-danger btn border btn-stop-timer btn-sm" data-timelog_id="{{$item->task->latestTimeLog($item->task->tasks_id)->timelog_id}}">
                                                            <em class="icon ni ni-stop-circle-fill"></em>
                                                        </button>
                                                    @else
                                                        <button href="javascript:;" class="text-success btn border btn-start-timer btn-sm" data-tasks_id="{{$item->task->tasks_id}}">
                                                            <em class="icon ni ni-play-circle-fill"></em>
                                                        </button>
                                                    @endif
                                                @endif

                                                {{ $item->task->tasksName }}
                                            </td>
                                            <td class="tb-col">{{ $item->task->tasksStartDate }}</td>
                                            <td class="tb-col">{{ $item->task->tasksEndDate }}</td>
                                            <td class="tb-col">
                                                @if($item->task->tasks_status == "pending")
                                                    <span class="badge text-bg-warning">Pending</span>
                                                @else
                                                    <span class="badge text-bg-success">Completed</span>
                                                @endif
                                            </td>
                                            <td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                    <li>
                                                        {!! actionCanvasButton('', 'btn-showCanvas', 'showoffcanvas', 'eye', 'work.tasks.show', $item->tasks_id) !!}
                                                    </li>
                                                    {{--              
                                                    <li>
                                                        {!! actionCanvasButton('', 'btn-editCanvas', 'editoffcanvas', 'edit', 'work.tasks.edit', $item->tasks_id) !!}
                                                    </li>
                                                    <li>{!! deleteCanvasButton('', 'btn-hover-danger', 'work.tasks.destroy', $item->tasks_id) !!}</li>
                                                    --}} 
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{-- Add Modal --}}
                            <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                                <div class="offcanvas-header border-bottom border-light">
                                    <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Tasks</h5><button type="button"
                                        class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit Tasks<h5><button type="button"
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

                        {{-- Show Modal --}}
                        <div class="offcanvas offcanvas-end offcanvas-size-xxlg showoffcanvas" id="showoffcanvas">

                        </div>
                        {{-- Show Modal --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection

@section('js')
    <script>
        $(document).on('click', ".btn-start-timer", function() {
            var tasks_id = $(this).data('tasks_id');

            $.ajax({
                url: '{{ route('work.timelog.startTimeLog') }}',
                type: "GET",
                data: {
                    tasks_id: tasks_id,
                },
                success: function(response) {

                    if (response.status) {
                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: response.message,
                            showConfirmButton: false,
                            timer: 1500
                        })
                        setTimeout(function() {
                            window.location.reload();
                        }, 1500);
                    }
                }

            })
        });

        $(document).on('click', ".btn-stop-timer", function() {
            var timelog_id = $(this).data('timelog_id');

            $.ajax({
                url: '{{ route('work.timelog.stopTimeLog') }}',
                type: "GET",
                data: {
                    timelog_id: timelog_id,
                },
                success: function(response) {

                    if (response.status) {
                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: response.message,
                            showConfirmButton: false,
                            timer: 1500
                        })
                        setTimeout(function() {
                            window.location.reload();
                        }, 1500);
                    }
                }

            })
        });

    </script>
@endsection
