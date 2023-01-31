
        <form action="{{route('finance.financepay.update',[$data->payeeName_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("payeePhone","payeePhone","Payee Phone",'',$data->payeePhone)}}
</div><div class="col-lg-6">{{createText("payeeAccount","payeeAccount","Payee Account",'',$data->payeeAccount)}}
</div><div class="col-lg-6">{{createText("payerName","payerName","Payer Name",'',$data->payerName)}}
</div><div class="col-lg-6">{{createText("payerPhone","payerPhone","Payer Phone",'',$data->payerPhone)}}
</div><div class="col-lg-6">{{createText("payerAccount","payerAccount","Payer Account",'',$data->payerAccount)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>