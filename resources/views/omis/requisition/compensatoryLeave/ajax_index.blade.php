@extends('omis.partials.layouts')
    @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title">Compensatory Leave List</h1>
                                        <nav>
                                            <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                <li class="breadcrumb-item"><a href="#">Compensatory Leave</a></li>
                                                <li class="breadcrumb-item"><a href="#">Compensatory Leave Manage</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Compensatory Leave
                                                </li>
                                            </ol>
                                        </nav>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="d-flex">
                                        @can('requisition-compensatoryleave-create')
                                        {!!createCanvasButton("customBtnAdd","","Compensatory Leave","requisition.compensatoryleave.create") !!}
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
<th class="tb-col"><span class="overline-title">postion</span></th>
<th class="tb-col"><span class="overline-title">department</span></th>
<th class="tb-col"><span class="overline-title">working Day</span></th>
<th class="tb-col"><span class="overline-title">working Date</span></th>
<!-- <th class="tb-col"><span class="overline-title">holidayReason</span></th>
<th class="tb-col"><span class="overline-title">from</span></th>
<th class="tb-col"><span class="overline-title">to</span></th>
<th class="tb-col"><span class="overline-title">workingReason</span></th>
<th class="tb-col"><span class="overline-title">recommendation</span></th>
<th class="tb-col"><span class="overline-title">verificationUnit</span></th>
<th class="tb-col"><span class="overline-title">verifiedDate</span></th>
<th class="tb-col"><span class="overline-title">approvedBy</span></th>
<th class="tb-col"><span class="overline-title">approvedDate</span></th>
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
<td class="tb-col">{{ $item->postion }}</td>
<td class="tb-col">{{ $item->department_id }}</td>
<td class="tb-col">{{ $item->workingDay }}</td>
<td class="tb-col">{{ $item->workingDate }}</td>
<!-- <td class="tb-col">{{ $item->holidayReason }}</td>
<td class="tb-col">{{ $item->from }}</td>
<td class="tb-col">{{ $item->to }}</td>
<td class="tb-col">{{ $item->workingReason }}</td>
<td class="tb-col">{{ $item->recommendation }}</td>
<td class="tb-col">{{ $item->verificationUnit }}</td>
<td class="tb-col">{{ $item->verifiedDate }}</td>
<td class="tb-col">{{ $item->approvedBy }}</td>
<td class="tb-col">{{ $item->approvedDate }}</td>
<td class="tb-col">{{ $item->alias }}</td> -->
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                <li>  
                                                @can('requisition-compensatoryleave-show')  
                                                    {!! actionCanvasButton("","btn-showCanvas","showoffcanvas","eye",'requisition.compensatoryleave.show',$item->compensatoryleave_id) !!}
                                                @endcan
                                                </li>
                                               <li> 
                                               @can('requisition-compensatoryleave-edit')
                                                        {!! actionCanvasButton("","btn-editCanvas","editoffcanvas","edit",'requisition.compensatoryleave.edit',$item->compensatoryleave_id) !!}
                                                @endcan
                                                    </li>
                                                <li>
                                                @can('requisition-compensatoryleave-destroy')    
                                                {!! deleteCanvasButton("","btn-hover-danger",'requisition.compensatoryleave.destroy',$item->compensatoryleave_id) !!}
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
                            <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Compensatory Leave</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit Compensatory Leave<h5><button type="button" class="btn-close"
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
    