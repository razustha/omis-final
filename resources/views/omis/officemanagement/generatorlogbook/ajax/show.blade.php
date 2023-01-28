<div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">Show Generatorlogbook</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="nk-block-head-content w-100">
            <div class="d-flex justify-content-between pb-4">
    
                <h2>Generatorlogbook Details</h2>
                <button class="btn btn-primary print_pdf">Print PDF</button>
            </div>
            <div class="card w-100">
                <div class="p-5">
    
                    <div class="card-head">
                        <h2 class="text-center">{{$data['logbookTitle']}}</h2>
                    </div>
                    <div class="card-body">
                <p><b>LogbookTitle :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->logbookTitle}}</span></p><p><b>SubTitle :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->subTitle}}</span></p><p><b>PageNumber :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->pageNumber}}</span></p><p><b>CheckedDate :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->checkedDate}}</span></p><p><b>FullName :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->fullName}}</span></p><p><b>Purpose :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->purpose}}</span></p><p><b>From :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->from}}</span></p><p><b>To :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->to}}</span></p><p><b>TotalTime :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->totalTime}}</span></p><p><b>DieselConsumed :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->dieselConsumed}}</span></p><p><b>MobileConsume :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->mobileConsume}}</span></p><p><b>ServicingDate :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->servicingDate}}</span></p><p><b>Alias :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->alias}}</span></p><p><b>Status :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span
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