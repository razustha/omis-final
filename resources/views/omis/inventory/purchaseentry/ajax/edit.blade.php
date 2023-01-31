
        <form action="{{route('inventory.purchaseentry.update',[$data->purchaseentry_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("purchaseName","purchaseName","Purchase Name",'',$data->purchaseName)}}
</div><div class="col-lg-6">{{createDate("purchaseDate","purchaseDate","Purchase Date",'',$data->purchaseDate)}}
</div><div class="col-lg-6">{{createText("purchaseTime","purchaseTime","Purchase Time",'',$data->purchaseTime)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>