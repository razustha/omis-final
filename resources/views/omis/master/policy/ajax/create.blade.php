
                <form action="{{route('master.policy.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("policyName","policyName","PolicyName")}}
</div><div class="col-lg-6">{{createText("policyDetail","policyDetail","PolicyDetail")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>