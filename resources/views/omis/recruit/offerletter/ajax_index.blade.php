@extends('omis.partials.layouts')
    @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title">Offer Letter List</h1>
                                        <nav>
                                            <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                <li class="breadcrumb-item"><a href="#">Offer Letter</a></li>
                                                <li class="breadcrumb-item"><a href="#">Offer Letter Manage</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Offer Letter
                                                </li>
                                            </ol>
                                        </nav>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="d-flex">
                                        @can('recruit-offerletter-create')
                                        {!!createCanvasButton("customBtnAdd","","Offer Letter","recruit.offerletter.create") !!}
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
<th class="tb-col"><span class="overline-title">applicants</span></th>
<th class="tb-col"><span class="overline-title">designation</span></th>
<th class="tb-col"><span class="overline-title">department Name</span></th>
<!-- <th class="tb-col"><span class="overline-title">workingHour</span></th>
<th class="tb-col"><span class="overline-title">workingShift</span></th>
<th class="tb-col"><span class="overline-title">workingMode</span></th>
<th class="tb-col"><span class="overline-title">offeredSalary</span></th>
<th class="tb-col"><span class="overline-title">contractTimePeriod</span></th>
<th class="tb-col"><span class="overline-title">offerDescription</span></th>
<th class="tb-col"><span class="overline-title">joiningDate</span></th>
<th class="tb-col"><span class="overline-title">offeredIssueBy</span></th>
<th class="tb-col"><span class="overline-title">offerIssueDate</span></th>
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
                                            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->applicants_id }}</td>
<td class="tb-col">{{ $item->designation }}</td>
<td class="tb-col">{{ $item->departmentName }}</td>
<!-- <td class="tb-col">{{ $item->workingHour }}</td>
<td class="tb-col">{{ $item->workingShift }}</td>
<td class="tb-col">{{ $item->workingMode }}</td>
<td class="tb-col">{{ $item->offeredSalary }}</td>
<td class="tb-col">{{ $item->contractTimePeriod }}</td>
<td class="tb-col">{{ $item->offerDescription }}</td>
<td class="tb-col">{{ $item->joiningDate }}</td>
<td class="tb-col">{{ $item->offeredIssueBy }}</td>
<td class="tb-col">{{ $item->offerIssueDate }}</td>
<td class="tb-col">{{ $item->alias }}</td> -->
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                <li>   
                                                    @can('recruit-offerletter-show') 
                                                    {!! actionCanvasButton("","btn-showCanvas","showoffcanvas","eye",'recruit.offerletter.show',$item->offerletter_id) !!}
                                                    @endcan
                                                </li>
                                               <li> 
                                               @can('recruit-offerletter-edit')
                                                        {!! actionCanvasButton("","btn-editCanvas","editoffcanvas","edit",'recruit.offerletter.edit',$item->offerletter_id) !!}
                                                @endcan
                                                    </li>
                                                <li>
                                                @can('recruit-offerletter-destroy')    
                                                {!! deleteCanvasButton("","btn-hover-danger",'recruit.offerletter.destroy',$item->offerletter_id) !!}
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
                            <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Offer Letter</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit Offer Letter<h5><button type="button" class="btn-close"
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
    