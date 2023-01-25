
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("arrangementType_id","arrangementType_id","ArrangementType Id",'',$data->arrangementType_id)}}
</div><div class="col-lg-6">{{createText("purposeOfVisit","purposeOfVisit","PurposeOfVisit",'',$data->purposeOfVisit)}}
</div><div class="col-lg-6">{{createText("destination","destination","Destination",'',$data->destination)}}
</div><div class="col-lg-6">{{createText("travelStartDate","travelStartDate","TravelStartDate",'',$data->travelStartDate)}}
</div><div class="col-lg-6">{{createText("travelEndDate","travelEndDate","TravelEndDate",'',$data->travelEndDate)}}
</div><div class="col-lg-6">{{createText("expectedBudget","expectedBudget","ExpectedBudget",'',$data->expectedBudget)}}
</div><div class="col-lg-6">{{createText("actualBudget","actualBudget","ActualBudget",'',$data->actualBudget)}}
</div><div class="col-lg-6">{{createText("travelMode","travelMode","TravelMode",'',$data->travelMode)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div><div class="col-lg-6">{{createText("companyName_id","companyName_id","CompanyName Id",'',$data->companyName_id)}}
</div><div class="col-lg-6">{{createText("travel_id","travel_id","Travel Id",'',$data->travel_id)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>