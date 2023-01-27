
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("trainerFullName","trainerFullName","TrainerFullName",'',$data->trainerFullName)}}
</div><div class="col-lg-6">{{createText("trainerPhone","trainerPhone","TrainerPhone",'',$data->trainerPhone)}}
</div><div class="col-lg-6">{{createText("trainerAddress","trainerAddress","TrainerAddress",'',$data->trainerAddress)}}
</div><div class="col-lg-6">{{createText("trainerEmail","trainerEmail","TrainerEmail",'',$data->trainerEmail)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>