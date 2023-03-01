@extends('omis.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Leave Application List</h1>


                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Leave Application</a></li>
                                            <li class="breadcrumb-item"><a href="#">Leave Application Manage</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Leaveapplication
                                            </li>
                                        </ol>
                                    </nav>
                            </div>
                            <div class="nk-block-head-content">
                                <ul class="d-flex">
                                    {!! createCanvasButton('customBtnAdd', '', 'Leave Application', 'hr.leaveapplication.create') !!}
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

                                        <th class="tb-col"><span class="overline-title">Employee</span></th>
                                        <th class="tb-col"><span class="overline-title">leave Type</span></th>
                                        <th class="tb-col"><span class="overline-title">Type</span></th>
                                        <th class="tb-col"><span class="overline-title">From</span></th>
                                        <th class="tb-col"><span class="overline-title">To</span></th>
                                        <th class="tb-col"><span class="overline-title">Sub Total</span></th>
                                        <th class="tb-col"><span class="overline-title">Leave Status</span></th>
                                        <th class="tb-col" data-sortable="false"><span class="overline-title">Action</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($data as $item)
                                        @if($item->employee)
                                            @if (auth()->user()->employee != null)

                                                @if (($item->employee->reportingTo == auth()->user()->employee->employee_id) && auth()->user()->employee->is_head == 'manager')

                                                    <tr>
                                                        <td class="tb-col">{{ $i++ }}</td>

                                                        <td class="tb-col">
                                                            {{ $item->employee->firstName }}{{ $item->employee->middleName }}
                                                            {{ $item->employee->lastName }}
                                                        </td>
                                                        @if($item->leavetype_id == 0)
                                                            <td class="tb-col">Casual/Paid Leave</td>
                                                        @else
                                                            <td class="tb-col">{{ $item->leavetype->leaveType }}</td>

                                                        @endif
                                                        <td class="tb-col">
                                                            {{ $item->type }}

                                                        </td>
                                                        <td class="tb-col">
                                                            {{ $item->leaveStart }}

                                                        </td>
                                                        <td class="tb-col">
                                                            {{ $item->leaveEnd }}

                                                        </td>
                                                        <td class="tb-col">
                                                            {{ $item->sub_total }}

                                                        </td>

                                                        <td class="tb-col">
                                                            @if ($item->leaveApplication_status == null)
                                                                <span class="badge text-bg-warning">Pending</span>
                                                            @elseif($item->leaveApplication_status == 'approved')
                                                                <span class="badge text-bg-success">Approved</span>
                                                            @elseif($item->leaveApplication_status == 'forwarded')
                                                                <span class="badge text-bg-info">Forwarded</span>
                                                            @else
                                                                <span class="badge text-bg-danger">Rejected</span>
                                                            @endif
                                                        </td>

                                                        <td class="tb-col">
                                                            <ul class="d-flex flex-wrap ">
                                                                <li>
                                                                    {!! actionCanvasButton(
                                                                        '',
                                                                        'btn-showCanvas',
                                                                        'showoffcanvas',
                                                                        'eye',
                                                                        'hr.leaveapplication.show',
                                                                        $item->leaveApplication_id,
                                                                    ) !!}
                                                                </li>
                                                                @if ($item->leaveApplication_status == null)
                                                                    <li>
                                                                        {!! actionCanvasButton(
                                                                            '',
                                                                            'btn-editCanvas',
                                                                            'editoffcanvas',
                                                                            'edit',
                                                                            'hr.leaveapplication.edit',
                                                                            $item->leaveApplication_id,
                                                                        ) !!}
                                                                    </li>
                                                                    <li>{!! deleteCanvasButton('', 'btn-hover-danger', 'hr.leaveapplication.destroy', $item->leaveApplication_id) !!}</li>
                                                                @endif

                                                                @if ($item->leaveApplication_status == null && auth()->user()->employee->is_head == 'manager')
                                                                    <li>
                                                                        <button type="button"
                                                                            class="btn btn-color-info btn-hover-info btn-icon btn-soft"
                                                                            onclick="forwardthis({{ $item->leaveApplication_id }})"
                                                                            value="1" data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            data-bs-custom-class="custom-tooltip"
                                                                            title="Forward To Hr"> <em
                                                                                class="icon ni ni-forward"></em></button>
                                                                    </li>
                                                                    <li>
                                                                        <button type="button"
                                                                            class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"
                                                                            onclick="rejectthis({{ $item->leaveApplication_id }})"
                                                                            value="0" data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            data-bs-custom-class="custom-tooltip"
                                                                            title="Rejected"> <em
                                                                                class="icon ni ni-cross-circle"></em></button>
                                                                    </li>
                                                                @endif

                                                            </ul>
                                                        </td>
                                                    </tr>
                                                @elseif(auth()->user()->hasRole('hr'))
                                                    <tr>
                                                        <td class="tb-col">{{ $i++ }}</td>

                                                        <td class="tb-col">
                                                            {{ $item->employee->firstName }}{{ $item->employee->middleName }}
                                                        </td>
                                                        @if($item->leavetype_id == 0)
                                                            <td class="tb-col">Casual/Paid Leave</td>
                                                        @else
                                                            <td class="tb-col">{{ $item->leavetype->leaveType }}</td>

                                                        @endif
                                                        <td class="tb-col">
                                                            {{ $item->type }}

                                                        </td>
                                                        <td class="tb-col">
                                                            {{ $item->leaveStart }}

                                                        </td>
                                                        <td class="tb-col">
                                                            {{ $item->leaveEnd }}

                                                        </td>
                                                        <td class="tb-col">
                                                            {{ $item->sub_total }}

                                                        </td>

                                                        <td class="tb-col">
                                                            @if ($item->leaveApplication_status == null)
                                                                <span class="badge text-bg-warning">Pending</span>
                                                            @elseif($item->leaveApplication_status == 'approved')
                                                                <span class="badge text-bg-success">Approved</span>
                                                            @elseif($item->leaveApplication_status == 'forwarded')
                                                                <span class="badge text-bg-info">Forwarded</span>
                                                            @else
                                                                <span class="badge text-bg-danger">Rejected</span>
                                                            @endif
                                                        </td>
                                                        <td class="tb-col">
                                                            <ul class="d-flex flex-wrap ">
                                                                <li>
                                                                    {!! actionCanvasButton(
                                                                        '',
                                                                        'btn-showCanvas',
                                                                        'showoffcanvas',
                                                                        'eye',
                                                                        'hr.leaveapplication.show',
                                                                        $item->leaveApplication_id,
                                                                    ) !!}
                                                                </li>
                                                                <li>
                                                                    {!! actionCanvasButton(
                                                                        '',
                                                                        'btn-editCanvas',
                                                                        'editoffcanvas',
                                                                        'edit',
                                                                        'hr.leaveapplication.edit',
                                                                        $item->leaveApplication_id,
                                                                    ) !!}
                                                                </li>
                                                                <li>{!! deleteCanvasButton('', 'btn-hover-danger', 'hr.leaveapplication.destroy', $item->leaveApplication_id) !!}</li>
                                                                <li>
                                                                    <button type="button"
                                                                        class="btn btn-color-info btn-hover-info btn-icon btn-soft"
                                                                        onclick="approvedthis({{ $item->leaveApplication_id }})"
                                                                        value="1" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        data-bs-custom-class="custom-tooltip"
                                                                        title="Approved Leave"> <em
                                                                            class="icon ni ni-check"></em></button>
                                                                </li>
                                                                <li>
                                                                    <button type="button"
                                                                        class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"
                                                                        onclick="rejectthis({{ $item->leaveApplication_id }})"
                                                                        value="0" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        data-bs-custom-class="custom-tooltip"
                                                                        title="Reject Leave"> <em
                                                                            class="icon ni ni-cross-circle"></em></button>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                @else
                                                <tr>
                                                    <td class="tb-col">{{ $i++ }}</td>
                                                    <td class="tb-col">
                                                        {{ $item->employee->firstName }}{{ $item->employee->middleName }}
                                                    </td>
                                                    @if($item->leavetype_id == 0)
                                                        <td class="tb-col">Casual/Paid Leave</td>
                                                    @else
                                                        <td class="tb-col">{{ $item->leavetype->leaveType }}</td>

                                                    @endif
                                                    <td class="tb-col">
                                                        {{ $item->type }}

                                                    </td>
                                                    <td class="tb-col">
                                                        {{ $item->leaveStart }}

                                                    </td>
                                                    <td class="tb-col">
                                                        {{ $item->leaveEnd }}

                                                    </td>
                                                    <td class="tb-col">
                                                        {{ $item->sub_total }}

                                                    </td>

                                                    <td class="tb-col">
                                                        @if ($item->leaveApplication_status == null)
                                                            <span class="badge text-bg-warning">Pending</span>
                                                        @elseif($item->leaveApplication_status == 'approved')
                                                            <span class="badge text-bg-success">Approved</span>
                                                        @elseif($item->leaveApplication_status == 'forwarded')
                                                            <span class="badge text-bg-info">Forwarded</span>
                                                        @else
                                                            <span class="badge text-bg-danger">Rejected</span>
                                                        @endif
                                                    </td>
                                                    <td class="tb-col">
                                                        <ul class="d-flex flex-wrap ">
                                                            <li>
                                                                {!! actionCanvasButton(
                                                                    '',
                                                                    'btn-showCanvas',
                                                                    'showoffcanvas',
                                                                    'eye',
                                                                    'hr.leaveapplication.show',
                                                                    $item->leaveApplication_id,
                                                                ) !!}
                                                            </li>
                                                            @if ($item->leaveApplication_status == null)
                                                                <li>
                                                                    {!! actionCanvasButton(
                                                                        '',
                                                                        'btn-editCanvas',
                                                                        'editoffcanvas',
                                                                        'edit',
                                                                        'hr.leaveapplication.edit',
                                                                        $item->leaveApplication_id,
                                                                    ) !!}
                                                                </li>
                                                                <li>{!! deleteCanvasButton('', 'btn-hover-danger', 'hr.leaveapplication.destroy', $item->leaveApplication_id) !!}</li>

                                                            @endif
                                                        </ul>
                                                    </td>
                                                </tr>
                                                @endif
                                            @else
                                                <tr>
                                                    <td class="tb-col">{{ $i++ }}</td>

                                                    <td class="tb-col">
                                                        {{ $item->employee->firstName }}{{ $item->employee->middleName }}
                                                    </td>
                                                    <td class="tb-col">{{ $item->leavetype->leaveType }}</td>
                                                    <td class="tb-col">
                                                        {{ $item->type }}

                                                    </td>
                                                    <td class="tb-col">
                                                        {{ $item->leaveStart }}

                                                    </td>
                                                    <td class="tb-col">
                                                        {{ $item->leaveEnd }}

                                                    </td>
                                                    <td class="tb-col">
                                                        {{ $item->sub_total }}

                                                    </td>

                                                    <td class="tb-col">
                                                        @if ($item->leaveApplication_status == null)
                                                            <span class="badge text-bg-warning">Pending</span>
                                                        @elseif($item->leaveApplication_status == 'approved')
                                                            <span class="badge text-bg-success">Approved</span>
                                                        @elseif($item->leaveApplication_status == 'forwarded')
                                                            <span class="badge text-bg-info">Forwarded</span>
                                                        @else
                                                            <span class="badge text-bg-danger">Rejected</span>
                                                        @endif
                                                    </td>
                                                    <td class="tb-col">
                                                        <ul class="d-flex flex-wrap ">
                                                            <li>
                                                                {!! actionCanvasButton(
                                                                    '',
                                                                    'btn-showCanvas',
                                                                    'showoffcanvas',
                                                                    'eye',
                                                                    'hr.leaveapplication.show',
                                                                    $item->leaveApplication_id,
                                                                ) !!}
                                                            </li>
                                                            <li>
                                                                {!! actionCanvasButton(
                                                                    '',
                                                                    'btn-editCanvas',
                                                                    'editoffcanvas',
                                                                    'edit',
                                                                    'hr.leaveapplication.edit',
                                                                    $item->leaveApplication_id,
                                                                ) !!}
                                                            </li>
                                                            <li>{!! deleteCanvasButton('', 'btn-hover-danger', 'hr.leaveapplication.destroy', $item->leaveApplication_id) !!}</li>

                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endif
                                    @endforeach

                                </tbody>
                            </table>
                            {{-- Add Modal --}}
                            <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                                <div class="offcanvas-header border-bottom border-light">
                                    <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Leave Application</h5><button
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit Leave Application<h5><button
                                            type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
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

    <div class="modal fade" id="leaveTypeModal" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="scrollableLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-top">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="scrollableLabel">Leave Type</h5> <button type="button"
                        class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('master.leavetype.store') }}" id="storeCustomForm" method="POST">
                    @csrf
                    <div class="modal-body">


                        <div class="row">
                            <div class="col-lg-6">{{ createText('leaveType', 'leaveType', 'Leave Type') }}
                            </div>
                            <div class="col-lg-6">
                                {{ customCreateSelect('leavePaidStatus', 'leavePaidStatus', '', 'Leave Paid Status', ['Paid', 'Unpaid']) }}
                            </div>
                            <div class="col-lg-6">{{ createText('numberOfLeave', 'numberOfLeave', 'Number Of Leave') }}
                            </div>
                            <div class="col-lg-6">{{ createText('monthlyLimit', 'monthlyLimit', 'Monthly Limit') }}
                            </div>
                            <div class="col-lg-6">{{ createText('colorCode', 'colorCode', 'Color Code') }}
                            </div>
                            <div class="col-lg-6">
                                {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive']) }}
                            </div>
                            <div class="col-lg-12">
                                {{ createLabel('remarks', 'form-label col-from-label', 'Remarks') }}{{ createTextArea('remarks', '', 'remarks', '', '') }}
                            </div>

                        </div>
                        <div class="modal-footer">

                            <?php createButton(' btn-sm btn-add', '', '+Add'); ?>

                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function approvedthis(id) {
            var approved_id = JSON.parse(id);
            $.ajax({
                type: 'get',
                url: '{{ route('hr.leaveapplication.tobeapprove') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    approved_id: approved_id,
                },
                success: function(response) {
                    if (typeof(response) != 'object') {
                        response = JSON.parse(response)
                    }
                    if (response.status) {
                        window.location.reload();
                    }
                }

            })
        }

        function forwardthis(id) {
            var approved_id = JSON.parse(id);
            $.ajax({
                type: 'get',
                url: '{{ route('hr.leaveapplication.tobeforward') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    approved_id: approved_id,
                },
                success: function(response) {
                    if (typeof(response) != 'object') {
                        response = JSON.parse(response)
                    }
                    if (response.status) {
                        window.location.reload();
                    }
                }

            })
        }

        function rejectthis(id) {
            var rejected_id = JSON.parse(id);
            $.ajax({
                type: 'get',
                url: '{{ route('hr.leaveapplication.tobereject') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    rejected_id: rejected_id,
                },
                success: function(response) {
                    if (typeof(response) != 'object') {
                        response = JSON.parse(response)
                    }
                    if (response.status) {
                        window.location.reload();
                    }
                }

            })
        }
    </script>
@endsection
