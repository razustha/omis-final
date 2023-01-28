@extends('omis.partials.layouts')
        @section('content')
            <div class="nk-content">
                <div class="container">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <div class="nk-block-head-between flex-wrap gap g-2">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title">Taskreports List</h1>
                                            <nav>
                                                <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                    <li class="breadcrumb-item"><a href="#">Taskreports</a></li>
                                                    <li class="breadcrumb-item"><a href="#">Taskreports Manage</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">Taskreports
                                                    </li>
                                                </ol>
                                            </nav>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <ul class="d-flex">
                                            <li><a href="{{route('reports.taskreports.create')}}" class="btn btn-md d-md-none btn-primary" data-bs-toggle="modal"
                                                    data-bs-target=""><em
                                                        class="icon ni ni-plus"></em><span>Add</span></a></li>
                                            <li><a href="{{route('reports.taskreports.create')}}"
                                                    class="btn btn-primary d-none d-md-inline-flex"><em
                                                        class="icon ni ni-plus"></em><span>Add Taskreports</span></a></li>
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
<th class="tb-col"><span class="overline-title">employee_id</span></th>
<th class="tb-col"><span class="overline-title">taskType</span></th>
<th class="tb-col"><span class="overline-title">taskName</span></th>
<th class="tb-col"><span class="overline-title">tastStartDate</span></th>
<th class="tb-col"><span class="overline-title">taskEndDate</span></th>
<th class="tb-col"><span class="overline-title">taskOverdueDate</span></th>
<th class="tb-col"><span class="overline-title">taskReportsBy</span></th>
<th class="tb-col"><span class="overline-title">taotalDaysToComplete</span></th>
<th class="tb-col"><span class="overline-title">taskAssignBy</span></th>
<th class="tb-col"><span class="overline-title">issueDate</span></th>
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
                                                <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->employee_id }}</td>
<td class="tb-col">{{ $item->taskType }}</td>
<td class="tb-col">{{ $item->taskName }}</td>
<td class="tb-col">{{ $item->tastStartDate }}</td>
<td class="tb-col">{{ $item->taskEndDate }}</td>
<td class="tb-col">{{ $item->taskOverdueDate }}</td>
<td class="tb-col">{{ $item->taskReportsBy }}</td>
<td class="tb-col">{{ $item->taotalDaysToComplete }}</td>
<td class="tb-col">{{ $item->taskAssignBy }}</td>
<td class="tb-col">{{ $item->issueDate }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                    <ul class="d-flex flex-wrap ">
                                                    <li><a href="{{route('reports.taskreports.show',[$item->taskreports_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                                                     <li><a href="{{route('reports.taskreports.edit',[$item->taskreports_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                                                    <li><button type="button" data-route="{{route('reports.taskreports.destroy',[$item->taskreports_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
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
        