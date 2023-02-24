@extends('omis.partials.layouts')
    @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title">Expenses Claim List</h1>
                                        <nav>
                                            <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                <li class="breadcrumb-item"><a href="#">Expenses Claim</a></li>
                                                <li class="breadcrumb-item"><a href="#">Expenses Claim Manage</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Expenses Claim
                                                </li>
                                            </ol>
                                        </nav>
                                </div>
                                <div class="nk-block-head-content">
                                    @can('finance-expensesclaim-create')
                                    <ul class="d-flex">
                                        {!!createCanvasButton("customBtnAdd","","Expenses Claim","finance.expensesclaim.create") !!}
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
<th class="tb-col"><span class="overline-title">title</span></th>
<th class="tb-col"><span class="overline-title">full Name</span></th>
<th class="tb-col"><span class="overline-title">financial Year</span></th>
<!-- <th class="tb-col"><span class="overline-title">currency</span></th>
<th class="tb-col"><span class="overline-title">exchangeRate</span></th>
<th class="tb-col"><span class="overline-title">date</span></th>
<th class="tb-col"><span class="overline-title">dailyAllowence</span></th>
<th class="tb-col"><span class="overline-title">food</span></th>
<th class="tb-col"><span class="overline-title">hotelBill</span></th>
<th class="tb-col"><span class="overline-title">officialMeeting</span></th>
<th class="tb-col"><span class="overline-title">transportation</span></th>
<th class="tb-col"><span class="overline-title">consultantAccomodation</span></th>
<th class="tb-col"><span class="overline-title">receiptNumber</span></th>
<th class="tb-col"><span class="overline-title">total</span></th>
<th class="tb-col"><span class="overline-title">amount</span></th>
<th class="tb-col"><span class="overline-title">recievedAdvance</span></th>
<th class="tb-col"><span class="overline-title">totalExpense</span></th>
<th class="tb-col"><span class="overline-title">payBalance</span></th>
<th class="tb-col"><span class="overline-title">requestedName</span></th>
<th class="tb-col"><span class="overline-title">requestedDesignation</span></th>
<th class="tb-col"><span class="overline-title">requestedDate</span></th>
<th class="tb-col"><span class="overline-title">checkedName</span></th>
<th class="tb-col"><span class="overline-title">checkedDesignation</span></th>
<th class="tb-col"><span class="overline-title">checkedDate</span></th>
<th class="tb-col"><span class="overline-title">recommendName</span></th>
<th class="tb-col"><span class="overline-title">recommendedDesignation</span></th>
<th class="tb-col"><span class="overline-title">recommendDate</span></th>
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
                                            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->title }}</td>
<td class="tb-col">{{ $item->fullName }}</td>
<td class="tb-col">{{ $item->financialYear }}</td>
<!-- <td class="tb-col">{{ $item->currency }}</td>
<td class="tb-col">{{ $item->exchangeRate }}</td>
<td class="tb-col">{{ $item->date }}</td>
<td class="tb-col">{{ $item->dailyAllowence }}</td>
<td class="tb-col">{{ $item->food }}</td>
<td class="tb-col">{{ $item->hotelBill }}</td>
<td class="tb-col">{{ $item->officialMeeting }}</td>
<td class="tb-col">{{ $item->transportation }}</td>
<td class="tb-col">{{ $item->consultantAccomodation }}</td>
<td class="tb-col">{{ $item->receiptNumber }}</td>
<td class="tb-col">{{ $item->total }}</td>
<td class="tb-col">{{ $item->amount }}</td>
<td class="tb-col">{{ $item->recievedAdvance }}</td>
<td class="tb-col">{{ $item->totalExpense }}</td>
<td class="tb-col">{{ $item->payBalance }}</td>
<td class="tb-col">{{ $item->requestedName }}</td>
<td class="tb-col">{{ $item->requestedDesignation }}</td>
<td class="tb-col">{{ $item->requestedDate }}</td>
<td class="tb-col">{{ $item->checkedName }}</td>
<td class="tb-col">{{ $item->checkedDesignation }}</td>
<td class="tb-col">{{ $item->checkedDate }}</td>
<td class="tb-col">{{ $item->recommendName }}</td>
<td class="tb-col">{{ $item->recommendedDesignation }}</td>
<td class="tb-col">{{ $item->recommendDate }}</td>
<td class="tb-col">{{ $item->alias }}</td> -->
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                    @can('finance-expensesclaim-show')
                                                <li>    
                                                    {!! actionCanvasButton("","btn-showCanvas","showoffcanvas","eye",'finance.expensesclaim.show',$item->expensesClaim_id) !!}
                                                </li>
                                                @endcan
                                                @can('finance-expensesclaim-edit')
                                               <li> 
                                                        {!! actionCanvasButton("","btn-editCanvas","editoffcanvas","edit",'finance.expensesclaim.edit',$item->expensesClaim_id) !!}
                                                </li>
                                                @endcan
                                                @can('finance-expensesclaim-destroy')
                                                <li>{!! deleteCanvasButton("","btn-hover-danger",'finance.expensesclaim.destroy',$item->expensesClaim_id) !!}</li>
                                            @endcan   
                                            </ul> </td>
                                               </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                                {{-- Add Modal --}}
                       <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                        <div class="offcanvas-header border-bottom border-light">
                            <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Expenses Claim</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit Expenses Claim<h5><button type="button" class="btn-close"
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
    