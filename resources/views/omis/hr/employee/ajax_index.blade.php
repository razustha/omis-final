@extends('omis.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Employees</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Employee</a></li>
                                            <li class="breadcrumb-item"><a href="#">Employee Manage</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Employee
                                            </li>
                                        </ol>
                                    </nav>
                            </div>
                            <div class="nk-block-head-content">
                                @can('hr-employee-create')
                                <ul class="d-flex">
                                    {!! createCanvasButton('customBtnAdd', '', 'Employee', 'hr.employee.create') !!}
                                    {{-- <input type="text" id="nepali-datepicker" placeholder="Select Nepali Date" name="joinDate"/> --}}

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
                                        <th class="tb-col"><span class="overline-title">EMP. Id</span></th>
                                        <th class="tb-col"><span class="overline-title">Employee Name</span></th>
                                        <th class="tb-col"><span class="overline-title">Contact</span></th>
                                        <th class="tb-col"><span class="overline-title">Role</span></th>
                                        <th class="tb-col"><span class="overline-title">Department</span></th>
                                        {{-- <th class="tb-col"><span class="overline-title">designation</span></th> --}}
                                        <th class="tb-col"><span class="overline-title">status</span></th>
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
                                            <td class="tb-col">{{ $item->employee_id }}</td>
                                            <td class="tb-col">
                                                <div class="media-group">
                                                    <div class="media media-md media-middle media-circle">
                                                        <img src="{{ $item->profilePhoto }}" class="img-thumbnail"
                                                            alt="">
                                                    </div>
                                                    <div class="media-text"> <a
                                                            href="{{ route('hr.employee.show', [$item->employee_id]) }}">
                                                            {{ $item->firstName }} {{ $item->middleName }}
                                                            {{ $item->lastName }} </a><span
                                                            class="small text">{{ $item->emailAddress }}</span></div>
                                                </div>
                                            </td>
                                            <td class="tb-col">{{ $item->phoneNumber }}</td>
                                            <td class="tb-col">{{ $item->role_name }}</td>
                                            <td class="tb-col">{{ $item->department_name }}</td>
                                            {{-- <td class="tb-col">{{ $item->designation_id }}</td> --}}
                                            <td class="tb-col">{!! $item->status_name !!}</td>
                                            <td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                    {{-- <li>
                                                        {!! actionCanvasButton('', 'btn-showCanvas', 'showoffcanvas', 'eye', 'hr.employee.show', $item->employee_id) !!}
                                                    </li> --}}
                                                    @can('hr-employee-show')
                                                    <li>{{ actionButton('View Employee', "<em class=\"icon ni ni-eye\"></em>", route('hr.employee.show', [$item->employee_id]), 'btn-showModal') }}
                                                    </li>
                                                    @endcan
                                                    @can('hr-employee-edit')
                                                    <li>
                                                        {!! actionCanvasButton('', 'btn-editCanvas', 'editoffcanvas', 'edit', 'hr.employee.edit', $item->employee_id) !!}
                                                    </li>
                                                    @endcan
                                                    <li>{!! deleteCanvasButton('', 'btn-hover-danger', 'hr.employee.destroy', $item->employee_id) !!}</li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{-- Add Modal --}}
                            <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                                <div class="offcanvas-header border-bottom border-light">
                                    <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Employee</h5><button
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit Employee<h5><button type="button"
                                            class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body" data-simplebar>
                                <div class=" h-100">
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

@endsection

@section('js')
<script>

    window.onload = function () {
        var mainInput = document.getElementById("nepali-datepicker");
        mainInput.nepaliDatePicker();
    };

</script>
@endsection

