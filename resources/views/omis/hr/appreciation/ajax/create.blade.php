
                <form action="{{route('hr.appreciation.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("appreciationTitle","appreciationTitle","AppreciationTitle")}}
</div><div class="col-lg-6">{{createText("appreciationType","appreciationType","AppreciationType")}}
</div><div class="col-lg-6">{{createText("appreciatedBy","appreciatedBy","AppreciatedBy")}}
</div><div class="col-lg-6">{{createText("recievedBy","recievedBy","RecievedBy")}}
</div><div class="col-lg-6">{{createText("appreciationRecievedOn","appreciationRecievedOn","AppreciationRecievedOn")}}
</div><div class="col-lg-6">{{createText("appreciatioanApprovedOn","appreciatioanApprovedOn","AppreciatioanApprovedOn")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>