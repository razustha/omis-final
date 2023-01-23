
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("warningTo","warningTo","WarningTo",'',$data->warningTo)}}
</div><div class="col-lg-6">{{createText("warningSubject","warningSubject","WarningSubject",'',$data->warningSubject)}}
</div><div class="col-lg-6">{{createText("warningDate","warningDate","WarningDate",'',$data->warningDate)}}
</div><div class="col-lg-6">{{createText("warningType_id","warningType_id","WarningType Id",'',$data->warningType_id)}}
</div><div class="col-lg-6">{{createText("warningDescription","warningDescription","WarningDescription",'',$data->warningDescription)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>