<form action="{{route('finance.invoices.update',[$data->invoices_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("company_id","company_id","Company Id",'',$data->company_id)}}
</div><div class="col-lg-6">{{createText("invoicesTitle","invoicesTitle","Invoices Title",'',$data->invoicesTitle)}}
</div><div class="col-lg-4">{{createText("amount","amount","Amount",'',$data->amount)}}
</div><div class="col-lg-4">{{createText("amountInWords","amountInWords","Amount In Words",'',$data->amountInWords)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>