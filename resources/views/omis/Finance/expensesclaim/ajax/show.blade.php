<div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">Show Expensesclaim</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="nk-block-head-content w-100">
            <div class="d-flex justify-content-between pb-4">
    
                <h2>Expensesclaim Details</h2>
                <button class="btn btn-primary print_pdf">Print PDF</button>
            </div>
            <div class="card w-100">
                <div class="p-5">
    
                    <div class="card-head">
                        <h2 class="text-center">{{$data['title']}}</h2>
                    </div>
                    <div class="card-body">
                <p><b>Title :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->title}}</span></p><p><b>FullName :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->fullName}}</span></p><p><b>FinancialYear :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->financialYear}}</span></p><p><b>Currency :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->currency}}</span></p><p><b>ExchangeRate :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->exchangeRate}}</span></p><p><b>Date :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->date}}</span></p><p><b>DailyAllowence :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->dailyAllowence}}</span></p><p><b>Food :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->food}}</span></p><p><b>HotelBill :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->hotelBill}}</span></p><p><b>OfficialMeeting :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->officialMeeting}}</span></p><p><b>Transportation :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->transportation}}</span></p><p><b>ConsultantAccomodation :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->consultantAccomodation}}</span></p><p><b>ReceiptNumber :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->receiptNumber}}</span></p><p><b>Total :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->total}}</span></p><p><b>Amount :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->amount}}</span></p><p><b>RecievedAdvance :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->recievedAdvance}}</span></p><p><b>TotalExpense :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->totalExpense}}</span></p><p><b>PayBalance :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->payBalance}}</span></p><p><b>RequestedName :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->requestedName}}</span></p><p><b>RequestedDesignation :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->requestedDesignation}}</span></p><p><b>RequestedDate :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->requestedDate}}</span></p><p><b>CheckedName :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->checkedName}}</span></p><p><b>CheckedDesignation :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->checkedDesignation}}</span></p><p><b>CheckedDate :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->checkedDate}}</span></p><p><b>RecommendName :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->recommendName}}</span></p><p><b>RecommendedDesignation :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->recommendedDesignation}}</span></p><p><b>RecommendDate :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->recommendDate}}</span></p><p><b>Alias :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->alias}}</span></p><p><b>Status :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span
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