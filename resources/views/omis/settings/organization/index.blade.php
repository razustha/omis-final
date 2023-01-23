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
                                            <li><a href="{{route('settings.organization.create')}}" class="btn btn-md d-md-none btn-primary" data-bs-toggle="modal"
                                                    data-bs-target=""><em
                                                        class="icon ni ni-plus"></em><span>Add</span></a></li>
                                            <li><a href="{{route('settings.organization.create')}}"
                                                    class="btn btn-primary d-none d-md-inline-flex"><em
                                                        class="icon ni ni-plus"></em><span>Add Organization</span></a></li>
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
                                                                                                class="overline-title">Action</span>
                                            </th>
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
                                                    <li><a href="{{route('settings.organization.show',[$item->organization_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                                                     <li><a href="{{route('settings.organization.edit',[$item->organization_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                                                    <li><button type="button" data-route="{{route('settings.organization.destroy',[$item->organization_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
                                                   </ul> </td>
                                                   </tr>

                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        