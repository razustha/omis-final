@extends('omis.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Users List</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Users</a></li>
                                            <li class="breadcrumb-item"><a href="#">Users Manage</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Users
                                            </li>
                                        </ol>
                                    </nav>
                            </div>
                            <div class="nk-block-head-content">
                                <ul class="d-flex">
    
                                    {!! createCanvasButton('customBtnAdd', '', 'Users', 'setting.users.create') !!}
                   
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
                                        <th class="tb-col"><span class="overline-title">User Type</span></th>
                                        <th class="tb-col"><span class="overline-title">USer Roles</span></th>
                                        {{-- <th class="tb-col"><span class="overline-title">branch_id</span></th> --}}
                                        <th class="tb-col"><span class="overline-title">name</span></th>
                                        <th class="tb-col"><span class="overline-title">mobile</span></th>
                                        <th class="tb-col"><span class="overline-title">email</span></th>

                                        <th class="tb-col"><span class="overline-title">status</span></th>
                                        <th class="tb-col" data-sortable="false"><span class="overline-title">Action</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="tb-col">{{ $i++ }}</td>
                                            <td class="tb-col">{{ $item->user_type }}</td>
                                            {{-- <td class="tb-col">{{ $item->company_id }}</td> --}}
                                            <td class="tb-col">
                                                @foreach($item->roles as $role)
                                                {{ $role->name}},
                                                @endforeach
                                            </td>
                                            <td class="tb-col">{{ $item->name }}</td>
                                            <td class="tb-col">{{ $item->mobile }}</td>
                                            <td class="tb-col">{{ $item->email }}</td>

                                            {{-- <td class="tb-col">{{ $item->created_by }}</td> --}}
                                            {{-- <td class="tb-col">{{ $item->updated_by }}</td> --}}
                                            <td class="tb-col">{!! $item->status_name !!}</td>
                                            {{-- <td class="tb-col">{{ $item->is_deleted }}</td> --}}
                                            <td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                    <li>
                      
                                                        {!! actionCanvasButton('', 'btn-showCanvas', 'showoffcanvas', 'eye', 'setting.users.show', $item->id) !!}
                            
                                                    </li>
                                                    <li>

                                                        {!! actionCanvasButton('', 'btn-editCanvas', 'editoffcanvas', 'edit', 'setting.users.edit', $item->id) !!}
                                        
                                                    </li>
                                                    <li>

                                                        {!! deleteCanvasButton('', 'btn-hover-danger', 'setting.users.destroy', $item->id) !!}
                     
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{-- Add Modal --}}
                            <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                                <div class="offcanvas-header border-bottom border-light">
                                    <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Users</h5><button type="button"
                                        class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit Users<h5><button type="button"
                                            class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
@endsection
