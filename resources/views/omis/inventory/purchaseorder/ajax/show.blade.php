<div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">Show Purchase Order</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="nk-block-head-content w-100">
            <div class="d-flex justify-content-between pb-4">
    
                <h2>Purchase Order Details</h2>
                <button class="btn btn-primary print_pdf">Print PDF</button>
            </div>
            <div class="card w-100">
                <div class="p-5">
    
                    <div class="card-head">
                        <h2 class="text-center">{{$data['date']}}</h2>
                    </div>
                    <div class="card-body">
                <p><b>Date :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->date}}</span></p><p><b>Reference Number :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->referenceNumber}}</span></p><p><b>Telephone :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->telePhone}}</span></p><p><b>Vendor Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->venderName}}</span></p><p><b>Contractor PAN :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->contractorPAN}}</span></p><p><b>Address :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->address}}</span></p><p><b>Project Code :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->projectCode}}</span></p><p><b>Funding Source :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->fundingSource}}</span></p><p><b>Goods Description :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->goodsDescription}}</span></p><p><b>Unit :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->unit}}</span></p><p><b>Total Unit :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->totalUnit}}</span></p><p><b>Unit Rate :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->unitRate}}</span></p><p><b>Amount :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->amount}}</span></p><p><b>Total Amount :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->totalAmount}}</span></p><p><b>Special Request :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->specialRequest}}</span></p><p><b>Admin Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->adminName}}</span></p><p><b>Admin Designation :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->adminDesignation}}</span></p><p><b>Admin Date :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->adminDate}}</span></p><p><b>Operational Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->operationalName}}</span></p><p><b>Operational Designation :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->operationalDesignation}}</span></p><p><b>Operational Date :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->operationalDate}}</span></p><p><b>Vendor Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->vendorName}}</span></p><p><b>Vendor Designation :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->vendorDesignation}}</span></p><p><b>Vendor Date :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->vendorDate}}</span></p><p><b>Alias :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->alias}}</span></p><p><b>Status :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span
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