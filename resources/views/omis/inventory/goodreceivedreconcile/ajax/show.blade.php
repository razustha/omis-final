<div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">Show Good Received Reconcile</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="nk-block-head-content w-100">
            <div class="d-flex justify-content-between pb-4">
    
                <h2>Good Received Reconcile Details</h2>
                <button class="btn btn-primary print_pdf">Print PDF</button>
            </div>
            <div class="card w-100">
                <div class="p-5">
    
                    <div class="card-head">
                        <h2 class="text-center">{{$data['goodReceivedReconcile_Title']}}</h2>
                    </div>
                    <div class="card-body">
                <p><b>Good Received Reconcile Title :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->goodReceivedReconcile_Title}}</span></p><p><b>Address :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->address}}</span></p><p><b>Purchase Number :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->purchaseNumber}}</span></p><p><b>Receipt Number :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->receiptNumber}}</span></p><p><b>Sn :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->sn}}</span></p><p><b>Goods Details :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->goodsDetails}}</span></p><p><b>Unit :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->unit}}</span></p><p><b>Quanitity :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->quanitity}}</span></p><p><b>Comments :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->comments}}</span></p><p><b>Receiverd Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->receiverdName}}</span></p><p><b>Received Position :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->receivedPosition}}</span></p><p><b>Received Date :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->receivedDate}}</span></p><p><b>Received Address :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->receivedAddress}}</span></p><p><b>Organization :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->organization}}</span></p><p><b>Organization Date :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->organizationDate}}</span></p><p><b>Alias :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->alias}}</span></p><p><b>Status :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span
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