
                <form >
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("trainingList","trainingList","TrainingList")}}
</div><div class="col-lg-6">{{createText("trainer_id","trainer_id","Trainer Id")}}
</div><div class="col-lg-6">{{createText("trainingDate","trainingDate","TrainingDate")}}
</div><div class="col-lg-6">{{createText("trainigEndDate","trainigEndDate","TrainigEndDate")}}
</div><div class="col-lg-6">{{createText("department_id","department_id","Department Id")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>