<form action="{{route('inventory.goodreceivedreconcile.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("goodReceivedReconcile_Title","goodReceivedReconcile_Title","Title")}}
</div><div class="col-lg-6">{{createText("address","address","Address")}}
</div><div class="col-lg-6">{{createText("purchaseNumber","purchaseNumber","Purchase Number")}}
</div><div class="col-lg-6">{{createText("receiptNumber","receiptNumber","Receipt Number")}}
</div><div class="col-lg-6">{{createText("sn","sn","Sn")}}
</div><div class="col-lg-6">{{createText("unit","unit","Unit")}}
</div><div class="col-lg-6">{{createText("quanitity","quanitity","Quanitity")}}
</div><div class="col-lg-6">{{createText("comments","comments","Comments")}}
</div><div class="col-lg-6">{{createText("receiverdName","receiverdName","Receiver Name")}}
</div><div class="col-lg-6">{{createText("receivedPosition","receivedPosition","Received Position")}}
</div><div class="col-lg-6">{{createDate("receivedDate","receivedDate","Received Date")}}
</div><div class="col-lg-6">{{createText("receivedAddress","receivedAddress","Received Address")}}
</div><div class="col-lg-4">{{createText("organization","organization","Organization")}}
</div><div class="col-lg-4">{{createDate("organizationDate","organizationDate","Organization Date")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createLabel('goodsDetails','form-label col-form-label','Details')}}{{createTextArea("goodsDetails","goodsDetails","GoodsDetails","","")}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks",'',"remarks",'',"")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>