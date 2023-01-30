<div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">Show Fleet Management</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="nk-block-head-content w-100">
            <div class="d-flex justify-content-between pb-4">
    
                <h2>Fleet Management Details</h2>
                <button class="btn btn-primary print_pdf">Print PDF</button>
            </div>
            <div class="card w-100">
                <div class="p-5">
    
                    <div class="card-head">
                        <h2 class="text-center">{{$data['lesseeName']}}</h2>
                    </div>
                    <div class="card-body">
                <p><b>Lessee Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->lesseeName}}</span></p><p><b>Lessee Address :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->lesseeAddress}}</span></p><p><b>Lessor Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->lessorName}}</span></p><p><b>Lessor Contact :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->lessorContact}}</span></p><p><b>Vehicle Type Id :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->vehicleType_id}}</span></p><p><b>Vehicle Number :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->vehicleNumber}}</span></p><p><b>Driver Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->driverName}}</span></p><p><b>Driver Contact :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->driverContact}}</span></p><p><b>Driver Address :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->driverAddress}}</span></p><p><b>Organization Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->organizationName}}</span></p><p><b>Staff Id :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->staff_Id}}</span></p><p><b>Staff Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->staffName}}</span></p><p><b>Staff Identity :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->staffIdentity}}</span></p><p><b>Total People :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->totalPeople}}</span></p><p><b>Travel Date From :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->travelDateFrom}}</span></p><p><b>Travel Date To :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->travelDateTo}}</span></p><p><b>Numer Of Days :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->NumerOfDays}}</span></p><p><b>Travel Place From :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->travelPlaceFrom}}</span></p><p><b>Travel Place To :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->travelPlaceTo}}</span></p><p><b>Cost Per Day :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->costPerDay}}</span></p><p><b>Tax :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->tax}}</span></p><p><b>Remaining Amount :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->remainingAmount}}</span></p><p><b>HCI Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->HCIName}}</span></p><p><b>HCI Date :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->HCIDate}}</span></p><p><b>HCI Address :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->HCIAddress}}</span></p><p><b>Vehile Company Id :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->vehileCompany_id}}</span></p><p><b>Vehile Company Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->vehileCompanyName}}</span></p><p><b>Vehicle Company Date :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->vehicleCompanyDate}}</span></p><p><b>Vehicle Company Address :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->vehicleCompanyAddress}}</span></p><p><b>Alias :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->alias}}</span></p><p><b>Status :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span
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