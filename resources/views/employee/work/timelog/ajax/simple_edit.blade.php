
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("projectName","projectName","ProjectName",'',$data->projectName)}}
</div><div class="col-lg-6">{{createText("projectTask","projectTask","ProjectTask",'',$data->projectTask)}}
</div><div class="col-lg-6">{{createText("projectEstimateTime","projectEstimateTime","ProjectEstimateTime",'',$data->projectEstimateTime)}}
</div><div class="col-lg-6">{{createText("projectStartDate","projectStartDate","ProjectStartDate",'',$data->projectStartDate)}}
</div><div class="col-lg-6">{{createText("projectEndDate","projectEndDate","ProjectEndDate",'',$data->projectEndDate)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>