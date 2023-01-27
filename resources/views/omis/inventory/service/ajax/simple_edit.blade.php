
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("serviceName","serviceName","ServiceName",'',$data->serviceName)}}
</div><div class="col-lg-6">{{createText("serviceType_id","serviceType_id","ServiceType Id",'',$data->serviceType_id)}}
</div><div class="col-lg-6">{{createText("issueDate","issueDate","IssueDate",'',$data->issueDate)}}
</div><div class="col-lg-6">{{createText("serviceExpireDate","serviceExpireDate","ServiceExpireDate",'',$data->serviceExpireDate)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>