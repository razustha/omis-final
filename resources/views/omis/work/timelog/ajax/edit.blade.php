
        <form action="{{route('work.timelog.update',[$data->timelog_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("projectName","projectName","Project Name",'',$data->projectName)}}
</div><div class="col-lg-6">{{createText("projectTask","projectTask","Project Task",'',$data->projectTask)}}
</div><div class="col-lg-6">{{createText("projectEstimateTime","projectEstimateTime","Project Estimate Time",'',$data->projectEstimateTime)}}
</div><div class="col-lg-6">{{createDate("projectStartDate","projectStartDate","Start Date",'',$data->projectStartDate)}}
</div><div class="col-lg-6">{{createDate("projectEndDate","projectEndDate","End Date",'',$data->projectEndDate)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>