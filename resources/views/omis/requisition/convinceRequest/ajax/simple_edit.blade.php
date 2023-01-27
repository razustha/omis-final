
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("ttileName","ttileName","TtileName",'',$data->ttileName)}}
</div><div class="col-lg-6">{{createText("applicants_id","applicants_id","Applicants Id",'',$data->applicants_id)}}
</div><div class="col-lg-6">{{createText("startDate","startDate","StartDate",'',$data->startDate)}}
</div><div class="col-lg-6">{{createText("expireDate","expireDate","ExpireDate",'',$data->expireDate)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>