@extends('omis.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">City List</h2>
                                <nav>
                                    <ol class="breadcrumb breadcrumb-arrow mb-0">
                                        <li class="breadcrumb-item"><a href="#">City</a></li>
                                        <li class="breadcrumb-item"><a href="#">City Manage</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">City
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="nk-block-head-content">
                                <ul class="d-flex">
                                    <button class="btn btn-primary btn-add" data-bs-toggle="offcanvas"
                                        data-bs-target="#addOffcanvas"> <em class="icon ni ni-plus"></em>Add City</button>
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
                                        <th class="tb-col"><span class="overline-title">country</span></th>
                                        <th class="tb-col"><span class="overline-title">state</span></th>
                                        <th class="tb-col"><span class="overline-title">district</span></th>
                                        <th class="tb-col"><span class="overline-title">cityName</span></th>
                                        <th class="tb-col"><span class="overline-title">alias</span></th>
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
                                            <td class="tb-col">{{ $item->country_id }}</td>
                                            <td class="tb-col">{{ $item->state_id }}</td>
                                            <td class="tb-col">{{ $item->district_id }}</td>
                                            <td class="tb-col">{{ $item->cityName }}</td>
                                            <td class="tb-col">{{ $item->alias }}</td>
                                            <td class="tb-col">{!! $item->status_name !!}</td>
                                            <td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                    <li>
                                                        <button
                                                            class="btn btn-color-primary btn-hover-primary btn-icon btn-soft btn-showCanvas"
                                                            data-route="{{ route('master.city.show', [$item->city_id]) }}"
                                                            data-bs-toggle="offcanvas" data-bs-target="#showoffcanvas"> <em
                                                                class="icon ni ni-eye"></em></button>
                                                    </li>
                                                    <li> <button
                                                            class="btn btn-color-primary btn-hover-primary btn-icon btn-soft btn-editCanvas"
                                                            data-route="{{ route('master.city.edit', [$item->city_id]) }}"
                                                            data-bs-toggle="offcanvas" data-bs-target="#editoffcanvas"> <em
                                                                class="icon ni ni-edit"></em></button>
                                                    </li>
                                                    <li><button type="button"
                                                            data-route="{{ route('master.city.destroy', [$item->city_id]) }}"
                                                            class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em
                                                                class="icon ni ni-trash"></em></button></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{-- Add Modal --}}
                            <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                                <div class="offcanvas-header border-bottom border-light">
                                    <h5 class="offcanvas-title" id="offcanvasTopLabel">Add City</h5><button type="button"
                                        class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body" data-simplebar>
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="alert alert-danger print-error-msg" style="display:none">
                                                <ul></ul>
                                            </div>

                                            <form action="" class="row">
                                                <div class="form-control-wrap col-md-6">
                                                    <?php createText('country_id', 'country_id', 'Country Id'); ?>
                                                </div>

                                                <div class="form-control-wrap col-md-6">

                                                    <?php createText('state_id', 'state_id', 'State Id'); ?>
                                                </div>

                                                <div class="col-lg-6">
                                                    {{ createText('district_id', 'district_id', 'District Id') }}
                                                </div>
                                                <div class="col-lg-6">{{ createText('cityName', 'cityName', 'CityName') }}
                                                </div>
                                                <div class="col-lg-6">{{ createText('alias', 'alias', 'Alias') }}
                                                </div>
                                                <div class="col-lg-6">
                                                    {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive']) }}
                                                </div>
                                                <div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{ createTextArea('remarks', 'remarks', 'remarks', '', '') }}
                                                </div> <br>
                                                <div class="col-md-12"><?php createButton('btn-primary btn-store', '', 'Submit'); ?></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- End of Add Modal --}}

                            {{-- Edit Modal --}}
                            <div class="offcanvas offcanvas-end offcanvas-size-xxlg editoffcanvas" id="editoffcanvas">

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
@push('js')
    <script>
        $(document).on("click", ".btn-editCanvas", function(obj) {
            var route = $(this).data("route");
            $.ajax({
                type: "get",
                url: route,
                success: function(res) {
                    $('#editoffcanvas').html(res.content);

                }
            })
        })

        $(document).on("click", ".btn-showCanvas", function(obj) {
            var route = $(this).data("route");
            $.ajax({
                type: "get",
                url: route,
                success: function(res) {
                    $('#showoffcanvas').html(res.content);
                }
            })
        })


        $(document).on("click", ".btn-store", function(e) {
            e.preventDefault();
            let _token = "{{ csrf_token() }}";
            var country_id = $("#country_id").val();
            var state_id = $("#state_id").val();
            var district_id = $("#district_id").val();
            var cityName = $("#cityName").val();
            var alias = $("#alias").val();
            var status = $("#status").val();
            var remarks = $("#remarks").val();
            $.ajax({
                url: '{{ route('master.city.store') }}',
                type: "post",
                data: {
                    _token: _token,
                    country_id: country_id,
                    state_id: state_id,
                    district_id: district_id,
                    cityName: cityName,
                    alias: alias,
                    status: status,
                    remarks: remarks,
                },
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        alert(data.success);
                        location.reload();
                    } else {
                        printErrorMsg(data.error);
                    }
                }
            })
        })

        $(document).on("click", ".btn-update", function(e) {
            e.preventDefault();
            let _token = "{{ csrf_token() }}";
            let updateId = $("#updateId").val();
            let route = $("#route").val();
            var country_id = $(".updateForm").find("#country_id").val();
            var state_id = $(".updateForm").find("#state_id").val();
            var district_id = $(".updateForm").find("#district_id").val();
            var cityName = $(".updateForm").find("#cityName").val();
            var alias = $(".updateForm").find("#alias").val();
            var status = $(".updateForm").find("#status").val();
            var remarks = $(".updateForm").find("#remarks").val();
            $.ajax({
                url: route,
                type: "put",
                data: {
                    _token: _token,
                    country_id: country_id,
                    state_id: state_id,
                    district_id: district_id,
                    cityName: cityName,
                    alias: alias,
                    status: status,
                    remarks: remarks,
                },
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        alert(data.success);
                        location.reload();
                    } else {
                        printErrorMsg(data.error);
                    }
                }
            })
        })

        function printErrorMsg(msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display', 'block');
            $.each(msg, function(key, value) {
                $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
            });
        }

        $(document).ready(function() {
            $('#CustomTable').DataTable();
        });
    </script>
@endpush
