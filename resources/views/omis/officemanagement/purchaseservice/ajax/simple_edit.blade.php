
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("purchaseTitle","purchaseTitle","PurchaseTitle",'',$data->purchaseTitle)}}
</div><div class="col-lg-6">{{createText("contractName","contractName","ContractName",'',$data->contractName)}}
</div><div class="col-lg-6">{{createText("referenceNumber","referenceNumber","ReferenceNumber",'',$data->referenceNumber)}}
</div><div class="col-lg-6">{{createText("date","date","Date",'',$data->date)}}
</div><div class="col-lg-6">{{createText("vatNumber","vatNumber","VatNumber",'',$data->vatNumber)}}
</div><div class="col-lg-6">{{createText("address","address","Address",'',$data->address)}}
</div><div class="col-lg-6">{{createText("contact","contact","Contact",'',$data->contact)}}
</div><div class="col-lg-6">{{createText("serialNumber","serialNumber","SerialNumber",'',$data->serialNumber)}}
</div><div class="col-lg-6">{{createText("descriptions","descriptions","Descriptions",'',$data->descriptions)}}
</div><div class="col-lg-6">{{createText("units","units","Units",'',$data->units)}}
</div><div class="col-lg-6">{{createText("quantity","quantity","Quantity",'',$data->quantity)}}
</div><div class="col-lg-6">{{createText("rate","rate","Rate",'',$data->rate)}}
</div><div class="col-lg-6">{{createText("amount","amount","Amount",'',$data->amount)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>