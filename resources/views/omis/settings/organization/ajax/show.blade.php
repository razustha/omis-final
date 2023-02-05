<div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">Show Organization</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="nk-block-head-content w-100">
            <div class="d-flex justify-content-between pb-4">
    
                <h2>Organization Details</h2>
                <button class="btn btn-primary print_pdf">Print PDF</button>
            </div>
            <div class="card w-100">
                <div class="p-5">
    
                    <div class="card-head text-center">
                    @if ($data->logo)
            <img id="holder" style="margin-top:15px;max-height:150px;" class="img img-fluid"
                src="{{ $data->logo }}">
        @endif    
                    <h2>{{$data['organizationName']}}</h2>

                    </div>
                    <div class="card-body">
                <p><b>OrganizationName :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->organizationName}}</span></p><p><b>OrganizatoinCategory :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->organizatoinCategory}}</span></p><p><b>OwnerName :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->ownerName}}</span></p><p><b>PhoneNumber :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->phoneNumber}}</span></p><p><b>LandLineNumber :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->landLineNumber}}</span></p><p><b>EmailAddress :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->emailAddress}}</span></p><p><b>FaxAddress :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->faxAddress}}</span></p><p><b>Country Id :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->country_id}}</span></p><p><b>State Id :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->state_id}}</span></p><p><b>City Id :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->city_id}}</span></p><p><b>District Id :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->district_id}}</span></p><p><b>GeoMapLocation :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->geoMapLocation}}</span></p><p><b>DocumentType :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->documentType}}</span></p><p><b>DocumentName :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->documentName}}</span></p><p><b>DocumentPath :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->documentPath}}</span></p><p><b>BudgetSize :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->budgetSize}}</span></p><p><b>Alias :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->alias}}</span></p><p><b>Status :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span
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