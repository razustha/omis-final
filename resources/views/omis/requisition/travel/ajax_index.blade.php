@extends('omis.partials.layouts')
    @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title">Travel List</h1>
                                        <nav>
                                            <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                <li class="breadcrumb-item"><a href="#">Travel</a></li>
                                                <li class="breadcrumb-item"><a href="#">Travel Manage</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Travel
                                                </li>
                                            </ol>
                                        </nav>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="d-flex">
                                        @can('requisition-travel-create')
                                        {!!createCanvasButton("customBtnAdd","","Travel","requisition.travel.create") !!}
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
<th class="tb-col"><span class="overline-title">employee Name</span></th>
<th class="tb-col"><span class="overline-title">arrangement Type</span></th>
<th class="tb-col"><span class="overline-title">purpose Of Visit</span></th>
<th class="tb-col"><span class="overline-title">destination</span></th>
<!-- <th class="tb-col"><span class="overline-title">travelStartDate</span></th>
<th class="tb-col"><span class="overline-title">travelEndDate</span></th>
<th class="tb-col"><span class="overline-title">expectedBudget</span></th>
<th class="tb-col"><span class="overline-title">actualBudget</span></th>
<th class="tb-col"><span class="overline-title">travelMode</span></th>
<th class="tb-col"><span class="overline-title">alias</span></th> -->
<th class="tb-col"><span class="overline-title">status</span></th>
<!-- <th class="tb-col"><span class="overline-title">companyName_id</span></th> -->
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
                                            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->employeeName_id }}</td>
<td class="tb-col">{{ $item->arrangementType_id }}</td>
<td class="tb-col">{{ $item->purposeOfVisit }}</td>
<td class="tb-col">{{ $item->destination }}</td>
<!-- <td class="tb-col">{{ $item->travelStartDate }}</td>
<td class="tb-col">{{ $item->travelEndDate }}</td>
<td class="tb-col">{{ $item->expectedBudget }}</td>
<td class="tb-col">{{ $item->actualBudget }}</td>
<td class="tb-col">{{ $item->travelMode }}</td>
<td class="tb-col">{{ $item->alias }}</td> -->
<td class="tb-col">{!! $item->status_name !!}</td>
<!-- <td class="tb-col">{{ $item->companyName_id }}</td> -->
<td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                <li>    
                                                    @can('requisition-travel-create')
                                                    {!! actionCanvasButton("","btn-showCanvas","showoffcanvas","eye",'requisition.travel.show',$item->travel_id) !!}
                                                @endcan
                                                </li>
                                               <li> 
                                               @can('requisition-travel-edit')
                                                        {!! actionCanvasButton("","btn-editCanvas","editoffcanvas","edit",'requisition.travel.edit',$item->travel_id) !!}
                                                @endcan
                                                    </li>
                                                <li>
                                                @can('requisition-travel-destroy')    
                                                {!! deleteCanvasButton("","btn-hover-danger",'requisition.travel.destroy',$item->travel_id) !!}
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
                            <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Travel</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit Travel<h5><button type="button" class="btn-close"
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
    