<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Multi-purpose admin dashboard template that especially build for programmers.">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/customdatatable.css') }}">



    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    {{-- <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" /> --}}
    <link href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css" rel="stylesheet" />
    @yield('css')
    @stack('css')
</head>

<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg" id="omisapp">
    <div class="nk-app-root">
        <div class="nk-main">
            @include('employee/partials/sidebar')
            <div class="nk-wrap">
                @include('employee/partials/header')
                @include('employee.partials.flash-message');
                @yield('content')
                @include('employee/partials/footer')
            </div>
        </div>
    </div>
    @include('employee/partials/footerincludes');

    <script src="{{ asset('assets/js/fullscreen.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="{{ asset('assets/js/data-tables/data-tables.js') }}"></script> --}}
    <script src="{{ asset('assets/js/charts/project-manage-chart.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {{-- <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> --}}
    <script src="{{ asset('assets/js/data-tables/jquery.dataTables.min.js') }}"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    
    <script>
        $(document).on('click', ".btn-hover-danger", function() {
            let _token = "{{ csrf_token() }}";

            let url = $(this).data("route");
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    var id = $(this).data("id");
                    var token = $("meta[name='csrf-token']").attr("content");
                    $.ajax({
                        url: url,
                        type: "DELETE",
                        data: {
                            "_token": _token,
                        },
                        success: function(res) {
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
                }
            })
        })

        $(document).on("click", ".btn-editCanvas", function(obj) {
            var route = $(this).data("route");
            $.ajax({
                type: "get",
                url: route,
                success: function(res) {
                    $("#editConvasByAjax").html(res.content);
                    $('.lfm').filemanager('image');
                }
            })
        })

        $(document).on("click", ".customBtnAdd", function(obj) {
            var route = $(this).data("route");
            $.ajax({
                type: "get",
                url: route,
                success: function(res) {
                    $("#addConvasByAjax").html(res.content);
                    $('.lfm').filemanager('image');
                }
            })
        })

        $(document).on("click", ".btn-store", function(e) {
            e.preventDefault();
            var route = $('#storeCustomForm').prop('action');
            let formData = $("#storeCustomForm").serializeArray();
            $.ajax({
                url: route,
                type: "post",
                data: formData,
                dataType: "json",
                success: function(res) {
                    if ($.isEmptyObject(res.error)) {
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
                    } else {
                        printErrorMsg(res.error);
                    }
                }
            })
        })

        $(document).on("click", ".btn-update", function(e) {
            e.preventDefault();
            let route = $('#updateCustomForm').prop('action');
            console.log(route);
            let formData = $("#updateCustomForm").serializeArray();
            $.ajax({
                url: route,
                type: "put",
                data: formData,
                success: function(res) {
                    if ($.isEmptyObject(res.error)) {
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
                    } else {
                        printErrorMsg(res.error);
                    }
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

        function printErrorMsg(msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display', 'block');
            $.each(msg, function(key, value) {
                $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
            });
        }

        $('#CustomTable').DataTable({
            dom: 'Blfrtip',
            buttons: [
                // 'copyHtml5',
                'excelHtml5',
                // 'csvHtml5',
                'pdfHtml5'
            ],
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
        });
    </script>


    @yield('js')
    @stack('js')
</body>

</html>
