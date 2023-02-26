@extends('employee.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Attendence List</h1>
                                    {{-- <div class="d-flex flex-column flex-md-row align-items-md-center">
                                        <div class="d-flex gap-4">
                                            <div class="col">
                                                <div class="form-group">
                                                    {{ createLabel('Month', 'form-label col-form-label', 'Month') }}
                                                    <div class="form-control-wrap"> <select class="form-select"
                                                            id="exampleFormSelect1" aria-label="Default select example">
                                                            <option selected>January</option>
                                                            <option value="1">January</option>
                                                            <option value="2">February</option>
                                                            <option value="3">March</option>
                                                        </select> </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    {{ createLabel('Month', 'form-label col-form-label', 'Year') }}
                                                    <div class="form-control-wrap"> <select class="form-select"
                                                            id="exampleFormSelect1" aria-label="Default select example">
                                                            <option selected>2022</option>
                                                            <option value="1">2022</option>
                                                            <option value="2">2021</option>
                                                            <option value="3">2020</option>
                                                        </select> </div>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="form-group">
                                                    {{ createLabel('Month', 'form-label col-form-label', 'Late') }}
                                                    <div class="form-control-wrap"> <select class="form-select"
                                                            id="exampleFormSelect1" aria-label="Default select example">
                                                            <option selected>All</option>
                                                            <option value="1">None</option>
                                                            <option value="2">All</option>
                                                            <option value="3">Only Selected</option>
                                                        </select> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-block">
                <div class="card" style="overflow-x: scroll">
                    <table class="datatable-init table" data-nk-container="table-responsive">
                        <thead class="table-dark">
                            <tr>
                                <div class="col-12 mt-3">
                                    <h3>
                                        <div class="alert alert-light d-flex align-items-center" role="alert">
                                            <div>Note : <em class="icon ni ni-star-fill"></em> <em
                                                    class="icon ni ni-arrow-long-right"></em> Holiday | <em
                                                    class="icon ni ni-cross"></em> <em
                                                    class="icon ni ni-arrow-long-right"></em> Absent | <em
                                                    class="icon ni ni-check"></em> <em
                                                    class="icon ni ni-arrow-long-right"></em> Present</div>
                                        </div>
                                    </h3>
                                </div>
                            </tr>
                        </thead>
                        @foreach($users as $key => $user)
                            @if($key == 0)
                                <thead class="table-light att">
                                    <tr>
                                        <th class="tb-col" width="15%">
                                            <span class="overline-title">Employee Name</span>
                                        </th>
                                        @foreach ($user->getAllAttendence($user->id) as $key => $attendence)
                                            <th class="px-1">
                                                <span class="overline-title">
                                                    {{Carbon\Carbon::parse($key)->format('j D')}}
                                                </span>
                                            </th>
                                        @endforeach
                                        <th class="tb-col">
                                            <span class="overline-title">Total</span>

                                        </th>
                                    </tr>
                                </thead>
                            @endif
                            <tbody>
                                <tr>
                                    <td class="tb-col" >
                                        <div class="d-flex align-items-center">
                                            <p>{{$user->name}}</p>
                                        </div>
                                    </td>
                                    @foreach ($user->getAllAttendence($user->id) as $key => $attendence)

                                        @if($key == $attendence)
                                        <th class="tb-col px-1">
                                            <span class="overline-title"> <em style="color: red">-</em></span>
                                        </th>
                                        @else
                                        <th class="tb-col px-1">
                                            <span class="overline-title"> <em class="icon ni ni-check" style="color: green"></em></span>
                                        </th>
                                        @endif
                                    @endforeach
                                        <th class="tb-col">
                                           <p> 12/31</p>
                                        </th>
                                </tr>
                            </tbody>
                        @endforeach
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
