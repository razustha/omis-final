@extends('omis.partials.layouts')
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
                            @can('work-tasks-create')    
                            <ul class="d-flex">
                                        
                                    {!! createCanvasButton('customBtnAdd', '', 'Tasks', 'work.tasks.create') !!}
                                    <a class="mt-2 btn btn-primary-outlined" href="{{route('work.tasks.allTaskList')}}">
                                        View Task Board
                                    </a>
                                </ul>
                                @endcan
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="card">
                            <table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
                                <thead class="table-light">
                                    <tr>
                                        <th class="tb-col"><span class="overline-title">S.N.</span></th>
                                        <th class="tb-col"><span class="overline-title">Tasks Title</span></th>
                                        <th class="tb-col"><span class="overline-title">Start Date</span></th>
                                        <th class="tb-col"><span class="overline-title">End Date</span></th>
                                        <!-- <th class="tb-col"><span class="overline-title">department_id</span></th> -->
                                        <!-- <th class="tb-col"><span class="overline-title">companyName</span></th> -->
                                        <!-- <th class="tb-col"><span class="overline-title">alias</span></th> -->
                                        <th class="tb-col"><span class="overline-title">Task status</span></th>
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
                                            <td class="tb-col">{{ $item->tasksName }}</td>
                                            <td class="tb-col">{{ $item->tasksStartDate }}</td>
                                            <td class="tb-col">{{ $item->tasksEndDate }}</td>
                                            <td class="tb-col">
                                                @if($item->tasks_status == "pending")
                                                    <span class="badge text-bg-warning">Pending</span>
                                                @else
                                                    <span class="badge text-bg-success">Completed</span>
                                                @endif
                                            </td>
                                            <td class="tb-col">
                                                @if($item->tasks_status == "pending")
                                                    <ul class="d-flex flex-wrap ">
                                                        <li>
                                                            @can('work-tasks-show')
                                                            {!! actionCanvasButton('', 'btn-showCanvas', 'showoffcanvas', 'eye', 'work.tasks.show', $item->tasks_id) !!}
                                                        @endcan
                                                        </li>
                                                        <li>
                                                        @can('work-tasks-edit')
                                                            {!! actionCanvasButton('', 'btn-editCanvas', 'editoffcanvas', 'edit', 'work.tasks.edit', $item->tasks_id) !!}
                                                        @endcan
                                                        </li>
                                                        <li>
                                                        @can('work.tasks.destroy')
                                                            {!! deleteCanvasButton('', 'btn-hover-danger', 'work.tasks.destroy', $item->tasks_id) !!}</li>
                                                        @endcan
                                                         <li>
                                                            <button class="btn btn-primary rounded-pill btn-sm mt-1 btn-taskcomplete" data-tasks_id="{{$item->tasks_id}}">
                                                                Complete Task
                                                            </button>
                                                        </li>
                                                    </ul>
                                                @endif
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

@section('js')
    <script>
        $(document).on('click', ".btn-taskcomplete", function() {
            var tasks_id = $(this).data('tasks_id');

            $.ajax({
                url: '{{ route('work.tasks.updateTaskStatus') }}',
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
    </script>
@endsection

