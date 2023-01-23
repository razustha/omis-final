@extends('omis.partials.layouts')
    @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title">Organization List</h1>
                                        <nav>
                                            <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                <li class="breadcrumb-item"><a href="#">Organization</a></li>
                                                <li class="breadcrumb-item"><a href="#">Organization Manage</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Organization
                                                </li>
                                            </ol>
                                        </nav>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="d-flex">
                                        {!!createCanvasButton("customBtnAdd","","Organization","master.organization.create") !!}
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
<th class="tb-col"><span class="overline-title">organizationName</span></th>
<th class="tb-col"><span class="overline-title">organizatoinCategory</span></th>
<th class="tb-col"><span class="overline-title">ownerName</span></th>
<th class="tb-col"><span class="overline-title">phoneNumber</span></th>
<th class="tb-col"><span class="overline-title">landLineNumber</span></th>
<th class="tb-col"><span class="overline-title">emailAddress</span></th>
<th class="tb-col"><span class="overline-title">faxAddress</span></th>
<th class="tb-col"><span class="overline-title">country_id</span></th>
<th class="tb-col"><span class="overline-title">state_id</span></th>
<th class="tb-col"><span class="overline-title">city_id</span></th>
<th class="tb-col"><span class="overline-title">district_id</span></th>
<th class="tb-col"><span class="overline-title">geoMapLocation</span></th>
<th class="tb-col"><span class="overline-title">documentType</span></th>
<th class="tb-col"><span class="overline-title">documentName</span></th>
<th class="tb-col"><span class="overline-title">documentPath</span></th>
<th class="tb-col"><span class="overline-title">budgetSize</span></th>
<th class="tb-col"><span class="overline-title">alias</span></th>
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
                                            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->organizationName }}</td>
<td class="tb-col">{{ $item->organizatoinCategory }}</td>
<td class="tb-col">{{ $item->ownerName }}</td>
<td class="tb-col">{{ $item->phoneNumber }}</td>
<td class="tb-col">{{ $item->landLineNumber }}</td>
<td class="tb-col">{{ $item->emailAddress }}</td>
<td class="tb-col">{{ $item->faxAddress }}</td>
<td class="tb-col">{{ $item->country_id }}</td>
<td class="tb-col">{{ $item->state_id }}</td>
<td class="tb-col">{{ $item->city_id }}</td>
<td class="tb-col">{{ $item->district_id }}</td>
<td class="tb-col">{{ $item->geoMapLocation }}</td>
<td class="tb-col">{{ $item->documentType }}</td>
<td class="tb-col">{{ $item->documentName }}</td>
<td class="tb-col">{{ $item->documentPath }}</td>
<td class="tb-col">{{ $item->budgetSize }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                <li>    
                                                    {!! actionCanvasButton("","btn-showCanvas","showoffcanvas","eye",'master.organization.show',$item->organization_id) !!}
                                                </li>
                                               <li> 
                                                        {!! actionCanvasButton("","btn-editCanvas","editoffcanvas","edit",'master.organization.edit',$item->organization_id) !!}
                                                </li>
                                                <li>{!! deleteCanvasButton("","btn-hover-danger",'master.organization.destroy',$item->organization_id) !!}</li>
                                               </ul> </td>
                                               </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                                {{-- Add Modal --}}
                       <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                        <div class="offcanvas-header border-bottom border-light">
                            <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Organization</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit Organization<h5><button type="button" class="btn-close"
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
    