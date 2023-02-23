@extends('omis.partials.layouts')
    @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title">Job Application List</h1>
                                        <nav>
                                            <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                <li class="breadcrumb-item"><a href="#">Job Application</a></li>
                                                <li class="breadcrumb-item"><a href="#">Job Application Manage</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Job Application
                                                </li>
                                            </ol>
                                        </nav>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="d-flex">
                                        @can('recruit-jobapplication-create')
                                        {!!createCanvasButton("customBtnAdd","","Job Application","recruit.jobapplication.create") !!}
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
<th class="tb-col"><span class="overline-title">applied Job Title</span></th>
<th class="tb-col"><span class="overline-title">applicants Name</span></th>
<th class="tb-col"><span class="overline-title">applied Department Name</span></th>
<!-- <th class="tb-col"><span class="overline-title">workingExperience</span></th>
<th class="tb-col"><span class="overline-title">previousWorkingCompanyName</span></th>
<th class="tb-col"><span class="overline-title">applyDate</span></th>
<th class="tb-col"><span class="overline-title">recommendedBy</span></th>
<th class="tb-col"><span class="overline-title">portfolio</span></th>
<th class="tb-col"><span class="overline-title">fullTime</span></th>
<th class="tb-col"><span class="overline-title">partTime</span></th>
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
                                            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->applyJobTitle }}</td>
<td class="tb-col">{{ $item->applicantsName }}</td>
<td class="tb-col">{{ $item->applyedDepartmentName }}</td>
<!-- <td class="tb-col">{{ $item->workingExperience }}</td>
<td class="tb-col">{{ $item->previousWorkingCompanyName }}</td>
<td class="tb-col">{{ $item->applyDate }}</td>
<td class="tb-col">{{ $item->recommendedBy }}</td>
<td class="tb-col">{{ $item->portfolio }}</td>
<td class="tb-col">{{ $item->fullTime }}</td>
<td class="tb-col">{{ $item->partTime }}</td>
<td class="tb-col">{{ $item->alias }}</td> -->
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                <li>    
                                                @can('recruit-jobapplication-create')
                                                    {!! actionCanvasButton("","btn-showCanvas","showoffcanvas","eye",'recruit.jobapplication.show',$item->jobapplication_id) !!}
                                                @endcan
                                                </li>
                                               <li> 
                                               @can('recruit-jobapplication-show')
                                                        {!! actionCanvasButton("","btn-editCanvas","editoffcanvas","edit",'recruit.jobapplication.edit',$item->jobapplication_id) !!}
                                                @endcan
                                                </li>
                                                <li>
                                                @can('recruit-jobapplication-destroy')    
                                                {!! deleteCanvasButton("","btn-hover-danger",'recruit.jobapplication.destroy',$item->jobapplication_id) !!}
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
                            <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Job Application</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit Job Application<h5><button type="button" class="btn-close"
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
    