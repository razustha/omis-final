
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("date","date","Date",'',$data->date)}}
</div><div class="col-lg-6">{{createText("categoryType","categoryType","CategoryType",'',$data->categoryType)}}
</div><div class="col-lg-6">{{createText("details","details","Details",'',$data->details)}}
</div><div class="col-lg-6">{{createText("amount","amount","Amount",'',$data->amount)}}
</div><div class="col-lg-6">{{createText("amountInWords","amountInWords","AmountInWords",'',$data->amountInWords)}}
</div><div class="col-lg-6">{{createText("claimedBy","claimedBy","ClaimedBy",'',$data->claimedBy)}}
</div><div class="col-lg-6">{{createText("verifiedBy","verifiedBy","VerifiedBy",'',$data->verifiedBy)}}
</div><div class="col-lg-6">{{createText("approvedBy","approvedBy","ApprovedBy",'',$data->approvedBy)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>