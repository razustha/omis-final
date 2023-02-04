
        <form action="{{route('superadmin.package.update',[$data->package_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("name","name","Name",'',$data->name)}}
</div><div class="col-lg-6">{{createText("price","price","Price",'',$data->price)}}
</div><div class="col-lg-4">{{createText("feature","feature","Feature",'',$data->feature)}}
</div><div class="col-lg-4">{{createText("duration","duration","Duration",'',$data->duration)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
<!-- </div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}} -->
</div>  
</div><div class="col-lg-12">{{createLabel('description','form-label col-form-label','Description')}}{{createTextArea("description","description","Description",'',$data->description)}}


<div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>