@extends('omis.partials.layouts')
    @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title">Generator Logbook List</h1>
                                        <nav>
                                            <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                <li class="breadcrumb-item"><a href="#">Generatorlogbook</a></li>
                                                <li class="breadcrumb-item"><a href="#">Generatorlogbook Manage</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Generatorlogbook
                                                </li>
                                            </ol>
                                        </nav>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="d-flex">
                                        {!!createCanvasButton("customBtnAdd","","Generator Logbook","officemanagement.generatorlogbook.create") !!}
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
<th class="tb-col"><span class="overline-title">logbookTitle</span></th>
<th class="tb-col"><span class="overline-title">subTitle</span></th>
<th class="tb-col"><span class="overline-title">pageNumber</span></th>
<!-- <th class="tb-col"><span class="overline-title">checkedDate</span></th>
<th class="tb-col"><span class="overline-title">fullName</span></th>
<th class="tb-col"><span class="overline-title">purpose</span></th>
<th class="tb-col"><span class="overline-title">from</span></th>
<th class="tb-col"><span class="overline-title">to</span></th>
<th class="tb-col"><span class="overline-title">totalTime</span></th>
<th class="tb-col"><span class="overline-title">dieselConsumed</span></th>
<th class="tb-col"><span class="overline-title">mobileConsume</span></th>
<th class="tb-col"><span class="overline-title">servicingDate</span></th>
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
                                            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->logbookTitle }}</td>
<td class="tb-col">{{ $item->subTitle }}</td>
<td class="tb-col">{{ $item->pageNumber }}</td>
<!-- <td class="tb-col">{{ $item->checkedDate }}</td>
<td class="tb-col">{{ $item->fullName }}</td>
<td class="tb-col">{{ $item->purpose }}</td>
<td class="tb-col">{{ $item->from }}</td>
<td class="tb-col">{{ $item->to }}</td>
<td class="tb-col">{{ $item->totalTime }}</td>
<td class="tb-col">{{ $item->dieselConsumed }}</td>
<td class="tb-col">{{ $item->mobileConsume }}</td>
<td class="tb-col">{{ $item->servicingDate }}</td>
<td class="tb-col">{{ $item->alias }}</td> -->
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                <li>    
                                                    {!! actionCanvasButton("","btn-showCanvas","showoffcanvas","eye",'officemanagement.generatorlogbook.show',$item->generatorlogbook_id) !!}
                                                </li>
                                               <li> 
                                                        {!! actionCanvasButton("","btn-editCanvas","editoffcanvas","edit",'officemanagement.generatorlogbook.edit',$item->generatorlogbook_id) !!}
                                                </li>
                                                <li>{!! deleteCanvasButton("","btn-hover-danger",'officemanagement.generatorlogbook.destroy',$item->generatorlogbook_id) !!}</li>
                                               </ul> </td>
                                               </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                                {{-- Add Modal --}}
                       <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                        <div class="offcanvas-header border-bottom border-light">
                            <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Generator Logbook</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit Generator Logbook<h5><button type="button" class="btn-close"
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
    