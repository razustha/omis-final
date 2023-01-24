
                <form action="{{route('finance.financepay.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("payeePhone","payeePhone","Payee Phone")}}
</div><div class="col-lg-6">{{createText("payeeAccount","payeeAccount","Payee Account")}}
</div><div class="col-lg-6">{{createText("payerName","payerName","Payer Name")}}
</div><div class="col-lg-6">{{createText("payerPhone","payerPhone","Payer Phone")}}
</div><div class="col-lg-6">{{createText("payerAccount","payerAccount","Payer Account")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>