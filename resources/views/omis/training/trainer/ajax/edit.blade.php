<form action="{{route('training.trainer.update',[$data->trainer_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("trainerFullName","trainerFullName","Full Name",'',$data->trainerFullName)}}
</div><div class="col-lg-6">{{createText("trainerPhone","trainerPhone","Phone",'',$data->trainerPhone)}}
</div><div class="col-lg-4">{{createText("trainerAddress","trainerAddress","Address",'',$data->trainerAddress)}}
</div><div class="col-lg-4">{{createText("trainerEmail","trainerEmail","Email",'',$data->trainerEmail)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>