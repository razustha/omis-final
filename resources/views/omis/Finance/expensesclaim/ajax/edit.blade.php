
        <form action="{{route('finance.expensesclaim.update',[$data->expensesClaim_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("title","title","Title",'',$data->title)}}
</div><div class="col-lg-6">{{createText("fullName","fullName","Full Name",'',$data->fullName)}}
</div><div class="col-lg-6">{{createText("financialYear","financialYear","Financial Year",'',$data->financialYear)}}
</div><div class="col-lg-6">{{createText("currency","currency","Currency",'',$data->currency)}}
</div><div class="col-lg-6">{{createText("exchangeRate","exchangeRate","Exchange Rate",'',$data->exchangeRate)}}
</div><div class="col-lg-6">{{createDate("date","date","Date",'',$data->date)}}
</div><div class="col-lg-4">{{createText("dailyAllowence","dailyAllowence","Daily Allowence",'',$data->dailyAllowence)}}
</div><div class="col-lg-4">{{createText("food","food","Food",'',$data->food)}}
</div><div class="col-lg-4">{{createText("hotelBill","hotelBill","Hotel Bill",'',$data->hotelBill)}}
</div><div class="col-lg-6">{{createText("officialMeeting","officialMeeting","Official Meeting",'',$data->officialMeeting)}}
</div><div class="col-lg-6">{{createText("transportation","transportation","Transportation",'',$data->transportation)}}
</div><div class="col-lg-6">{{createText("consultantAccomodation","consultantAccomodation","Consultant Accomodation",'',$data->consultantAccomodation)}}
</div><div class="col-lg-6">{{createText("receiptNumber","receiptNumber","Receipt Number",'',$data->receiptNumber)}}
</div><div class="col-lg-4">{{createText("total","total","Total",'',$data->total)}}
</div><div class="col-lg-4">{{createText("amount","amount","Amount",'',$data->amount)}}
</div><div class="col-lg-4">{{createText("recievedAdvance","recievedAdvance","Recieved Advance",'',$data->recievedAdvance)}}
</div><div class="col-lg-6">{{createText("totalExpense","totalExpense","Total Expense",'',$data->totalExpense)}}
</div><div class="col-lg-6">{{createText("payBalance","payBalance","Pay Balance",'',$data->payBalance)}}
</div><div class="col-lg-4">{{createText("requestedName","requestedName","Requested Name",'',$data->requestedName)}}
</div><div class="col-lg-4">{{createText("requestedDesignation","requestedDesignation","Requested Designation",'',$data->requestedDesignation)}}
</div><div class="col-lg-4">{{createDate("requestedDate","requestedDate","Requested Date",'',$data->requestedDate)}}
</div><div class="col-lg-4">{{createText("checkedName","checkedName","Checked Name",'',$data->checkedName)}}
</div><div class="col-lg-4">{{createText("checkedDesignation","checkedDesignation","Checked Designation",'',$data->checkedDesignation)}}
</div><div class="col-lg-4">{{createDate("checkedDate","checkedDate","Checked Date",'',$data->checkedDate)}}
</div><div class="col-lg-4">{{createText("recommendName","recommendName","Recommend Name",'',$data->recommendName)}}
</div><div class="col-lg-4">{{createText("recommendedDesignation","recommendedDesignation","Recommended Designation",'',$data->recommendedDesignation)}}
</div><div class="col-lg-4">{{createDate("recommendDate","recommendDate","Recommend Date",'',$data->recommendDate)}}
</div><div class="col-lg-12">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>