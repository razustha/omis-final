
        <form action="{{route('master.policy.update',[$data->policy_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("policyName","policyName","PolicyName",'',$data->policyName)}}
</div><div class="col-lg-6">{{createText("policyDetail","policyDetail","PolicyDetail",'',$data->policyDetail)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>