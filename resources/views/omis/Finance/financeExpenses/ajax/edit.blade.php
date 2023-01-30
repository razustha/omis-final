
        <form action="{{route('finance.financeexpenses.update',[$data->financeExpenses_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("expensesAmount","expensesAmount","ExpensesAmount",'',$data->expensesAmount)}}
</div><div class="col-lg-6">{{createDate("expensesDate","expensesDate","ExpensesDate",'',$data->expensesDate)}}
</div><div class="col-lg-6">{{createText("selectAccount","selectAccount","SelectAccount",'',$data->selectAccount)}}
</div><div class="col-lg-6">{{createText("selectCategory_id","selectCategory_id","SelectCategory Id",'',$data->selectCategory_id)}}
</div><div class="col-lg-4">{{createText("paymentMethod","paymentMethod","PaymentMethod",'',$data->paymentMethod)}}
</div><div class="col-lg-4">{{createText("expensesRefrenceNumber","expensesRefrenceNumber","ExpensesRefrenceNumber",'',$data->expensesRefrenceNumber)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>