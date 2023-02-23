@extends('omis.partials.layouts')
    @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title">Expenses List</h1>
                                        <nav>
                                            <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                <li class="breadcrumb-item"><a href="#">Expenses</a></li>
                                                <li class="breadcrumb-item"><a href="#">Expenses Manage</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Expenses
                                                </li>
                                            </ol>
                                        </nav>
                                </div>
                                <div class="nk-block-head-content">
                                @can('finance-financeexpenses-create') 
                                <ul class="d-flex">
                                        {!!createCanvasButton("customBtnAdd","","Expenses","finance.financeexpenses.create") !!}
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
<th class="tb-col"><span class="overline-title">expenses Amount</span></th>
<th class="tb-col"><span class="overline-title">Date</span></th>
<th class="tb-col"><span class="overline-title">Account</span></th>
<!-- <th class="tb-col"><span class="overline-title">selectCategory_id</span></th>
<th class="tb-col"><span class="overline-title">paymentMethod</span></th>
<th class="tb-col"><span class="overline-title">expensesRefrenceNumber</span></th>
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
                                            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->expensesAmount }}</td>
<td class="tb-col">{{ $item->expensesDate }}</td>
<td class="tb-col">{{ $item->selectAccount }}</td>
<!-- <td class="tb-col">{{ $item->selectCategory_id }}</td>
<td class="tb-col">{{ $item->paymentMethod }}</td>
<td class="tb-col">{{ $item->expensesRefrenceNumber }}</td>
<td class="tb-col">{{ $item->alias }}</td> -->
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                    @can('finance-financeexpenses-show')
                                                <li>    
                                                    {!! actionCanvasButton("","btn-showCanvas","showoffcanvas","eye",'finance.financeexpenses.show',$item->financeExpenses_id) !!}
                                                </li>
                                                @endcan
                                                @can('finance-financeexpenses-edit')
                                               <li> 
                                                        {!! actionCanvasButton("","btn-editCanvas","editoffcanvas","edit",'finance.financeexpenses.edit',$item->financeExpenses_id) !!}
                                                </li>
                                                @endcan
                                                @can('finance-financeexpenses-destroy')
                                                <li>{!! deleteCanvasButton("","btn-hover-danger",'finance.financeexpenses.destroy',$item->financeExpenses_id) !!}</li>
                                            @endcan   
                                            </ul> </td>
                                               </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                                {{-- Add Modal --}}
                       <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                        <div class="offcanvas-header border-bottom border-light">
                            <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Expenses</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit Expenses<h5><button type="button" class="btn-close"
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
    