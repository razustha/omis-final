 <div class="modal fade new_CheckIn" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title align-self-center mt-0 text-center" id="exampleModalLabel">Add Check In</h5>
                        <button type="button" class="btn-primary close" data-dismiss="modal" aria-label="Close">
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
                </div>
            </div>
</div>
