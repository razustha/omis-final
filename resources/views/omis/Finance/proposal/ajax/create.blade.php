
                <form action="{{route('finance.proposal.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("applicantName_id","applicantName_id","Applicant Name")}}
</div><div class="col-lg-6">{{createText("deparmentName_id","deparmentName_id","Deparment Name")}}
</div><div class="col-lg-6">{{createText("proposalTitle","proposalTitle","Proposal Title")}}
</div><div class="col-lg-6">{{createText("proposalSubmittedBy","proposalSubmittedBy","Proposal Submitted By")}}
</div><div class="col-lg-6">{{createText("proposalSubmittedTo","proposalSubmittedTo","Proposal Submitted To")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createLabel('proposalDetails','form-label col-form-label','Details')}}{{createTextArea("proposalDetails","proposalDetails","ProposalDetails","","")}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>