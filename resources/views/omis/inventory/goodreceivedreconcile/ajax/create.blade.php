<form action="{{route('inventory.goodreceivedreconcile.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("goodReceivedReconcile_Title","goodReceivedReconcile_Title","Title")}}
</div><div class="col-lg-6">{{createText("address","address","Address")}}
</div><div class="col-lg-6">{{createText("purchaseNumber","purchaseNumber","PurchaseNumber")}}
</div><div class="col-lg-6">{{createText("receiptNumber","receiptNumber","ReceiptNumber")}}
</div><div class="col-lg-6">{{createText("sn","sn","Sn")}}
</div><div class="col-lg-6">{{createText("goodsDetails","goodsDetails","GoodsDetails")}}
</div><div class="col-lg-6">{{createText("unit","unit","Unit")}}
</div><div class="col-lg-6">{{createText("quanitity","quanitity","Quanitity")}}
</div><div class="col-lg-6">{{createText("comments","comments","Comments")}}
</div><div class="col-lg-6">{{createText("receiverdName","receiverdName","Receiver Name")}}
</div><div class="col-lg-6">{{createText("receivedPosition","receivedPosition","ReceivedPosition")}}
</div><div class="col-lg-6">{{createDate("receivedDate","receivedDate","ReceivedDate")}}
</div><div class="col-lg-6">{{createText("receivedAddress","receivedAddress","ReceivedAddress")}}
</div><div class="col-lg-6">{{createText("organization","organization","Organization")}}
</div><div class="col-lg-6">{{createDate("organizationDate","organizationDate","OrganizationDate")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks",'',"remarks",'',"")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>