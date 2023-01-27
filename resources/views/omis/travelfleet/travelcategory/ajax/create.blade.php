<form action="{{route('travelfleet.travelcategory.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createDate("date","date","Date")}}
</div><div class="col-lg-6">{{createText("categoryType","categoryType","Category Type")}}
</div><div class="col-lg-6">{{createText("amount","amount","Amount")}}
</div><div class="col-lg-6">{{createText("amountInWords","amountInWords","Amount In Words")}}
</div><div class="col-lg-6">{{createText("claimedBy","claimedBy","Claimed By")}}
</div><div class="col-lg-6">{{createText("verifiedBy","verifiedBy","Verified By")}}
</div><div class="col-lg-6">{{createText("approvedBy","approvedBy","Approved By")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createLabel('details','form-label col-form-label','Details')}}{{createTextArea("details","details","Details","","")}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>