@extends('omis.partials.layouts')
    @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title">Fleet Management List</h1>
                                        <nav>
                                            <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                <li class="breadcrumb-item"><a href="#">Fleet Management</a></li>
                                                <li class="breadcrumb-item"><a href="#">Fleet Management Manage</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Fleet Management
                                                </li>
                                            </ol>
                                        </nav>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="d-flex">
                                        {!!createCanvasButton("customBtnAdd","","Fleet Management","travelfleet.fleetmanagement.create") !!}
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
<th class="tb-col"><span class="overline-title">lesseeName</span></th>
<th class="tb-col"><span class="overline-title">lesseeAddress</span></th>
<!-- <th class="tb-col"><span class="overline-title">lessorName</span></th>
<th class="tb-col"><span class="overline-title">lessorContact</span></th>
<th class="tb-col"><span class="overline-title">vehicleType_id</span></th>
<th class="tb-col"><span class="overline-title">vehicleNumber</span></th>
<th class="tb-col"><span class="overline-title">driverName</span></th>
<th class="tb-col"><span class="overline-title">driverContact</span></th>
<th class="tb-col"><span class="overline-title">driverAddress</span></th>
<th class="tb-col"><span class="overline-title">organizationName</span></th>
<th class="tb-col"><span class="overline-title">staff_Id</span></th>
<th class="tb-col"><span class="overline-title">staffName</span></th>
<th class="tb-col"><span class="overline-title">staffIdentity</span></th>
<th class="tb-col"><span class="overline-title">totalPeople</span></th>
<th class="tb-col"><span class="overline-title">travelDateFrom</span></th>
<th class="tb-col"><span class="overline-title">travelDateTo</span></th>
<th class="tb-col"><span class="overline-title">NumerOfDays</span></th>
<th class="tb-col"><span class="overline-title">travelPlaceFrom</span></th>
<th class="tb-col"><span class="overline-title">travelPlaceTo</span></th>
<th class="tb-col"><span class="overline-title">costPerDay</span></th>
<th class="tb-col"><span class="overline-title">tax</span></th>
<th class="tb-col"><span class="overline-title">remainingAmount</span></th>
<th class="tb-col"><span class="overline-title">HCIName</span></th>
<th class="tb-col"><span class="overline-title">HCIDate</span></th>
<th class="tb-col"><span class="overline-title">HCIAddress</span></th>
<th class="tb-col"><span class="overline-title">vehileCompany_id</span></th>
<th class="tb-col"><span class="overline-title">vehileCompanyName</span></th>
<th class="tb-col"><span class="overline-title">vehicleCompanyDate</span></th>
<th class="tb-col"><span class="overline-title">vehicleCompanyAddress</span></th>
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
                                            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->lesseeName }}</td>
<td class="tb-col">{{ $item->lesseeAddress }}</td>
<!-- <td class="tb-col">{{ $item->lessorName }}</td>
<td class="tb-col">{{ $item->lessorContact }}</td>
<td class="tb-col">{{ $item->vehicleType_id }}</td>
<td class="tb-col">{{ $item->vehicleNumber }}</td>
<td class="tb-col">{{ $item->driverName }}</td>
<td class="tb-col">{{ $item->driverContact }}</td>
<td class="tb-col">{{ $item->driverAddress }}</td>
<td class="tb-col">{{ $item->organizationName }}</td>
<td class="tb-col">{{ $item->staff_Id }}</td>
<td class="tb-col">{{ $item->staffName }}</td>
<td class="tb-col">{{ $item->staffIdentity }}</td>
<td class="tb-col">{{ $item->totalPeople }}</td>
<td class="tb-col">{{ $item->travelDateFrom }}</td>
<td class="tb-col">{{ $item->travelDateTo }}</td>
<td class="tb-col">{{ $item->NumerOfDays }}</td>
<td class="tb-col">{{ $item->travelPlaceFrom }}</td>
<td class="tb-col">{{ $item->travelPlaceTo }}</td>
<td class="tb-col">{{ $item->costPerDay }}</td>
<td class="tb-col">{{ $item->tax }}</td>
<td class="tb-col">{{ $item->remainingAmount }}</td>
<td class="tb-col">{{ $item->HCIName }}</td>
<td class="tb-col">{{ $item->HCIDate }}</td>
<td class="tb-col">{{ $item->HCIAddress }}</td>
<td class="tb-col">{{ $item->vehileCompany_id }}</td>
<td class="tb-col">{{ $item->vehileCompanyName }}</td>
<td class="tb-col">{{ $item->vehicleCompanyDate }}</td>
<td class="tb-col">{{ $item->vehicleCompanyAddress }}</td>
<td class="tb-col">{{ $item->alias }}</td> -->
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                <li>    
                                                    {!! actionCanvasButton("","btn-showCanvas","showoffcanvas","eye",'travelfleet.fleetmanagement.show',$item->fleetmanagement_id) !!}
                                                </li>
                                               <li> 
                                                        {!! actionCanvasButton("","btn-editCanvas","editoffcanvas","edit",'travelfleet.fleetmanagement.edit',$item->fleetmanagement_id) !!}
                                                </li>
                                                <li>{!! deleteCanvasButton("","btn-hover-danger",'travelfleet.fleetmanagement.destroy',$item->fleetmanagement_id) !!}</li>
                                               </ul> </td>
                                               </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                                {{-- Add Modal --}}
                       <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                        <div class="offcanvas-header border-bottom border-light">
                            <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Fleet Management</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit Fleet Management<h5><button type="button" class="btn-close"
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
    