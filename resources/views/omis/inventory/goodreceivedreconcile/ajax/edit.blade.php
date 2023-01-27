<form action="{{route('inventory.goodreceivedreconcile.update',[$data->goodreceivedreconcile_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("goodReceivedReconcile_Title","goodReceivedReconcile_Title","Title",'',$data->goodReceivedReconcile_Title)}}
</div><div class="col-lg-6">{{createText("address","address","Address",'',$data->address)}}
</div><div class="col-lg-6">{{createText("purchaseNumber","purchaseNumber","Purchase Number",'',$data->purchaseNumber)}}
</div><div class="col-lg-6">{{createText("receiptNumber","receiptNumber","Receipt Number",'',$data->receiptNumber)}}
</div><div class="col-lg-6">{{createText("sn","sn","Sn",'',$data->sn)}}
</div><div class="col-lg-6">{{createText("goodsDetails","goodsDetails","GoodsDetails",'',$data->goodsDetails)}}
</div><div class="col-lg-6">{{createText("unit","unit","Unit",'',$data->unit)}}
</div><div class="col-lg-6">{{createText("quanitity","quanitity","Quanitity",'',$data->quanitity)}}
</div><div class="col-lg-6">{{createText("comments","comments","Comments",'',$data->comments)}}
</div><div class="col-lg-6">{{createText("receiverdName","receiverdName","Receiver Name",'',$data->receiverdName)}}
</div><div class="col-lg-6">{{createText("receivedPosition","receivedPosition","ReceivedPosition",'',$data->receivedPosition)}}
</div><div class="col-lg-6">{{createDate("receivedDate","receivedDate","ReceivedDate",'',$data->receivedDate)}}
</div><div class="col-lg-6">{{createText("receivedAddress","receivedAddress","ReceivedAddress",'',$data->receivedAddress)}}
</div><div class="col-lg-6">{{createText("organization","organization","Organization",'',$data->organization)}}
</div><div class="col-lg-6">{{createDate("organizationDate","organizationDate","OrganizationDate",'',$data->organizationDate)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks",'',"remarks","",$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>