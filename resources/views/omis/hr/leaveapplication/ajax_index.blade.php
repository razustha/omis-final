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
                                            <li class="breadcrumb-item"><a href="#">Leaveapplication</a></li>
                                            <li class="breadcrumb-item"><a href="#">Leaveapplication Manage</a></li>
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
                                        <th class="tb-col"><span class="overline-title">Leave Requested By</span></th>
                                        <th class="tb-col"><span class="overline-title">Employee</span></th>
                                        <th class="tb-col"><span class="overline-title">leave Type</span></th>
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
                                    
                                        <tr>
                                            <td class="tb-col">{{ $i++ }}</td>
                                            <td class="tb-col">{{ $item->leaveRequestedBy }}</td>
                                            <td class="tb-col">{{ $item->employee->name }}</td>
                                            <td class="tb-col">{{ $item->leaveType }}</td>

                                            <td class="tb-col">
                                                @if ($item->leaveApplication_status == null)
                                                    
                                                    <span class="badge text-bg-warning">Pending</span>
                                                @elseif($item->leaveApplication_status == "approved")
                                                    <span class="badge text-bg-success">Approved</span>
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
                                                    @if ($item->leaveApplication_status == null && auth()->user()->user_type == 'SUPER ADMIN')
                                                        <li>
                                                            <button type="button"
                                                                class="btn btn-primary btn-approve btn-sm mr-2"
                                                                onclick="approvedthis({{ $item->leaveApplication_id }})"
                                                                value="1">Approve</button>
                                                        </li>
                                                        <li>
                                                            <button type="button"
                                                                class="btn btn-danger btn-approve btn-sm pl-2"
                                                                onclick="rejectthis({{ $item->leaveApplication_id }})"
                                                                value="0">Reject This</button>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{-- Add Modal --}}
                            <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                                <div class="offcanvas-header border-bottom border-light">
                                    <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Leaveapplication</h5><button
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit Leaveapplication<h5><button
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
