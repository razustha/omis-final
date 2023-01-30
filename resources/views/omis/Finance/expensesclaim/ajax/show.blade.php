<div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">Show Expenses Claim</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="nk-block-head-content w-100">
            <div class="d-flex justify-content-between pb-4">
    
                <h2>Expenses Claim Details</h2>
                <button class="btn btn-primary print_pdf">Print PDF</button>
            </div>
            <div class="card w-100">
                <div class="p-5">
    
                    <div class="card-head">
                        <h2 class="text-center">{{$data['title']}}</h2>
                    </div>
                    <div class="card-body">
                <p><b>Title :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->title}}</span></p><p><b>Full Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->fullName}}</span></p><p><b>Financial Year :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->financialYear}}</span></p><p><b>Currency :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->currency}}</span></p><p><b>Exchange Rate :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->exchangeRate}}</span></p><p><b>Date :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->date}}</span></p><p><b>Daily Allowence :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->dailyAllowence}}</span></p><p><b>Food :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->food}}</span></p><p><b>Hotel Bill :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->hotelBill}}</span></p><p><b>Official Meeting :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->officialMeeting}}</span></p><p><b>Transportation :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->transportation}}</span></p><p><b>Consultant Accomodation :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->consultantAccomodation}}</span></p><p><b>Receipt Number :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->receiptNumber}}</span></p><p><b>Total :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->total}}</span></p><p><b>Amount :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->amount}}</span></p><p><b>Recieved Advance :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->recievedAdvance}}</span></p><p><b>Total Expense :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->totalExpense}}</span></p><p><b>Pay Balance :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->payBalance}}</span></p><p><b>Requested Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->requestedName}}</span></p><p><b>Requested Designation :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->requestedDesignation}}</span></p><p><b>Requested Date :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->requestedDate}}</span></p><p><b>Checked Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->checkedName}}</span></p><p><b>Checked Designation :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->checkedDesignation}}</span></p><p><b>Checked Date :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->checkedDate}}</span></p><p><b>Recommend Name :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->recommendName}}</span></p><p><b>Recommended Designation :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->recommendedDesignation}}</span></p><p><b>Recommend Date :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->recommendDate}}</span></p><p><b>Alias :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->alias}}</span></p><p><b>Status :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span
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