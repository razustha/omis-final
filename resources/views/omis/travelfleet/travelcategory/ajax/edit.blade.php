<form action="{{route('travelfleet.travelcategory.update',[$data->travelcategory_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("date","date","Date",'',$data->date)}}
</div><div class="col-lg-6">{{createText("categoryType","categoryType","Category Type",'',$data->categoryType)}}
</div><div class="col-lg-6">{{createText("amount","amount","Amount",'',$data->amount)}}
</div><div class="col-lg-6">{{createText("amountInWords","amountInWords","Amount In Words",'',$data->amountInWords)}}
</div><div class="col-lg-6">{{createText("claimedBy","claimedBy","Claimed By",'',$data->claimedBy)}}
</div><div class="col-lg-6">{{createText("verifiedBy","verifiedBy","Verified By",'',$data->verifiedBy)}}
</div><div class="col-lg-6">{{createText("approvedBy","approvedBy","Approved By",'',$data->approvedBy)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createLabel('details','form-label col-form-label','Details')}}{{createTextArea("details","details","Details",'',$data->details)}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>