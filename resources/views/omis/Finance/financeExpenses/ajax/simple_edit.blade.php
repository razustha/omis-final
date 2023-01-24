
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("expensesAmount","expensesAmount","ExpensesAmount",'',$data->expensesAmount)}}
</div><div class="col-lg-6">{{createText("expensesDate","expensesDate","ExpensesDate",'',$data->expensesDate)}}
</div><div class="col-lg-6">{{createText("selectAccount","selectAccount","SelectAccount",'',$data->selectAccount)}}
</div><div class="col-lg-6">{{createText("selectCategory_id","selectCategory_id","SelectCategory Id",'',$data->selectCategory_id)}}
</div><div class="col-lg-6">{{createText("paymentMethod","paymentMethod","PaymentMethod",'',$data->paymentMethod)}}
</div><div class="col-lg-6">{{createText("expensesRefrenceNumber","expensesRefrenceNumber","ExpensesRefrenceNumber",'',$data->expensesRefrenceNumber)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>