
        <form action="{{route('finance.financepay.update',[$data->payeeName_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("payeePhone","payeePhone","PayeePhone",'',$data->payeePhone)}}
</div><div class="col-lg-6">{{createText("payeeAccount","payeeAccount","PayeeAccount",'',$data->payeeAccount)}}
</div><div class="col-lg-6">{{createText("payerName","payerName","PayerName",'',$data->payerName)}}
</div><div class="col-lg-6">{{createText("payerPhone","payerPhone","PayerPhone",'',$data->payerPhone)}}
</div><div class="col-lg-6">{{createText("payerAccount","payerAccount","PayerAccount",'',$data->payerAccount)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>