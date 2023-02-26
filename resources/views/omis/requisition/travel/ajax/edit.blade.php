<form action="{{route('requisition.travel.update',[$data->travel_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row">
<div class="col-lg-6">{{createText("companyName_id","companyName_id","Company",'',$data->companyName_id)}}
</div>        
<div class="col-lg-6">{{createText("employeeName_id","employeeName_id","Employee",'',$data->employeeName_id)}}
</div><div class="col-lg-6">{{createText("arrangementType_id","arrangementType_id","Arrangement",'',$data->arrangementType_id)}}
</div><div class="col-lg-6">{{createText("purposeOfVisit","purposeOfVisit","Purpose Of Visit",'',$data->purposeOfVisit)}}
</div><div class="col-lg-6">{{createText("destination","destination","Destination",'',$data->destination)}}
</div><div class="col-lg-6">{{createDate("travelStartDate","travelStartDate","Start Date",'',$data->travelStartDate)}}
</div><div class="col-lg-6">{{createDate("travelEndDate","travelEndDate","End Date",'',$data->travelEndDate)}}
</div><div class="col-lg-6">{{createText("expectedBudget","expectedBudget","Expected Budget",'',$data->expectedBudget)}}
</div><div class="col-lg-4">{{createText("actualBudget","actualBudget","Actual Budget",'',$data->actualBudget)}}
</div><div class="col-lg-4">{{createText("travelMode","travelMode","Travel Mode",'',$data->travelMode)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>