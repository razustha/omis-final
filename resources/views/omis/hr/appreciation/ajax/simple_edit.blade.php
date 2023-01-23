
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("appreciationTitle","appreciationTitle","AppreciationTitle",'',$data->appreciationTitle)}}
</div><div class="col-lg-6">{{createText("appreciationType","appreciationType","AppreciationType",'',$data->appreciationType)}}
</div><div class="col-lg-6">{{createText("appreciatedBy","appreciatedBy","AppreciatedBy",'',$data->appreciatedBy)}}
</div><div class="col-lg-6">{{createText("recievedBy","recievedBy","RecievedBy",'',$data->recievedBy)}}
</div><div class="col-lg-6">{{createText("appreciationRecievedOn","appreciationRecievedOn","AppreciationRecievedOn",'',$data->appreciationRecievedOn)}}
</div><div class="col-lg-6">{{createText("appreciatioanApprovedOn","appreciatioanApprovedOn","AppreciatioanApprovedOn",'',$data->appreciatioanApprovedOn)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>