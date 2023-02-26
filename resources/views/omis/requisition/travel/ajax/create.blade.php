<form action="{{route('requisition.travel.store')}}" id="storeCustomForm">
 @csrf 
<div class="row">
<div class="col-lg-6">{{createText("companyName_id","companyName_id","Company")}}
</div>    
<div class="col-lg-6">{{createText("employeeName_id","employeeName_id","Employee")}}
</div><div class="col-lg-6">{{createText("arrangementType_id","arrangementType_id","Arrangement")}}
</div><div class="col-lg-6">{{createText("purposeOfVisit","purposeOfVisit","Purpose Of Visit")}}
</div><div class="col-lg-6">{{createText("destination","destination","Destination")}}
</div><div class="col-lg-6">{{createDate("travelStartDate","travelStartDate","Start Date")}}
</div><div class="col-lg-6">{{createDate("travelEndDate","travelEndDate","End Date")}}
</div><div class="col-lg-6">{{createText("expectedBudget","expectedBudget","Expected Budget")}}
</div><div class="col-lg-4">{{createText("actualBudget","actualBudget","Actual Budget")}}
</div><div class="col-lg-4">{{createText("travelMode","travelMode","Travel Mode")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>