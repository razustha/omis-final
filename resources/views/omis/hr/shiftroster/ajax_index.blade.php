@extends('omis.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Shift Roster</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Shiftroster</a></li>
                                            <li class="breadcrumb-item"><a href="#">Shiftroster Manage</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Shiftroster
                                            </li>
                                        </ol>
                                    </nav>
                            </div>
                            <div class="nk-block-head-content">
                            @can('hr-shiftroster-create')    
                            <ul class="d-flex">
                                    {!! createCanvasButton('customBtnAdd', '', 'Shiftroster', 'hr.shiftroster.create') !!}
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
                                        <th class="tb-col"><span class="overline-title">roster id</span></th>
                                        <th class="tb-col"><span class="overline-title">shift From </span></th>
                                        <th class="tb-col"><span class="overline-title">shift To</span></th>
                                        <th class="tb-col"><span class="overline-title">shift</span></th>
                                        <!-- <th class="tb-col"><span class="overline-title">alias</span></th> -->
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
                                            <td class="tb-col">{{ $item->rosterName_id }}</td>
                                            <td class="tb-col">{{ $item->shiftFromDate }}</td>
                                            <td class="tb-col">{{ $item->shiftToDate }}</td>
                                            <td class="tb-col">{{ $item->shift}}</td>
                                            <!-- <td class="tb-col">{{ $item->alias }}</td> -->
                                            <td class="tb-col">
                                                  <!-- @if ($item->shiftroster_status == null)
                                                <span class="badge text-bg-warning">Pending</span>
                                            @elseif($item->shiftroster == 'approved')
                                                <span class="badge text-bg-success">Approved</span>
                                            @else
                                                <span class="badge text-bg-danger">Rejected</span>
                                            @endif -->
                                            </td>
                                            <td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                @can('hr-shiftroster-show')   
                                                <li>
                                                        {!! actionCanvasButton(
                                                            '',
                                                            'btn-showCanvas',
                                                            'showoffcanvas',
                                                            'eye',
                                                            'hr.shiftroster.show',
                                                            $item->shiftRoster_id,
                                                        ) !!}
                                                    </li>
                                                    @endcan
                                                    @can('hr-shiftroster-edit')
                                                    <li>
                                                        {!! actionCanvasButton(
                                                            '',
                                                            'btn-editCanvas',
                                                            'editoffcanvas',
                                                            'edit',
                                                            'hr.shiftroster.edit',
                                                            $item->shiftRoster_id,
                                                        ) !!}
                                                    </li>
                                                    @endcan
                                                    @can('hr-shiftroster-destroy')
                                                    <li>{!! deleteCanvasButton('', 'btn-hover-danger', 'hr.shiftroster.destroy', $item->shiftRoster_id,) !!}</li>
                                                   @endcan
                                                    <!--  <button type="button"
                                                                    class="btn btn-color-info btn-hover-info btn-icon btn-soft btn-approve "
                                                                    onclick="approvedthis({{ $item->rosterName_id }})"
                                                                    value="1" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip" title="Approved"> <em
                                                                        class="icon ni ni-check-circle"></em></button>
                                                            </li>
                                                            <li>
                                                                <button type="button"
                                                                    class="btn btn-color-danger btn-hover-danger btn-icon btn-soft btn-approve "
                                                                    onclick="rejectthis({{ $item->rosterName_id }})"
                                                                    value="0" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip" title="Rejected"> <em
                                                                        class="icon ni ni-cross-circle"></em></button>
                                                            </li>
                                                     -->

                                                </ul>


                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{-- Add Modal --}}
                            <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                                <div class="offcanvas-header border-bottom border-light">
                                    <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Shift Roster</h5><button
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit Shift Roster<h5><button
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
