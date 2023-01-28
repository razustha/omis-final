<form action="{{route('officemanagement.purchaseservice.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("purchaseTitle","purchaseTitle","Purchase Title")}}
</div><div class="col-lg-6">{{createText("contractName","contractName","Contract Name")}}
</div><div class="col-lg-6">{{createText("referenceNumber","referenceNumber","Reference Number")}}
</div><div class="col-lg-6">{{createDate("date","date","Date")}}
</div><div class="col-lg-6">{{createText("vatNumber","vatNumber","Vat Number")}}
</div><div class="col-lg-6">{{createText("address","address","Address")}}
</div><div class="col-lg-6">{{createText("contact","contact","Contact")}}
</div><div class="col-lg-6">{{createText("serialNumber","serialNumber","Serial Number")}}
</div><div class="col-lg-6">{{createText("units","units","Units")}}
</div><div class="col-lg-6">{{createText("quantity","quantity","Quantity")}}
</div><div class="col-lg-4">{{createText("rate","rate","Rate")}}
</div><div class="col-lg-4">{{createText("amount","amount","Amount")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createLabel('descriptions','form-label col-form-label','Description')}}{{createTextArea("descriptions","descriptions","Descriptions","","")}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>