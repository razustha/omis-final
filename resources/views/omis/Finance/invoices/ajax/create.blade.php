
                <form >
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("company_id","company_id","Company Id")}}
</div><div class="col-lg-6">{{createText("invoicesTitle","invoicesTitle","InvoicesTitle")}}
</div><div class="col-lg-6">{{createText("amount","amount","Amount")}}
</div><div class="col-lg-6">{{createText("amountInWords","amountInWords","AmountInWords")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>