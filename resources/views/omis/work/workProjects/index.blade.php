@extends('omis.partials.layouts')
        @section('content')
            <div class="nk-content">
                <div class="container">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <div class="nk-block-head-between flex-wrap gap g-2">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title">WorkProjects List</h1>
                                            <nav>
                                                <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                    <li class="breadcrumb-item"><a href="#">WorkProjects</a></li>
                                                    <li class="breadcrumb-item"><a href="#">WorkProjects Manage</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">WorkProjects
                                                    </li>
                                                </ol>
                                            </nav>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <ul class="d-flex">
                                            <li><a href="{{route('work.workprojects.create')}}" class="btn btn-md d-md-none btn-primary" data-bs-toggle="modal"
                                                    data-bs-target=""><em
                                                        class="icon ni ni-plus"></em><span>Add</span></a></li>
                                            <li><a href="{{route('work.workprojects.create')}}"
                                                    class="btn btn-primary d-none d-md-inline-flex"><em
                                                        class="icon ni ni-plus"></em><span>Add WorkProjects</span></a></li>
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
<th class="tb-col"><span class="overline-title">Client Name</span></th>
<th class="tb-col"><span class="overline-title">Start Date</span></th>
<th class="tb-col"><span class="overline-title">End Date</span></th>
<!-- <th class="tb-col"><span class="overline-title">Priority</span></th> -->
<!-- <th class="tb-col"><span class="overline-title">company Id</span></th> -->
<!-- <th class="tb-col"><span class="overline-title">Assigned Employees</span></th> -->
<!-- <th class="tb-col"><span class="overline-title">Description</span></th> -->
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
                                                <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->projectTitle }}</td>
<td class="tb-col">{{ $item->projectStartClient }}</td>
<td class="tb-col">{{ $item->projectStartDate }}</td>
<td class="tb-col">{{ $item->projectEndDate }}</td>
<!-- <td class="tb-col">{{ $item->projectPriority }}</td> -->
<!-- <td class="tb-col">{{ $item->companyName_id }}</td> -->
<!-- <td class="tb-col">{{ $item->assignedEmployees }}</td> -->
<!-- <td class="tb-col">{{ $item->projectDescription }}</td> -->
<!-- <td class="tb-col">{{ $item->alias }}</td> -->
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                    <ul class="d-flex flex-wrap ">
                                                    <li><a href="{{route('work.workprojects.show',[$item->workProject_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                                                     <li><a href="{{route('work.workprojects.edit',[$item->workProject_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                                                    <li><button type="button" data-route="{{route('work.workprojects.destroy',[$item->workProject_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
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
        @push('js')
    <script>
        $(document).on('click', ".btn-hover-danger", function() {
            let _token = "{{ csrf_token() }}";
            let url = $(this).data("route");
            console.log(url);
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                var id = $(this).data("id");
                var token = $("meta[name='csrf-token']").attr("content");

                $.ajax({
                    url: url,
                    type: "DELETE",
                    data: {
                        "_token": _token,
                    },
                    success: function(res) {
                        console.log(res);
                        if (res.status) {
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: res.message,
                                showConfirmButton: false,
                                timer: 1500
                            })
                            setTimeout(function() {
                                window.location.reload();
                            }, 1500);
                        }

                    }
                });
            })
        })
    </script>
@endpush
        