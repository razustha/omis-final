@extends('omis.partials.layouts')
    @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title">Leave Reports List</h1>
                                        <nav>
                                            <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                <li class="breadcrumb-item"><a href="#">Leave Reports</a></li>
                                                <li class="breadcrumb-item"><a href="#">Leave Reports Manage</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Leave Reports
                                                </li>
                                            </ol>
                                        </nav>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="d-flex">
                                        @can('reports-leavereports-create')
                                        {!!createCanvasButton("customBtnAdd","","Leave Reports","reports.leavereports.create") !!}
                                        @endcan
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
<th class="tb-col"><span class="overline-title">applicant</span></th>
<th class="tb-col"><span class="overline-title">leave Reason</span></th>
<!-- <th class="tb-col"><span class="overline-title">leaveApprovedBy</span></th>
<th class="tb-col"><span class="overline-title">totalLeaveDays</span></th>
<th class="tb-col"><span class="overline-title">leaveDate</span></th>
<th class="tb-col"><span class="overline-title">alias</span></th> -->
<th class="tb-col"><span class="overline-title">status</span></th>
<th class="tb-col" data-sortable="false"><span
                                                    class="overline-title">Action</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($data as $item)
                                        <tr>
                                            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->applicant_id }}</td>
<td class="tb-col">{{ $item->leaveReason }}</td>
<!-- <td class="tb-col">{{ $item->leaveApprovedBy }}</td>
<td class="tb-col">{{ $item->totalLeaveDays }}</td>
<td class="tb-col">{{ $item->leaveDate }}</td>
<td class="tb-col">{{ $item->alias }}</td> -->
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                <li>  
                                                @can('reports-leavereports-show')  
                                                {!! actionCanvasButton("","btn-showCanvas","showoffcanvas","eye",'reports.leavereports.show',$item->leaveReports_id) !!}
                                                @endcan
                                                </li>
                                               <li> 
                                               @can('reports-leavereports-edit')
                                                {!! actionCanvasButton("","btn-editCanvas","editoffcanvas","edit",'reports.leavereports.edit',$item->leaveReports_id) !!}
                                                @endcan
                                                </li>
                                                <li>
                                                @can('reports-leavereports-destroy')    
                                                {!! deleteCanvasButton("","btn-hover-danger",'reports.leavereports.destroy',$item->leaveReports_id) !!}
                                                @endcan
                                                </li>
                                               </ul> </td>
                                               </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                                {{-- Add Modal --}}
                       <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                        <div class="offcanvas-header border-bottom border-light">
                            <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Leave Reports</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit Leave Reports<h5><button type="button" class="btn-close"
                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
    