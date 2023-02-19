@extends('omis.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Projects List</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Projects</a></li>
                                            <li class="breadcrumb-item"><a href="#">Projects Manage</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Projects
                                            </li>
                                        </ol>
                                    </nav>
                            </div>
                            @if(empty(auth()->user()->hasRole('super-super-admin')))
                            <div class="nk-block-head-content">
                       
                            <ul class="d-flex">
                           
                                    {!! createCanvasButton('customBtnAdd', '', 'projects', 'work.workprojects.create') !!}
                              
                                </ul>
                        
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="card">
                        <table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
                            <thead class="table-light">
                                <tr>
                                    <th class="tb-col"><span class="overline-title">S.N.</span></th>
                                    <th class="tb-col"><span class="overline-title">project Title</span></th>
                                    <!-- <th class="tb-col"><span class="overline-title">projectStartClient</span></th> -->
                                    <th class="tb-col"><span class="overline-title">Start Date</span></th>
                                    <th class="tb-col"><span class="overline-title">End Date</span></th>
                                    <th class="tb-col"><span class="overline-title">Priority</span></th>
                                    <!-- <th class="tb-col"><span class="overline-title">companyName_id</span></th>
    <th class="tb-col"><span class="overline-title">assignedEmployees</span></th>
    <th class="tb-col"><span class="overline-title">projectDescription</span></th>
    <th class="tb-col"><span class="overline-title">alias</span></th> -->
                                    <th class="tb-col"><span class="overline-title">Project status</span></th>
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
                                    <td class="tb-col">{{ $item->projectTitle }}</td>
                                    <!-- <td class="tb-col">{{ $item->projectStartClient }}</td> -->
                                    <td class="tb-col">{{ $item->projectStartDate }}</td>
                                    <td class="tb-col">{{ $item->projectEndDate }}</td>
                                    <td class="tb-col">{{ $item->projectPriority }}</td>
                                    <!-- <td class="tb-col">{{ $item->companyName_id }}</td>
    <td class="tb-col">{{ $item->assignedEmployees }}</td>
    <td class="tb-col">{{ $item->projectDescription }}</td>
    <td class="tb-col">{{ $item->alias }}</td> -->
                                    <td class="tb-col">
                                        @if($item->workProject_status == "pending")
                                        <span class="badge text-bg-warning">Pending</span>
                                        @else
                                        <span class="badge text-bg-success">Completed</span>
                                        @endif
                                    </td>
                                    <td class="tb-col">
                                        @if($item->workProject_status == "pending")
                                        <ul class="d-flex flex-wrap ">
                                            <li>
                                           
                                                {!! actionCanvasButton('', 'btn-showCanvas', 'showoffcanvas', 'eye',
                                                'work.workprojects.show', $item->workProject_id) !!}
                                                   
                                            </li>
                                            <li>
                                             
                                                {!! actionCanvasButton('', 'btn-editCanvas', 'editoffcanvas', 'edit',
                                                'work.workprojects.edit', $item->workProject_id) !!}
                                                  
                                            </li>
                                            <li>
                                             
                                            {!! deleteCanvasButton('', 'btn-hover-danger', 'work.workprojects.destroy',
                                                $item->workProject_id) !!}
                                          
                                            </li>

                                            @if(empty($item->tasks[0]))
                                            <li>
                                                <button
                                                    class="btn btn-primary rounded-pill btn-sm mt-1 btn-workprojectcomplete"
                                                    data-project_id="{{$item->workProject_id}}">
                                                    Complete Project
                                                </button>
                                            </li>
                                            @endif
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Add projects</h5><button
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
                            <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit projects<h5><button type="button"
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
        $(document).on('click', ".btn-workprojectcomplete", function() {
            var workProject_id = $(this).data('project_id');
            $.ajax({
                url: '{{ route('work.workprojects.updateProjectStatus') }}',
                type: "GET",
                data: {
                    workProject_id: workProject_id,
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
