@extends('omis.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Operation Log Lists</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Log</a></li>
                                            <li class="breadcrumb-item"><a href="#">Operations</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">logs
                                            </li>
                                        </ol>
                                    </nav>
                            </div>

                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="card">
                            <table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
                                <thead class="table-light">
                                    <tr>
                                        <th class="tb-col"><span class="overline-title">S.N.</span></th>
                                        <th class="tb-col"><span class="overline-title">Operation By</span></th>
                                        <th class="tb-col"><span class="overline-title">Operation Number</span></th>
                                        <!-- <th class="tb-col"><span class="overline-title">Alias</span></th> -->
                                        <th class="tb-col"><span class="overline-title">Model Name</span></th>
                                        <th class="tb-col"><span class="overline-title">Action Type</span></th>
                                        {{-- <th class="tb-col"><span class="overline-title">Old Values</span></th> --}}
                                        {{-- <th class="tb-col"><span class="overline-title">New Values</span></th> --}}
                                        <th class="tb-col"><span class="overline-title">Created Date</span></th>
                                        <th class="tb-col" data-sortable="false"><span class="overline-title">Action</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($operations as $item)
                                        <tr>
                                            <td class="tb-col">{{ $i++ }}</td>
                                            <td class="tb-col">{{ $item->operation_by }}</td>
                                            <td class="tb-col">{{ $item->operation_start_no }}</td>
                                            <td class="tb-col">{{ $item->model_name }}</td>
                                            <td class="tb-col">{{ $item->operation_name }}</td>
                                            <td class="tb-col">{{ $item->created_at }}</td>
                                            {{-- <td class="tb-col">{{ $item->previous_values }}</td> --}}
                                            {{-- <td class="tb-col">{{ $item->new_values }}</td> --}}
                                            <td class="tb-col">
                                                @if (isset($item->operation_start_no))
                                                    <ul class="d-flex flex-wrap ">
                                                        <li><a href="{{ route('setting.operation.show', [$item->operation_start_no]) }}"
                                                                type="button"
                                                                class="btn btn-color-success btn-hover-success btn-icon btn-soft"><em
                                                                    class="icon ni ni-eye"></em>
                                                            </a>
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
                                    <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Country</h5><button
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit Country<h5><button type="button"
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
