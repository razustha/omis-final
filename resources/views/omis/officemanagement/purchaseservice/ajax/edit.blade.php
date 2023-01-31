<form action="{{route('officemanagement.purchaseservice.update',[$data->prchaseService_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("purchaseTitle","purchaseTitle","Purchase Title",'',$data->purchaseTitle)}}
</div><div class="col-lg-6">{{createText("contractName","contractName","Contract Name",'',$data->contractName)}}
</div><div class="col-lg-6">{{createText("referenceNumber","referenceNumber","Reference Number",'',$data->referenceNumber)}}
</div><div class="col-lg-6">{{createText("date","date","Date",'',$data->date)}}
</div><div class="col-lg-6">{{createText("vatNumber","vatNumber","Vat Number",'',$data->vatNumber)}}
</div><div class="col-lg-6">{{createText("address","address","Address",'',$data->address)}}
</div><div class="col-lg-6">{{createText("contact","contact","Contact",'',$data->contact)}}
</div><div class="col-lg-6">{{createText("serialNumber","serialNumber","Serial Number",'',$data->serialNumber)}}
</div><div class="col-lg-6">{{createText("units","units","Units",'',$data->units)}}
</div><div class="col-lg-6">{{createText("quantity","quantity","Quantity",'',$data->quantity)}}
</div><div class="col-lg-4">{{createText("rate","rate","Rate",'',$data->rate)}}
</div><div class="col-lg-4">{{createText("amount","amount","Amount",'',$data->amount)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createLabel('descriptions','form-label col-form-label','Description')}}{{createTextArea("descriptions","descriptions","Descriptions",'',$data->descriptions)}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>