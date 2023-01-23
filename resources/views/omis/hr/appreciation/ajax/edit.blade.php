
        <form action="{{route('hr.appreciation.update',[$data->appreciation_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("appreciationTitle","appreciationTitle","AppreciationTitle",'',$data->appreciationTitle)}}
</div><div class="col-lg-6">{{createText("appreciationType","appreciationType","AppreciationType",'',$data->appreciationType)}}
</div><div class="col-lg-6">{{createText("appreciatedBy","appreciatedBy","AppreciatedBy",'',$data->appreciatedBy)}}
</div><div class="col-lg-6">{{createText("recievedBy","recievedBy","RecievedBy",'',$data->recievedBy)}}
</div><div class="col-lg-6">{{createDate("appreciationRecievedOn","appreciationRecievedOn","AppreciationRecievedOn",'',$data->appreciationRecievedOn)}}
</div><div class="col-lg-6">{{createDate("appreciatioanApprovedOn","appreciatioanApprovedOn","AppreciatioanApprovedOn",'',$data->appreciatioanApprovedOn)}}
</div><div class="col-lg-12">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>