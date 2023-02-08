@push('js')
    <link href="{{asset('assets/css/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
@endpush
@extends('omis.partials.layouts')


@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Events and Holiday</h1>

                            </div>
                            <div class="nk-block-head-content">
                                <ul class="d-flex">
                                    {!! createCanvasButton('customBtnAdd', '', 'Holiday', 'hr.mangeholiday.create') !!}
                                </ul>
                            </div>
                            <div class="row mt-3">

                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id='calendar'></div>

                                            <div style='clear:both'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Add Modal --}}
            <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                <div class="offcanvas-header border-bottom border-light">
                    <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Manage Holiday</h5><button
                        type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
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
    @endsection
    @push('js')
    <script src="{{asset('assets/js/moment.js')}}"></script>
    <script src="{{asset('assets/js/fullcalendar.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                }
            });

            var calendar = $('#calendar').fullCalendar({
                editable:false,
                events: {
                    url: '{{ route('fetchcalendardata') }}',
                    type: 'GET',
                    error: function() {
                        alert('there was an error while fetching events!');
                    },
                    success: function(data) {
                        var availableTags = new Object();
                        var Holiday = new Object();
                        // @if(isset($absentrequestleaveforcalender))
                        //     @foreach($absentrequestleaveforcalender as $data)
                        //         @if(isset($data->user->name))
                        //             availableTags.title = "{{$data->user->name}} ({{$data->leavetype->name}})";
                        //         @endif
                        //         availableTags.start = moment("{{$data->start_date}}").format();
                        //         availableTags.end = moment("{{$data->end_date}}").add(1, 'days');
                        //         $('#calendar').fullCalendar('renderEvent', availableTags);
                        //     @endforeach
                        // @endif

                        @if(!empty($allholidays))
                            @foreach($allholidays as $data)
                                @if(!empty($data->title))
                                    Holiday.title = "{{$data->title}} (Holiday)";
                                @endif
                                Holiday.start = moment("{{$data->eventStartDate}}").format();
                                Holiday.end = moment("{{$data->eventEndDate}}").add(1, 'days');
                                Holiday.color = '#f1556c';
                                $('#calendar').fullCalendar('renderEvent', Holiday);
                            @endforeach
                        @endif

                    },
                    color: 'yellow',   // a non-ajax option
                    textColor: 'black' // a non-ajax option

                },
                selectable:true,
                selectHelper: true,

            });

        });

</script>
    @endpush
