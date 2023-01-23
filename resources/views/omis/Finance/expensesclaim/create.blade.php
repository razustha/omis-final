@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Add Expensesclaim</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('finance.expensesclaim.index') }}" class="btn btn-md d-md-none btn-primary">
                                <em class="icon ni ni-plus"></em>
                                <span>View Cities</span>
                            </a>
                        </li>
                      
                    </ul>
                </div>
                </div>
            </div>

            <div class="nk-block">

                        <div class="card">
                            <div class="card-body">
                <form method="POST" action="{{route('finance.expensesclaim.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("title","title","Title")}}
</div><div class="col-lg-6">{{createText("fullName","fullName","FullName")}}
</div><div class="col-lg-6">{{createText("financialYear","financialYear","FinancialYear")}}
</div><div class="col-lg-6">{{createText("currency","currency","Currency")}}
</div><div class="col-lg-6">{{createText("exchangeRate","exchangeRate","ExchangeRate")}}
</div><div class="col-lg-6">{{createDate("date","date","Date")}}
</div><div class="col-lg-6">{{createText("dailyAllowence","dailyAllowence","DailyAllowence")}}
</div><div class="col-lg-6">{{createText("food","food","Food")}}
</div><div class="col-lg-6">{{createText("hotelBill","hotelBill","HotelBill")}}
</div><div class="col-lg-6">{{createText("officialMeeting","officialMeeting","OfficialMeeting")}}
</div><div class="col-lg-6">{{createText("transportation","transportation","Transportation")}}
</div><div class="col-lg-6">{{createText("consultantAccomodation","consultantAccomodation","ConsultantAccomodation")}}
</div><div class="col-lg-6">{{createText("receiptNumber","receiptNumber","ReceiptNumber")}}
</div><div class="col-lg-6">{{createText("total","total","Total")}}
</div><div class="col-lg-6">{{createText("amount","amount","Amount")}}
</div><div class="col-lg-6">{{createText("recievedAdvance","recievedAdvance","RecievedAdvance")}}
</div><div class="col-lg-6">{{createText("totalExpense","totalExpense","TotalExpense")}}
</div><div class="col-lg-6">{{createText("payBalance","payBalance","PayBalance")}}
</div><div class="col-lg-6">{{createText("requestedName","requestedName","RequestedName")}}
</div><div class="col-lg-6">{{createText("requestedDesignation","requestedDesignation","RequestedDesignation")}}
</div><div class="col-lg-6">{{createDate("requestedDate","requestedDate","RequestedDate")}}
</div><div class="col-lg-6">{{createText("checkedName","checkedName","CheckedName")}}
</div><div class="col-lg-6">{{createText("checkedDesignation","checkedDesignation","CheckedDesignation")}}
</div><div class="col-lg-6">{{createDate("checkedDate","checkedDate","CheckedDate")}}
</div><div class="col-lg-6">{{createText("recommendName","recommendName","RecommendName")}}
</div><div class="col-lg-6">{{createText("recommendedDesignation","recommendedDesignation","RecommendedDesignation")}}
</div><div class="col-lg-4">{{createDate("recommendDate","recommendDate","RecommendDate")}}
</div><div class="col-lg-4">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks",'',"remarks",'',"")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection