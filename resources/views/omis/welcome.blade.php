@extends('omis.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="row g-gs">
                        <div class="col-xxl-12">
                            <div class="row">
                                <div class="col-md-9"></div>
                                <div class="col-md-3">
                                    <div class=" h-100">
                                      
                                            <div class="d-flex flex-column flex-sm-row-reverse align-items-sm-center justify-content-sm-between">
                                            <div class="mb-5 mt-4 mt-sm-0">

                                                    @if(empty(auth()->user()->todayAttendance()))
                                                    <button class="btn btn-primary btn-checkIn" >
                                                        + Clock In
                                                    </button>
                                                @else
                                                    <form action="{{route('hr.attendence.checkOut',auth()->user()->todayAttendance()->attendence_id)}}" method="POST">
                                                        @csrf
                                                        <div class="form-group ">
                                                            <input type="hidden" value="{{auth()->user()->id}}">
                                                        <button type="submit" class="btn btn-danger btn-checkOut" >
                                                                + Clock Out
                                                            </button>
                                                    </form>

                                                @endif
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
    </div>


    {{-- Update CheckIn --}}
    <div class="modal fade update_CheckIn" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title align-self-center mt-0 text-center" id="exampleModalLabel">Add Check In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('hr.attendence.checkIn')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <input type="hidden" value="{{auth()->user()->id}}">
                            <div class="col-md-12">
                                {{ createText('location', 'location', 'location') }}
                            </div>
                            <div class="col-md-12">
                                <div class="col-lg-12">
                                    {{ createText('workFrom', 'workFrom', 'Work From') }}
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <?php createButton("btn-primary","","Save"); ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

@endsection

@section('js')

    <script type="text/javascript">
        $(document).on('click', ".btn-checkIn", function() {
            $('.update_CheckIn').modal('show');

        })
    </script>
@endsection

