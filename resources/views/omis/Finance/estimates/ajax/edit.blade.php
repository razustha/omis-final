
        <form action="{{route('finance.estimates.update',[$data->estimates_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("departmentName","departmentName","Department Name",'',$data->departmentName)}}
</div><div class="col-lg-6">{{createText("estimateDate","estimateDate","Estimate Date",'',$data->estimateDate)}}
</div><div class="col-lg-6">{{createText("totalEstimates","totalEstimates","Total Estimates",'',$data->totalEstimates)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createLabel('estimateDetails','form-label col-form-label','Details')}}{{createTextArea("estimateDetails","estimateDetails","Details",'',$data->estimateDetails)}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>