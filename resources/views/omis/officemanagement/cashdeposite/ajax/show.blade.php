<div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">Show Cash Deposit</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="nk-block-head-content w-100">
            <div class="d-flex justify-content-between pb-4">
    
                <h2>Cash Deposit Details</h2>
                <button class="btn btn-primary print_pdf">Print PDF</button>
            </div>
            <div class="card w-100">
                <div class="p-5">
    
                    <div class="card-head">
                        <h2 class="text-center">{{$data['mainTitle']}}</h2>
                    </div>
                    <div class="card-body">
                <p><b>Main Title :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->mainTitle}}</span></p><p><b>DATE :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->DATE}}</span></p><p><b>Amount In Words :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->amountWords}}</span></p><p><b>Thousand :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->thousand}}</span></p><p><b>FiveHundred :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->fiveHundred}}</span></p><p><b>Hundred :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->hundred}}</span></p><p><b>Fifty :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->fifty}}</span></p><p><b>Twenty :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->twenty}}</span></p><p><b>Ten :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->ten}}</span></p><p><b>Five :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->five}}</span></p><p><b>Two :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->two}}</span></p><p><b>One :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->one}}</span></p><p><b>Full Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->fullName}}</span></p><p><b>Position :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->position}}</span></p><p><b>Declared Date :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->declaredDate}}</span></p><p><b>Approved Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->approvedName}}</span></p><p><b>Approved Position :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->approvedPosition}}</span></p><p><b>Approved Date :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->approvedDate}}</span></p><p><b>Alias :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->alias}}</span></p><p><b>Status :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span
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