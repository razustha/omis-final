@extends('omis.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Database Backup Lists</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Backup</a></li>
                                            <li class="breadcrumb-item"><a href="#">Database</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Lists
                                            </li>
                                        </ol>
                                    </nav>
                            </div>

                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Database Backup Details</h1>
                            </div>
                            <div class="col-md-6">
                                <a href="#" data-route="{{ route('setting.database.backup') }}"
                                    class="btn btn-sm btn-primary" id="backupDB" style="float: right">Take Current
                                    database backup</a>
                            </div>

                        </div>


                        <div class="card">
                            <table class="datatable-init table" data-nk-container="table-responsive">
                                <thead class="table-light">
                                    <tr>
                                        <th class="tb-col"><span class="overline-title">Database backup</span></th>
                                        <th class="tb-col"><span class="overline-title">Action</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($backups as $item)
                                        <tr>
                                            @php
                                                $fileName = explode('/', $item);
                                            @endphp
                                            <td class="tb-col">{{ $fileName[1] }}</td>

                                            <td class="tb-col"><a
                                                    href="{{ route('setting.database.download', [$fileName[1]]) }}">download
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-arrow-down-circle-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                                                    </svg></a></td>

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
    </div>
@endsection
@push('js')
    <script>
        $(document).on("click", "#backupDB", function(obj) {
            var route = $(this).data("route");
            $.ajax({
                type: "get",
                url: route,
                success: function(res) {
                    setTimeout(function() {
                        Swal.fire('Backup Created Successfully.')
                    }, 1500);
                }
            })
        })
    </script>
@endpush
