
                <form action="{{route('requisition.requisitiontravel.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createDate("date","date","Date")}}
</div><div class="col-lg-6">{{createText("time","time","Time")}}
</div><div class="col-lg-4">{{createText("destination","destination","Destination")}}
</div><div class="col-lg-4">{{createText("totaldays","totaldays","Total days")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>