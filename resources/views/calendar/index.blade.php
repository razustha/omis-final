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

                                <div class="row">
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
                header:{
                    left:'prev,next today',
                    center:'title',
                    right:'month'
                },
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
