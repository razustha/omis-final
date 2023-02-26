@extends('omis.partials.layouts')
    @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title">Job Post List</h1>
                                        <nav>
                                            <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                <li class="breadcrumb-item"><a href="#">Job Post</a></li>
                                                <li class="breadcrumb-item"><a href="#">Job Post Manage</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Job Post
                                                </li>
                                            </ol>
                                        </nav>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="d-flex">
                                        @can('recruit-jobpost-create')
                                        {!!createCanvasButton("customBtnAdd","","Job Post","recruit.jobpost.create") !!}
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
<th class="tb-col"><span class="overline-title">job Title</span></th>
<th class="tb-col"><span class="overline-title">job Type</span></th>
<th class="tb-col"><span class="overline-title">vacancy Number</span></th>
<th class="tb-col"><span class="overline-title">closing Date</span></th>
<th class="tb-col"><span class="overline-title">job Category</span></th>
<!-- <th class="tb-col"><span class="overline-title">alias</span></th> -->
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
                                            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->jobTitle }}</td>
<td class="tb-col">{{ $item->jobType }}</td>
<td class="tb-col">{{ $item->vacancyNumber }}</td>
<td class="tb-col">{{ $item->closingDate }}</td>
<td class="tb-col">{{ $item->jobCategory }}</td>
<!-- <td class="tb-col">{{ $item->alias }}</td> -->
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                <li>    
                                                @can('recruit-jobpost-show')
                                                    {!! actionCanvasButton("","btn-showCanvas","showoffcanvas","eye",'recruit.jobpost.show',$item->jobpost_id) !!}
                                                @endcan
                                                </li>
                                               <li> 
                                               @can('recruit-jobpost-edit')
                                                        {!! actionCanvasButton("","btn-editCanvas","editoffcanvas","edit",'recruit.jobpost.edit',$item->jobpost_id) !!}
                                                @endcan
                                                    </li>
                                                <li>
                                                @can('recruit-jobpost-destroy')
                                                    {!! deleteCanvasButton("","btn-hover-danger",'recruit.jobpost.destroy',$item->jobpost_id) !!}
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
                            <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Job Post</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit Job Post<h5><button type="button" class="btn-close"
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
    