
                <form >
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("trainerFullName","trainerFullName","TrainerFullName")}}
</div><div class="col-lg-6">{{createText("trainerPhone","trainerPhone","TrainerPhone")}}
</div><div class="col-lg-6">{{createText("trainerAddress","trainerAddress","TrainerAddress")}}
</div><div class="col-lg-6">{{createText("trainerEmail","trainerEmail","TrainerEmail")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>