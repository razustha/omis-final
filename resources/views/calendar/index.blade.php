@push('css')
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

                <!-- add event Modal -->
    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalLabel">Add Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="title" placeholder="Title *" class="form-control" id="title" required/>
                    <span id="titleError" class="text-danger"></span>
                    <textarea name="description" class="form-control mt-2" id="description" rows="9"
                              placeholder="Description"></textarea>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label for="start_time">Starting Time</label>
                            <input type="time" name="start_time" id="startTime" class="form-control"/>
                        </div>
                        <div class="col-md-6">
                            <label for="end_time">Ending Time</label>
                            <input type="time" name="end_time" class="form-control" id="endTime"/>
                        </div>
                    </div>
                    <div class=" row mt-2">
                        <div class="col-md-6 col-sm-12 col-12">
                            <label for="backgroundColor">Background color</label>
                            <input type="color" class="form-control backgroundColor" name="backgroundColor"
                                   id="backgroundColor1">
                        </div>
                        <div class="col-md-6 col-sm-12 col-12">
                            <label for="textColor">Text color</label>
                            <input type="color" class="form-control textColor" name="textColor" id="textColor1">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary preventMultipleButtonClick" id="clickBtn">
                        <i class="spinner fa fa-spinner fa-spin" style="display: none"></i> Save changes
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end of add event Modal -->

    <!-- edit/delete event modal -->
    <div class="modal fade" id="editDeleteEventModal" tabindex="-1" role="dialog"
         aria-labelledby="editDeleteEventModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editDeleteEventModalLabel">Edit/Delete Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" class="eventUpdate preventMultipleFormSubmit" action="">
                        @csrf
                        <label class="mt-2" for="title">Title*</label>
                        <input type="text" name="title" id="'title" class="form-control title"
                               required/>
                        <span id="titleError" class="text-danger"></span>

                        <label class="mt-2" for="description">Description</label>
                        <textarea name="description" class="form-control description" rows="5"
                                  id="description"></textarea>

                        <label for="start_date" class="mt-2">Starting date*</label>
                        <input type="date" name="start_date" placeholder="Start Date *" id="start_date"
                               class="form-control start_date" required/>
                        <label for="end_date" class="mt-2">Ending date*</label>
                        <input type="date" name="end_date" placeholder="End Date *" id="end_date"
                               class="form-control end_date" required/>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label for="start_time">Starting Time</label>
                                <input type="time" name="start_time" class="form-control start_time"/>
                            </div>
                            <div class="col-md-6">
                                <label for="end_time">Ending Time</label>
                                <input type="time" name="end_time" class="form-control end_time"/>
                            </div>
                        </div>

                        <div class=" row mt-2">
                            <div class="col-md-6 col-sm-12 col-12">
                                <label for="backgroundColor">Event Background color</label>
                                <input type="color" class="form-control backgroundColor" name="backgroundColor"
                                       id="backgroundColor">
                            </div>
                            <div class="col-md-6 col-sm-12 col-12">
                                <label for="textColor">Event Text color</label>
                                <input type="color" class="form-control textColor" name="textColor" id="textColor">
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-sm updateEventButton">
                                <i class="spinner fa fa-spinner fa-spin" style="display: none"></i> Save changes
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- end/delete of edit event modal -->

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
    <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>


    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')

                }
            });

            var calendar = $('#calendar').fullCalendar({
                header: {
                    'left': '',
                    'center': 'title',
                    'right': 'prev, next today',
                },
                events: [
                        @foreach($allholidays as $task)
                            {
                                <?php
                                    $endDate = $task->end_date ?? '';
                                    if ($endDate == null) {
                                        $endDate = Carbon\Carbon::parse($task->start_date ?? '')->format('Y-m-d');
                                    } else {
                                        $endDate = Carbon\Carbon::parse($task->end_date)->addDays(1)->format('Y-m-d');
                                    }
                                    $title = Carbon\Carbon::parse($task->start_time)->format('g:iA') . '-'
                                        . Carbon\Carbon::parse($task->end_time)->format('g:iA') . ' | ' . $task->title;
                                    ?>
                                id: '{{$task->id}}',
                                displayEventTime: true,
                                title: '{{ $task->title }}',
                                description: '{{ preg_replace('/\r|\n/', ' ', $task->description)}}',
                                start: '{{ $task->eventStartDate}}',
                                end: '{{$task->eventEndDate}}',

                                allDay: false,
                                color: '{{ $task->backgroundColor??'#1C9CD8'}}',
                                textColor: '{{ $task->textColor??'#FFFFFF'}}',
                                themeSystem: 'bootstrap5'
                            },
                    @endforeach

                    @foreach($events as $data)
                            {
                                <?php
                                    $endDate = $data->endDate ?? '';
                                    if ($endDate == null) {
                                        $endDate = Carbon\Carbon::parse($data->startDate ?? '')->format('Y-m-d');
                                    } else {
                                        $endDate = Carbon\Carbon::parse($task->endDate)->addDays(1)->format('Y-m-d');
                                    }
                                    $title = Carbon\Carbon::parse($task->start_time)->format('g:iA') . '-'
                                        . Carbon\Carbon::parse($task->end_time)->format('g:iA') . ' | ' . $task->title;
                                    ?>
                                id: '{{$data->event_id }}',
                                displayEventTime: true,
                                title: '{{ $data->eventTitle }}',
                                description: '{{ preg_replace('/\r|\n/', ' ', $data->description)}}',
                                start: '{{ $data->startDate}}',
                                end: '{{$task->endDate}}',

                                allDay: false,
                                color: '{{ $data->backgroundColor??'#1C9CD8'}}',
                                textColor: '{{ $data->textColor??'#FFFFFF'}}',
                                themeSystem: 'bootstrap5'
                            },
                    @endforeach
                ],
                selectable: true,
                selectHelper: true,
                eventRender: function (event, element) {
                    $(element).popover({
                        title: event.title,
                        content: event.description,
                        trigger: 'hover',
                        placement: 'top',
                        container: 'body'
                    });
                },
                select: function (start, end, all) {
                    $('#eventModal').modal('toggle');
                    $('#clickBtn').click(function () {
                        var title = $('#title').val();
                        var description = $('#description').val();
                        var startDate = moment(start).format('YYYY-MM-DD');
                        var endDate = moment(end).subtract(1, "days").format('YYYY-MM-DD');
                        var startTime = $('#startTime').val();
                        var endTime = $('#endTime').val();
                        var backgroundColor = $('#backgroundColor1').val();
                        var textColor = $('#textColor1').val();
                        $.ajax({
                            url: '{{route('saveRelocateEventStartDate')}}',
                            type: 'POST',
                            data: {
                                title, startDate, endDate, description, startTime, endTime, backgroundColor, textColor
                            },
                            success: function (response) {
                                $('#eventModal').modal('hide');
                                location.reload();
                                // $('#calendar').fullCalendar('renderEvent', {
                                //     'title': response.title,
                                //     'start': response.start_date + 'T' + response.start_time,
                                //     'end': response.end_date,
                                //     'startTime': response.start_time,
                                //     'endTime': response.end_time,
                                //     'allDay': false,
                                //     'displayEventEnd': true,
                                //     'color': response.backgroundColor ?? '#1C9CD8',
                                //     'textColor': response.textColor ?? '#FFFFFF',
                                //     'themeSystem': 'bootstrap5'
                                //});
                            },
                            error: function (error) {
                                if (error.responseJSON.errors) {
                                    $('#titleError').html(error.responseJSON.errors.title);
                                }
                            }
                        });

                    });
                },



            });


        });

</script>
    @endpush
