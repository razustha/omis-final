<div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">Show Vehiclelog</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="nk-block-head-content w-100">
            <div class="d-flex justify-content-between pb-4">
    
                <h2>Vehiclelog Details</h2>
                <button class="btn btn-primary print_pdf">Print PDF</button>
            </div>
            <div class="card w-100">
                <div class="p-5">
    
                    <div class="card-head">
                        <h2 class="text-center">{{$data['riderName']}}</h2>
                    </div>
                    <div class="card-body">
                <p><b>RiderName :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->riderName}}</span></p><p><b>VehicleNumber :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->vehicleNumber}}</span></p><p><b>Date :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->date}}</span></p><p><b>ArrivalTime :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->arrivalTime}}</span></p><p><b>DepartureTime :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->departureTime}}</span></p><p><b>From :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->from}}</span></p><p><b>To :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->to}}</span></p><p><b>Purpose :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->purpose}}</span></p><p><b>Alias :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->alias}}</span></p><p><b>Status :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span
                class="{{$data->status == 1 ? 'text-success' : 'text-danger'}}">{{$data->status == 1 ? 'Active' : 'Inactive'}}</span></p><p><b>Remarks :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->remarks}}</span></p><div class="d-flex justify-content-between">
        <div>
            <p><b>Created On :</b>&nbsp;&nbsp;&nbsp;<span>{{$data->created_at}}</span></p>
            <p><b>Created By :</b>&nbsp;&nbsp;&nbsp;<span>{{$data->createdBy}}</span></p>
        </div>
        <div>
            <p><b>Updated On :</b>&nbsp;&nbsp;&nbsp;<span>{{$data->updated_at}}</span></p>
            <p><b>Updated By :</b>&nbsp;&nbsp;&nbsp;<span>{{$data->updatedBy}}</span></p>

        </div>
    </div>
    </div>
            </div>
        </div>
    </div>
</div>