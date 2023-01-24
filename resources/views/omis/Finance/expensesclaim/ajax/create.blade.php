
                <form action="{{route('finance.expensesclaim.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("title","title","Title")}}
</div><div class="col-lg-6">{{createText("fullName","fullName","Full Name")}}
</div><div class="col-lg-6">{{createText("financialYear","financialYear","Financial Year")}}
</div><div class="col-lg-6">{{createText("currency","currency","Currency")}}
</div><div class="col-lg-6">{{createText("exchangeRate","exchangeRate","Exchange Rate")}}
</div><div class="col-lg-6">{{createDate("date","date","Date")}}
</div><div class="col-lg-4">{{createText("dailyAllowence","dailyAllowence","Daily Allowence")}}
</div><div class="col-lg-4">{{createText("food","food","Food")}}
</div><div class="col-lg-4">{{createText("hotelBill","hotelBill","Hotel Bill")}}
</div><div class="col-lg-6">{{createText("officialMeeting","officialMeeting","Official Meeting")}}
</div><div class="col-lg-6">{{createText("transportation","transportation","Transportation")}}
</div><div class="col-lg-6">{{createText("consultantAccomodation","consultantAccomodation","Consultant Accomodation")}}
</div><div class="col-lg-6">{{createText("receiptNumber","receiptNumber","Receipt Number")}}
</div><div class="col-lg-4">{{createText("total","total","Total")}}
</div><div class="col-lg-4">{{createText("amount","amount","Amount")}}
</div><div class="col-lg-4">{{createText("recievedAdvance","recievedAdvance","Recieved Advance")}}
</div><div class="col-lg-6">{{createText("totalExpense","totalExpense","Total Expense")}}
</div><div class="col-lg-6">{{createText("payBalance","payBalance","Pay Balance")}}
</div><div class="col-lg-4">{{createText("requestedName","requestedName","Requested Name")}}
</div><div class="col-lg-4">{{createText("requestedDesignation","requestedDesignation","Requested Designation")}}
</div><div class="col-lg-4">{{createDate("requestedDate","requestedDate","Requested Date")}}
</div><div class="col-lg-4">{{createText("checkedName","checkedName","Checked Name")}}
</div><div class="col-lg-4">{{createText("checkedDesignation","checkedDesignation","Checked Designation")}}
</div><div class="col-lg-4">{{createDate("checkedDate","checkedDate","Checked Date")}}
</div><div class="col-lg-4">{{createText("recommendName","recommendName","Recommend Name")}}
</div><div class="col-lg-4">{{createText("recommendedDesignation","recommendedDesignation","Recommended Designation")}}
</div><div class="col-lg-4">{{createDate("recommendDate","recommendDate","Recommend Date")}}
</div><div class="col-lg-12">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>