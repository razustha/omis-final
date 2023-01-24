
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("title","title","Title",'',$data->title)}}
</div><div class="col-lg-6">{{createText("fullName","fullName","FullName",'',$data->fullName)}}
</div><div class="col-lg-6">{{createText("financialYear","financialYear","FinancialYear",'',$data->financialYear)}}
</div><div class="col-lg-6">{{createText("currency","currency","Currency",'',$data->currency)}}
</div><div class="col-lg-6">{{createText("exchangeRate","exchangeRate","ExchangeRate",'',$data->exchangeRate)}}
</div><div class="col-lg-6">{{createText("date","date","Date",'',$data->date)}}
</div><div class="col-lg-6">{{createText("dailyAllowence","dailyAllowence","DailyAllowence",'',$data->dailyAllowence)}}
</div><div class="col-lg-6">{{createText("food","food","Food",'',$data->food)}}
</div><div class="col-lg-6">{{createText("hotelBill","hotelBill","HotelBill",'',$data->hotelBill)}}
</div><div class="col-lg-6">{{createText("officialMeeting","officialMeeting","OfficialMeeting",'',$data->officialMeeting)}}
</div><div class="col-lg-6">{{createText("transportation","transportation","Transportation",'',$data->transportation)}}
</div><div class="col-lg-6">{{createText("consultantAccomodation","consultantAccomodation","ConsultantAccomodation",'',$data->consultantAccomodation)}}
</div><div class="col-lg-6">{{createText("receiptNumber","receiptNumber","ReceiptNumber",'',$data->receiptNumber)}}
</div><div class="col-lg-6">{{createText("total","total","Total",'',$data->total)}}
</div><div class="col-lg-6">{{createText("amount","amount","Amount",'',$data->amount)}}
</div><div class="col-lg-6">{{createText("recievedAdvance","recievedAdvance","RecievedAdvance",'',$data->recievedAdvance)}}
</div><div class="col-lg-6">{{createText("totalExpense","totalExpense","TotalExpense",'',$data->totalExpense)}}
</div><div class="col-lg-6">{{createText("payBalance","payBalance","PayBalance",'',$data->payBalance)}}
</div><div class="col-lg-6">{{createText("requestedName","requestedName","RequestedName",'',$data->requestedName)}}
</div><div class="col-lg-6">{{createText("requestedDesignation","requestedDesignation","RequestedDesignation",'',$data->requestedDesignation)}}
</div><div class="col-lg-6">{{createText("requestedDate","requestedDate","RequestedDate",'',$data->requestedDate)}}
</div><div class="col-lg-6">{{createText("checkedName","checkedName","CheckedName",'',$data->checkedName)}}
</div><div class="col-lg-6">{{createText("checkedDesignation","checkedDesignation","CheckedDesignation",'',$data->checkedDesignation)}}
</div><div class="col-lg-6">{{createText("checkedDate","checkedDate","CheckedDate",'',$data->checkedDate)}}
</div><div class="col-lg-6">{{createText("recommendName","recommendName","RecommendName",'',$data->recommendName)}}
</div><div class="col-lg-6">{{createText("recommendedDesignation","recommendedDesignation","RecommendedDesignation",'',$data->recommendedDesignation)}}
</div><div class="col-lg-6">{{createText("recommendDate","recommendDate","RecommendDate",'',$data->recommendDate)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>