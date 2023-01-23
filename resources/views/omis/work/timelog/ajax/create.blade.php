
                <form >
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("projectName","projectName","ProjectName")}}
</div><div class="col-lg-6">{{createText("projectTask","projectTask","ProjectTask")}}
</div><div class="col-lg-6">{{createText("projectEstimateTime","projectEstimateTime","ProjectEstimateTime")}}
</div><div class="col-lg-6">{{createText("projectStartDate","projectStartDate","ProjectStartDate")}}
</div><div class="col-lg-6">{{createText("projectEndDate","projectEndDate","ProjectEndDate")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>