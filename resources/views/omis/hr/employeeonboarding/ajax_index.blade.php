@extends('omis.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Employee Onboarding</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Employee Onboarding</a></li>
                                            <li class="breadcrumb-item"><a href="#">Employee Onboarding Manage</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Employee Onboarding
                                            </li>
                                        </ol>
                                    </nav>
                            </div>
                            <div class="nk-block-head-content">
                            @can('hr-employeeonboarding-create')    
                            <ul class="d-flex">
                                    {!! createCanvasButton('customBtnAdd', '', 'Employee Onboarding', 'hr.employeeonboarding.create') !!}
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
                                        <th class="tb-col"><span class="overline-title">employee</span></th>
                                        <th class="tb-col"><span class="overline-title">working Shift</span></th>
                                        <!-- <th class="tb-col"><span class="overline-title">workingHour</span></th> -->
                                        <th class="tb-col"><span class="overline-title">working Mode</span></th>
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
                                            <td class="tb-col">{{ $item->employee_name }}</td>

                                            <td class="tb-col">{{ $item->workingShift }}</td>
                                            <!-- <td class="tb-col">{{ $item->workingHour }}</td> -->
                                            <td class="tb-col">{{ $item->workingMode }}</td>

                                            <td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                @can('hr-employeeonboarding-show')  
                                                <li>
                                                        {!! actionCanvasButton(
                                                            '',
                                                            'btn-showCanvas',
                                                            'showoffcanvas',
                                                            'eye',
                                                            'hr.employeeonboarding.show',
                                                            $item->employeeonboarding_id,
                                                        ) !!}
                                                    </li>
                                                    @endcan
                                                    @can('hr-employeeonboarding-edit')
                                                    <li>
                                                        {!! actionCanvasButton(
                                                            '',
                                                            'btn-editCanvas',
                                                            'editoffcanvas',
                                                            'edit',
                                                            'hr.employeeonboarding.edit',
                                                            $item->employeeonboarding_id,
                                                        ) !!}
                                                    </li>
                                                    @endcan
                                                    @can('hr-employeeonboarding-destroy')
                                                    <li>{!! deleteCanvasButton('', 'btn-hover-danger', 'hr.employeeonboarding.destroy', $item->employeeonboarding_id) !!}</li>
                                               @endcan
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{-- Add Modal --}}
                            <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                                <div class="offcanvas-header border-bottom border-light">
                                    <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Employee Onboarding</h5><button
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit Employee Onboarding<h5><button
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
