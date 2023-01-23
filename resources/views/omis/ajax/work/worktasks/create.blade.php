
                <form method="POST" action="{{route('work.worktasks.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("trainer_id","trainer_id","Trainer Id")}}
</div><div class="col-lg-6">{{createText("trainingDate","trainingDate","TrainingDate")}}
</div><div class="col-lg-6">{{createText("trainingEndDate","trainingEndDate","TrainingEndDate")}}
</div><div class="col-lg-6">{{createText("department_id","department_id","Department Id")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div><div class="col-lg-6">{{createText("tasksblade_id","tasksblade_id","Tasksblade Id")}}
</div><div class="col-lg-6">{{createText("countryName_id","countryName_id","CountryName Id")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>