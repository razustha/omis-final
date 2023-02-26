
        <form action="{{route('inventory.service.update',[$data->service_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("serviceName","serviceName","Service Name",'',$data->serviceName)}}
</div><div class="col-lg-6">{{createText("serviceType_id","serviceType_id","Service Type",'',$data->serviceType_id)}}
</div><div class="col-lg-4">{{createDate("issueDate","issueDate","Issue Date",'',$data->issueDate)}}
</div><div class="col-lg-4">{{createDate("serviceExpireDate","serviceExpireDate","Service Expire Date",'',$data->serviceExpireDate)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>