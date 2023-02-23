
                <form action="{{route('finance.financeexpenses.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("expensesAmount","expensesAmount","Expenses Amount")}}
</div><div class="col-lg-6">{{createDate("expensesDate","expensesDate","Expenses Date")}}
</div><div class="col-lg-6">{{createText("selectAccount","selectAccount","Account")}}
</div><div class="col-lg-6">{{createText("selectCategory_id","selectCategory_id","Category")}}
</div><div class="col-lg-4">{{createText("paymentMethod","paymentMethod","Payment Method")}}
</div><div class="col-lg-4">{{createText("expensesRefrenceNumber","expensesRefrenceNumber","Reference Number")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>