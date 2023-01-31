<div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">Show Purchase Service</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="nk-block-head-content w-100">
            <div class="d-flex justify-content-between pb-4">
    
                <h2>Purchase Service Details</h2>
                <button class="btn btn-primary print_pdf">Print PDF</button>
            </div>
            <div class="card w-100">
                <div class="p-5">
    
                    <div class="card-head">
                        <h2 class="text-center">{{$data['purchaseTitle']}}</h2>
                    </div>
                    <div class="card-body">
                <p><b>Purchase Title :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->purchaseTitle}}</span></p><p><b>Contract Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->contractName}}</span></p><p><b>Reference Number :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->referenceNumber}}</span></p><p><b>Date :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->date}}</span></p><p><b>Vat Number :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->vatNumber}}</span></p><p><b>Address :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->address}}</span></p><p><b>Contact :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->contact}}</span></p><p><b>Serial Number :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->serialNumber}}</span></p><p><b>Descriptions :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->descriptions}}</span></p><p><b>Units :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->units}}</span></p><p><b>Quantity :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->quantity}}</span></p><p><b>Rate :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->rate}}</span></p><p><b>Amount :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->amount}}</span></p><p><b>Alias :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->alias}}</span></p><p><b>Status :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span
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