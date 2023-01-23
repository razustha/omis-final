
                <form method="POST" action="{{route('finance.proposal.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("applicantName_id","applicantName_id","ApplicantName Id")}}
</div><div class="col-lg-6">{{createText("deparmentName_id","deparmentName_id","DeparmentName Id")}}
</div><div class="col-lg-6">{{createText("proposalTitle","proposalTitle","ProposalTitle")}}
</div><div class="col-lg-6">{{createText("proposalDetails","proposalDetails","ProposalDetails")}}
</div><div class="col-lg-6">{{createText("proposalSubmittedBy","proposalSubmittedBy","ProposalSubmittedBy")}}
</div><div class="col-lg-6">{{createText("proposalSubmittedTo","proposalSubmittedTo","ProposalSubmittedTo")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>