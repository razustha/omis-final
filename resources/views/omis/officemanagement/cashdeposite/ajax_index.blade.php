@extends('omis.partials.layouts')
    @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title">Cash Deposit List</h1>
                                        <nav>
                                            <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                <li class="breadcrumb-item"><a href="#">Cash Deposit</a></li>
                                                <li class="breadcrumb-item"><a href="#">Cash Deposit Manage</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Cash Deposit
                                                </li>
                                            </ol>
                                        </nav>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="d-flex">
                                        {!!createCanvasButton("customBtnAdd","","Cash Deposit","officemanagement.cashdeposite.create") !!}
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
<th class="tb-col"><span class="overline-title">main Title</span></th>
<th class="tb-col"><span class="overline-title">DATE</span></th>
<!-- <th class="tb-col"><span class="overline-title">amount In Words</span></th> -->
<!-- <th class="tb-col"><span class="overline-title">thousand</span></th>
<th class="tb-col"><span class="overline-title">fiveHundred</span></th>
<th class="tb-col"><span class="overline-title">hundred</span></th>
<th class="tb-col"><span class="overline-title">fifty</span></th>
<th class="tb-col"><span class="overline-title">twenty</span></th>
<th class="tb-col"><span class="overline-title">ten</span></th>
<th class="tb-col"><span class="overline-title">five</span></th>
<th class="tb-col"><span class="overline-title">two</span></th>
<th class="tb-col"><span class="overline-title">one</span></th>
<th class="tb-col"><span class="overline-title">fullName</span></th>
<th class="tb-col"><span class="overline-title">position</span></th>
<th class="tb-col"><span class="overline-title">declaredDate</span></th>
<th class="tb-col"><span class="overline-title">approvedName</span></th>
<th class="tb-col"><span class="overline-title">approvedPosition</span></th>
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
                                            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->mainTitle }}</td>
<td class="tb-col">{{ $item->DATE }}</td>
<!-- <td class="tb-col">{{ $item->amountWords }}</td> -->
<!-- <td class="tb-col">{{ $item->thousand }}</td>
<td class="tb-col">{{ $item->fiveHundred }}</td>
<td class="tb-col">{{ $item->hundred }}</td>
<td class="tb-col">{{ $item->fifty }}</td>
<td class="tb-col">{{ $item->twenty }}</td>
<td class="tb-col">{{ $item->ten }}</td>
<td class="tb-col">{{ $item->five }}</td>
<td class="tb-col">{{ $item->two }}</td>
<td class="tb-col">{{ $item->one }}</td>
<td class="tb-col">{{ $item->fullName }}</td>
<td class="tb-col">{{ $item->position }}</td>
<td class="tb-col">{{ $item->declaredDate }}</td>
<td class="tb-col">{{ $item->approvedName }}</td>
<td class="tb-col">{{ $item->approvedPosition }}</td>
<td class="tb-col">{{ $item->approvedDate }}</td>
<td class="tb-col">{{ $item->alias }}</td> -->
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                <li>    
                                                    {!! actionCanvasButton("","btn-showCanvas","showoffcanvas","eye",'officemanagement.cashdeposite.show',$item->cashDeposite_id) !!}
                                                </li>
                                               <li> 
                                                        {!! actionCanvasButton("","btn-editCanvas","editoffcanvas","edit",'officemanagement.cashdeposite.edit',$item->cashDeposite_id) !!}
                                                </li>
                                                <li>{!! deleteCanvasButton("","btn-hover-danger",'officemanagement.cashdeposite.destroy',$item->cashDeposite_id) !!}</li>
                                               </ul> </td>
                                               </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                                {{-- Add Modal --}}
                       <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                        <div class="offcanvas-header border-bottom border-light">
                            <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Cash Deposit</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit Cash Deposit<h5><button type="button" class="btn-close"
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
    