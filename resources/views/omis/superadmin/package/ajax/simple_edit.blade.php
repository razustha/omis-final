
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("name","name","Name",'',$data->name)}}
</div><div class="col-lg-6">{{createText("price","price","Price",'',$data->price)}}
</div><div class="col-lg-6">{{createText("description","description","Description",'',$data->description)}}
</div><div class="col-lg-6">{{createText("feature","feature","Feature",'',$data->feature)}}
</div><div class="col-lg-6">{{createText("duration","duration","Duration",'',$data->duration)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>