
                <form action="{{route('inventory.stockreconcile.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("stockName","stockName","Stock Name")}}
</div><div class="col-lg-6">{{createText("stockQuantity","stockQuantity","Stock Quantity")}}
</div><div class="col-lg-4">{{createDate("date","date","Date")}}
</div><div class="col-lg-4">{{createText("time","time","Time")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>