@extends('employee.partials.layouts')
@section('content')
<div class="nk-content">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-between flex-wrap gap g-2">
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title">Expensesclaim List</h1>
                                <nav>
                                    <ol class="breadcrumb breadcrumb-arrow mb-0">
                                        <li class="breadcrumb-item"><a href="#">Expensesclaim</a></li>
                                        <li class="breadcrumb-item"><a href="#">Expensesclaim Manage</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Expensesclaim
                                        </li>
                                    </ol>
                                </nav>
                        </div>
                        <div class="nk-block-head-content">
                            <ul class="d-flex">
                               
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
                                    <th class="tb-col" data-sortable="false"><span class="overline-title">Action</span></th>
                                </tr>
                            </thead>
                            <tbody>
                               

                            </tbody>
                        </table>
                        {{-- Add Modal --}}
                        <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                            <div class="offcanvas-header border-bottom border-light">
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Expensesclaim</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                            <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit Expensesclaim<h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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