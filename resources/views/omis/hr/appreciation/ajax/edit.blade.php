
        <form action="{{route('hr.appreciation.update',[$data->appreciation_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("appreciationTitle","appreciationTitle","Appreciation Title",'',$data->appreciationTitle)}}
</div><div class="col-lg-6">{{createText("appreciationType","appreciationType","Appreciation Type",'',$data->appreciationType)}}
</div><div class="col-lg-6">{{createText("appreciatedBy","appreciatedBy","Appreciated By",'',$data->appreciatedBy)}}
</div><div class="col-lg-6">{{createText("recievedBy","recievedBy","Recieved By",'',$data->recievedBy)}}
</div><div class="col-lg-6">{{createDate("appreciationRecievedOn","appreciationRecievedOn","Appreciation Recieved On",'',$data->appreciationRecievedOn)}}
</div><div class="col-lg-6">{{createDate("appreciatioanApprovedOn","appreciatioanApprovedOn","Appreciation Approved On",'',$data->appreciatioanApprovedOn)}}
</div><div class="col-lg-12">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>