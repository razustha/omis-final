
                <form action="{{route('finance.proposal.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("applicantName_id","applicantName_id","ApplicantName Id")}}
</div><div class="col-lg-6">{{createText("deparmentName_id","deparmentName_id","DeparmentName Id")}}
</div><div class="col-lg-6">{{createText("proposalTitle","proposalTitle","ProposalTitle")}}
</div><div class="col-lg-6">{{createText("proposalSubmittedBy","proposalSubmittedBy","ProposalSubmittedBy")}}
</div><div class="col-lg-6">{{createText("proposalSubmittedTo","proposalSubmittedTo","ProposalSubmittedTo")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createLabel('proposalDetails','form-label col-form-label','Details')}}{{createTextArea("proposalDetails","proposalDetails","ProposalDetails","","")}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>