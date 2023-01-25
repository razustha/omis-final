<div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">Show Fleetmanagement</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="nk-block-head-content w-100">
            <div class="d-flex justify-content-between pb-4">
    
                <h2>Fleetmanagement Details</h2>
                <button class="btn btn-primary print_pdf">Print PDF</button>
            </div>
            <div class="card w-100">
                <div class="p-5">
    
                    <div class="card-head">
                        <h2 class="text-center">{{$data['lesseeName']}}</h2>
                    </div>
                    <div class="card-body">
                <p><b>LesseeName :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->lesseeName}}</span></p><p><b>LesseeAddress :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->lesseeAddress}}</span></p><p><b>LessorName :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->lessorName}}</span></p><p><b>LessorContact :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->lessorContact}}</span></p><p><b>VehicleType Id :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->vehicleType_id}}</span></p><p><b>VehicleNumber :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->vehicleNumber}}</span></p><p><b>DriverName :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->driverName}}</span></p><p><b>DriverContact :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->driverContact}}</span></p><p><b>DriverAddress :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->driverAddress}}</span></p><p><b>OrganizationName :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->organizationName}}</span></p><p><b>Staff Id :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->staff_Id}}</span></p><p><b>StaffName :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->staffName}}</span></p><p><b>StaffIdentity :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->staffIdentity}}</span></p><p><b>TotalPeople :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->totalPeople}}</span></p><p><b>TravelDateFrom :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->travelDateFrom}}</span></p><p><b>TravelDateTo :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->travelDateTo}}</span></p><p><b>NumerOfDays :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->NumerOfDays}}</span></p><p><b>TravelPlaceFrom :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->travelPlaceFrom}}</span></p><p><b>TravelPlaceTo :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->travelPlaceTo}}</span></p><p><b>CostPerDay :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->costPerDay}}</span></p><p><b>Tax :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->tax}}</span></p><p><b>RemainingAmount :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->remainingAmount}}</span></p><p><b>HCIName :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->HCIName}}</span></p><p><b>HCIDate :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->HCIDate}}</span></p><p><b>HCIAddress :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->HCIAddress}}</span></p><p><b>VehileCompany Id :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->vehileCompany_id}}</span></p><p><b>VehileCompanyName :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->vehileCompanyName}}</span></p><p><b>VehicleCompanyDate :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->vehicleCompanyDate}}</span></p><p><b>VehicleCompanyAddress :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->vehicleCompanyAddress}}</span></p><p><b>Alias :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->alias}}</span></p><p><b>Status :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span
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