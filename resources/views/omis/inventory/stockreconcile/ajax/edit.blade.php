
        <form action="{{route('inventory.stockreconcile.update',[$data->stockreconcile_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("stockName","stockName","Stock Name",'',$data->stockName)}}
</div><div class="col-lg-6">{{createText("stockQuantity","stockQuantity","Stock Quantity",'',$data->stockQuantity)}}
</div><div class="col-lg-4">{{createDate("date","date","Date",'',$data->date)}}
</div><div class="col-lg-4">{{createText("time","time","Time",'',$data->time)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>