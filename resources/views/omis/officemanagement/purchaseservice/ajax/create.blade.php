
                <form >
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("purchaseTitle","purchaseTitle","PurchaseTitle")}}
</div><div class="col-lg-6">{{createText("contractName","contractName","ContractName")}}
</div><div class="col-lg-6">{{createText("referenceNumber","referenceNumber","ReferenceNumber")}}
</div><div class="col-lg-6">{{createText("date","date","Date")}}
</div><div class="col-lg-6">{{createText("vatNumber","vatNumber","VatNumber")}}
</div><div class="col-lg-6">{{createText("address","address","Address")}}
</div><div class="col-lg-6">{{createText("contact","contact","Contact")}}
</div><div class="col-lg-6">{{createText("serialNumber","serialNumber","SerialNumber")}}
</div><div class="col-lg-6">{{createText("descriptions","descriptions","Descriptions")}}
</div><div class="col-lg-6">{{createText("units","units","Units")}}
</div><div class="col-lg-6">{{createText("quantity","quantity","Quantity")}}
</div><div class="col-lg-6">{{createText("rate","rate","Rate")}}
</div><div class="col-lg-6">{{createText("amount","amount","Amount")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>