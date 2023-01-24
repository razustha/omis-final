
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("creditNoteDate","creditNoteDate","CreditNoteDate",'',$data->creditNoteDate)}}
</div><div class="col-lg-6">{{createText("creditDetails","creditDetails","CreditDetails",'',$data->creditDetails)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div><div class="col-lg-6">{{createText("creditNote_id","creditNote_id","CreditNote Id",'',$data->creditNote_id)}}
</div><div class="col-lg-6">{{createText("applicant_id","applicant_id","Applicant Id",'',$data->applicant_id)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>