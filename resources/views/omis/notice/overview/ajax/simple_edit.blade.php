
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("overviewFor","overviewFor","OverviewFor",'',$data->overviewFor)}}
</div><div class="col-lg-6">{{createText("overviewBy","overviewBy","OverviewBy",'',$data->overviewBy)}}
</div><div class="col-lg-6">{{createText("overviewDate","overviewDate","OverviewDate",'',$data->overviewDate)}}
</div><div class="col-lg-6">{{createText("overviewDescription","overviewDescription","OverviewDescription",'',$data->overviewDescription)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>