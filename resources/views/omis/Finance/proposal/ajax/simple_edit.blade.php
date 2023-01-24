
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("applicantName_id","applicantName_id","ApplicantName Id",'',$data->applicantName_id)}}
</div><div class="col-lg-6">{{createText("deparmentName_id","deparmentName_id","DeparmentName Id",'',$data->deparmentName_id)}}
</div><div class="col-lg-6">{{createText("proposalTitle","proposalTitle","ProposalTitle",'',$data->proposalTitle)}}
</div><div class="col-lg-6">{{createText("proposalDetails","proposalDetails","ProposalDetails",'',$data->proposalDetails)}}
</div><div class="col-lg-6">{{createText("proposalSubmittedBy","proposalSubmittedBy","ProposalSubmittedBy",'',$data->proposalSubmittedBy)}}
</div><div class="col-lg-6">{{createText("proposalSubmittedTo","proposalSubmittedTo","ProposalSubmittedTo",'',$data->proposalSubmittedTo)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>