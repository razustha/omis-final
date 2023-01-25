
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("trainingList","trainingList","TrainingList",'',$data->trainingList)}}
</div><div class="col-lg-6">{{createText("trainer_id","trainer_id","Trainer Id",'',$data->trainer_id)}}
</div><div class="col-lg-6">{{createText("trainingDate","trainingDate","TrainingDate",'',$data->trainingDate)}}
</div><div class="col-lg-6">{{createText("trainigEndDate","trainigEndDate","TrainigEndDate",'',$data->trainigEndDate)}}
</div><div class="col-lg-6">{{createText("department_id","department_id","Department Id",'',$data->department_id)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>