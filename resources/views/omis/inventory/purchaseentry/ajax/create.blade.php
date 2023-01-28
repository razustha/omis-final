
                <form action="{{route('inventory.purchaseentry.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("purchaseName","purchaseName","Purchase Name")}}
</div><div class="col-lg-6">{{createDate("purchaseDate","purchaseDate","Purchase Date")}}
</div><div class="col-lg-6">{{createText("purchaseTime","purchaseTime","Purchase Time")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>