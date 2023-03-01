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
                                <h2 class="nk-block-title">Manage Holidays </h1>

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
                                <h5 class="modal-title" id="eventModalLabel">Add Holliday</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="text" name="title" placeholder="Title *" class="form-control" id="title" required/>
                                <span id="titleError" class="text-danger"></span>
                                <textarea name="description" class="form-control mt-2" id="description" rows="9"
                                        placeholder="Description"></textarea>
                                <div class="row mt-2">

                                    <div class="col-md-6">
                                        <label for="endDate">End Date (To)</label>
                                        <input type="date" name="endDate" class="form-control" id="endDate"/>
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
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

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




                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary btn-sm updateEventButton">
                                        <i class="spinner fa fa-spinner fa-spin" style="display: none"></i> Save changes
                                    </button>
                                </div>
                                @if($deleteCalendarPermission)

                                <div class="modal-footer">
                                    <p class="mb-0 text-danger" style="font-size: 12px">(Note: This will delete this event
                                        permanently.)</p>
                                    <a class="btn btn-danger btn-sm preventMultipleButtonClick deleteEvent" href="#">
                                        <i class="spinner fa fa-spinner fa-spin"
                                        style="display: none"></i> Delete this event</a>
                                </div>
                                @endif

                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end/delete of edit event modal -->


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


                    @foreach($allholidays as $data)
                            {
                                <?php
                                    $endDate = $data->endDate ?? '';
                                    if ($endDate == null) {
                                        $endDate = Carbon\Carbon::parse($data->startDate ?? '')->format('Y-m-d');
                                    } else {
                                        $endDate = Carbon\Carbon::parse($data->endDate)->addDays(1)->format('Y-m-d');

                                    }
                                    $title = Carbon\Carbon::parse($data->startTime)->format('g:iA') . '-'
                                        . Carbon\Carbon::parse($data->endTime)->format('g:iA') . ' | ' . $data->title;
                                    ?>
                                id: '{{$data->mangeHoliday_id }}',
                                displayEventTime: true,
                                title: '{{ $data->title }}',
                                description: '{{ preg_replace('/\r|\n/', ' ', $data->description)}}',
                                start: '{{ $data->startDate}}',
                                end: '{{$endDate}}',

                                allDay: false,
                                color: '{{ $data->backgroundColor??'#1C9CD8'}}',
                                textColor: '{{ $data->textColor??'#FFFFFF'}}',
                                themeSystem: 'bootstrap5'
                            },
                    @endforeach
                ],
                @if($addcalendarPermission)
                    selectable: true,
                    selectHelper: true,
                @endif
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
                        var endDate = $('#endDate').val();


                        $.ajax({
                            url: '{{route('saveHoliday')}}',
                            type: 'POST',
                            data: {
                                title, startDate, endDate, description,
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
                @if($editCalendarPermission)
                eventClick: function (event) {
                    $('#editDeleteEventModal').modal('toggle');
                    var id = event.id;
                    $.ajax({
                        url: '{{route('editHoliday','')}}' + '/' + id,
                        type: 'get',
                        data: {id: id},
                        success: function (response) {
                            console.log(response);
                            $('.title').attr('value', response.title);
                            $('.start_date').attr('value', response.start_date);
                            $('.end_date').attr('value', response.end_date);
                            $('.description').html(response.description);
                            $('.eventUpdate').attr('action', response.updateEventUrl);
                            $('.deleteEvent').attr('href', response.deleteEventUrl);
                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });
                }
                @endif


                //unbinding the event after multiple calender days are clicked before one is added


            });

            $('#eventModal').on('hidden.bs.modal', function () {
                $('#clickBtn').unbind();
            });


        });

</script>
    @endpush
