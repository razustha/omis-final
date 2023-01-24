
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("payeePhone","payeePhone","PayeePhone",'',$data->payeePhone)}}
</div><div class="col-lg-6">{{createText("payeeAccount","payeeAccount","PayeeAccount",'',$data->payeeAccount)}}
</div><div class="col-lg-6">{{createText("payerName","payerName","PayerName",'',$data->payerName)}}
</div><div class="col-lg-6">{{createText("payerPhone","payerPhone","PayerPhone",'',$data->payerPhone)}}
</div><div class="col-lg-6">{{createText("payerAccount","payerAccount","PayerAccount",'',$data->payerAccount)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>