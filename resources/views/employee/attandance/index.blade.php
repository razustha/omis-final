@extends('employee.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <div class="d-flex flex-column flex-md-row align-items-md-center">
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
                                </div>
                            </div>

                            {{-- <div class="col-12 d-flex flex-row-reverse">
                <div class="btn-group mb-3" role="group" aria-label="Basic outlined example"> <button type="button" class="btn btn-outline-primary active">Icon 1</button> <button type="button" class="btn btn-outline-primary">Icon 2</button> <button type="button" class="btn btn-outline-primary">Icon 3</button><button type="button" class="btn btn-outline-primary">Icon 4</button></div>
                </div> --}}
                        </div>



                    </div>
                </div>
            </div>
            <div class="nk-block">
                <div class="card">
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
                        <thead class="table-light">
                            <tr>
                                <th class="tb-col" width="20%">
                                    <span class="overline-title">Employee Name</span>
                                </th>
                                <th class="px-2">
                                    <span class="overline-title">1 <br>Sun</span>
                                </th>
                                <th class="px-2">
                                    <span class="overline-title">2 <br>Mon</span>
                                </th>
                                <th class="px-2">
                                    <span class="overline-title">3 <br>Tue</span>
                                </th>
                                <th class="px-2">
                                    <span class="overline-title">4 <br>Wed</span>
                                </th>
                                <th class="px-2">
                                    <span class="overline-title">5 <br>Thur</span>
                                </th>
                                <th class="px-2">
                                    <span class="overline-title">6 <br>Fri</span>
                                </th>
                                <th class="px-2">
                                    <span class="overline-title">7 <br>Sat</span>
                                </th>
                                <th class="px-2">
                                    <span class="overline-title">8 <br>Sun</span>
                                </th>
                                <th class="px-2">
                                    <span class="overline-title">9 <br>Mon</span>
                                </th>
                                <th class="px-2">
                                    <span class="overline-title">10 <br>Tue</span>
                                </th>
                                <th class="px-2">
                                    <span class="overline-title">11 <br>Wed</span>
                                </th>
                                <th class="px-2">
                                    <span class="overline-title">12 <br>Thur</span>
                                </th>
                                <th class="px-2">
                                    <span class="overline-title">12 <br>Thur</span>
                                </th>
                                <th class="px-2">
                                    <span class="overline-title">12 <br>Thur</span>
                                </th>
                                <th class="px-2">
                                    <span class="overline-title">12 <br>Thur</span>
                                </th>
                                <th class="px-2">
                                    <span class="overline-title">12 <br>Thur</span>
                                </th>
                                <th class="px-2">
                                    <span class="overline-title">12 <br>Thur</span>
                                </th>
                                <th class="px-2">
                                    <span class="overline-title">12 <br>Thur</span>
                                </th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td class="tb-col" width="20%">
                                    <div class="d-flex align-items-center">
                                        <p>Jenisha Limbu</p>
                                    </div>
                                    <p class="smaller">Web Tech Department</p>
                                </td>
                                <th class="tb-col px-2">
                                    <span class="overline-title"> <em class="icon ni ni-check"></em></span>
                                </th>
                                <th class="tb-col px-2">
                                    <span class="overline-title"><em class="icon ni ni-check"></em></span>
                                </th>
                                <th class="tb-col px-2">
                                    <span class="overline-title"><em class="icon ni ni-check"></em></span>
                                </th>
                                <th class="tb-col px-2">
                                    <span class="overline-title"><em class="icon ni ni-check"></em></span>
                                </th>
                                <th class="tb-col px-2">
                                    <span class="overline-title"><em class="icon ni ni-check"></em></span>
                                </th>
                                <th class="tb-col px-2">
                                    <span class="overline-title"><em class="icon ni ni-check"></em></span>
                                </th>
                                <th class="tb-col px-2">
                                    <span class="overline-title"><em class="icon ni ni-check"></em></span>
                                </th>
                                <th class="tb-col px-2">
                                    <span class="overline-title"><em class="icon ni ni-check"></em></span>
                                </th>
                                <th class="tb-col px-2">
                                    <span class="overline-title"><em class="icon ni ni-check"></em></span>
                                </th>
                                <th class="tb-col px-2">
                                    <span class="overline-title"><em class="icon ni ni-check"></em></span>
                                </th>
                                <th class="tb-col px-2">
                                    <span class="overline-title"><em class="icon ni ni-check"></em></span>
                                </th>
                                <th class="tb-col px-2">
                                    <span class="overline-title"><em class="icon ni ni-check"></em></span>
                                </th>
                                <th class="tb-col px-2">
                                    <span class="overline-title"><em class="icon ni ni-check"></em></span>
                                </th>
                                <th class="tb-col px-2">
                                    <span class="overline-title"><em class="icon ni ni-check"></em></span>
                                </th>
                                <th class="tb-col px-2">
                                    <span class="overline-title"><em class="icon ni ni-check"></em></span>
                                </th>
                                <th class="tb-col px-2">
                                    <span class="overline-title"><em class="icon ni ni-check"></em></span>
                                </th>
                                <th class="tb-col px-2">
                                    <span class="overline-title"><em class="icon ni ni-check"></em></span>
                                </th>
                                <th class="tb-col px-2">
                                    <span class="overline-title"><em class="icon ni ni-check"></em></span>
                                </th>
                            </tr>
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
