@extends('omis.partials.layouts')
        @section('content')
            <div class="nk-content">
                <div class="container">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <div class="nk-block-head-between flex-wrap gap g-2">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title">Generatorlogbook List</h1>
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
                                            <li><a href="{{route('officemanagement.generatorlogbook.create')}}" class="btn btn-md d-md-none btn-primary" data-bs-toggle="modal"
                                                    data-bs-target=""><em
                                                        class="icon ni ni-plus"></em><span>Add</span></a></li>
                                            <li><a href="{{route('officemanagement.generatorlogbook.create')}}"
                                                    class="btn btn-primary d-none d-md-inline-flex"><em
                                                        class="icon ni ni-plus"></em><span>Add Generatorlogbook</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-block">
                                <div class="card">
                                    <table class="datatable-init table" data-nk-container="table-responsive">
                                        <thead class="table-light">
                                            <tr>
                                            <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">Title</span></th>
<th class="tb-col"><span class="overline-title">sub Title</span></th>
<!-- <th class="tb-col"><span class="overline-title">pageNumber</span></th> -->
<th class="tb-col"><span class="overline-title">checked Date</span></th>
<th class="tb-col"><span class="overline-title">full Name</span></th>
<!-- <th class="tb-col"><span class="overline-title">purpose</span></th> -->
<!-- <th class="tb-col"><span class="overline-title">from</span></th> -->
<!-- <th class="tb-col"><span class="overline-title">to</span></th>
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
<!-- <td class="tb-col">{{ $item->pageNumber }}</td> -->
<td class="tb-col">{{ $item->checkedDate }}</td>
<td class="tb-col">{{ $item->fullName }}</td>
<!-- <td class="tb-col">{{ $item->purpose }}</td>
<td class="tb-col">{{ $item->from }}</td>
<td class="tb-col">{{ $item->to }}</td>
<td class="tb-col">{{ $item->totalTime }}</td>
<td class="tb-col">{{ $item->dieselConsumed }}</td>
<td class="tb-col">{{ $item->mobileConsume }}</td>
<td class="tb-col">{{ $item->servicingDate }}</td> -->
<!-- <td class="tb-col">{{ $item->alias }}</td> -->
<td class="tb-col">{!! $item->status !!}</td>
<td class="tb-col">
                                                    <ul class="d-flex flex-wrap ">
                                                    <li><a href="{{route('officemanagement.generatorlogbook.show',[$item->generatorlogbook_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                                                     <li><a href="{{route('officemanagement.generatorlogbook.edit',[$item->generatorlogbook_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                                                    <li><button type="button" data-route="{{route('officemanagement.generatorlogbook.destroy',[$item->generatorlogbook_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
                                                   </ul> </td>
                                                   <tr>

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
        