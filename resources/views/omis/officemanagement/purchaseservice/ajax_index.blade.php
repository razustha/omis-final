@extends('omis.partials.layouts')
    @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title">Purchase Service List</h1>
                                        <nav>
                                            <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                <li class="breadcrumb-item"><a href="#">Purchase Service</a></li>
                                                <li class="breadcrumb-item"><a href="#">Purchase Service Manage</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Purchase Service
                                                </li>
                                            </ol>
                                        </nav>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="d-flex">
                                        {!!createCanvasButton("customBtnAdd","","Purchaseservice","officemanagement.purchaseservice.create") !!}
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
<th class="tb-col"><span class="overline-title">purchase Title</span></th>
<th class="tb-col"><span class="overline-title">contract Name</span></th>
<th class="tb-col"><span class="overline-title">reference Number</span></th>
<!-- <th class="tb-col"><span class="overline-title">date</span></th> -->
<!-- <th class="tb-col"><span class="overline-title">vatNumber</span></th>
<th class="tb-col"><span class="overline-title">address</span></th>
<th class="tb-col"><span class="overline-title">contact</span></th>
<th class="tb-col"><span class="overline-title">serialNumber</span></th>
<th class="tb-col"><span class="overline-title">descriptions</span></th>
<th class="tb-col"><span class="overline-title">units</span></th>
<th class="tb-col"><span class="overline-title">quantity</span></th>
<th class="tb-col"><span class="overline-title">rate</span></th>
<th class="tb-col"><span class="overline-title">amount</span></th>
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
                                            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->purchaseTitle }}</td>
<td class="tb-col">{{ $item->contractName }}</td>
<td class="tb-col">{{ $item->referenceNumber }}</td>
<!-- <td class="tb-col">{{ $item->date }}</td> -->
<!-- <td class="tb-col">{{ $item->vatNumber }}</td>
<td class="tb-col">{{ $item->address }}</td>
<td class="tb-col">{{ $item->contact }}</td>
<td class="tb-col">{{ $item->serialNumber }}</td>
<td class="tb-col">{{ $item->descriptions }}</td>
<td class="tb-col">{{ $item->units }}</td>
<td class="tb-col">{{ $item->quantity }}</td>
<td class="tb-col">{{ $item->rate }}</td>
<td class="tb-col">{{ $item->amount }}</td>
<td class="tb-col">{{ $item->alias }}</td> -->
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                <li>    
                                                    {!! actionCanvasButton("","btn-showCanvas","showoffcanvas","eye",'officemanagement.purchaseservice.show',$item->prchaseService_id) !!}
                                                </li>
                                               <li> 
                                                        {!! actionCanvasButton("","btn-editCanvas","editoffcanvas","edit",'officemanagement.purchaseservice.edit',$item->prchaseService_id) !!}
                                                </li>
                                                <li>{!! deleteCanvasButton("","btn-hover-danger",'officemanagement.purchaseservice.destroy',$item->prchaseService_id) !!}</li>
                                               </ul> </td>
                                               </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                                {{-- Add Modal --}}
                       <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                        <div class="offcanvas-header border-bottom border-light">
                            <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Purchase Service</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit Purchase Service<h5><button type="button" class="btn-close"
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
    