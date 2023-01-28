
        <form action="{{route('recruit.recuritreports.update',[$data->recuritreports_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("departmentName","departmentName","Department Name",'',$data->departmentName)}}
</div><div class="col-lg-6">{{createText("totalNumberOfApplication","totalNumberOfApplication","Total Number Of Application",'',$data->totalNumberOfApplication)}}
</div><div class="col-lg-6">{{createText("applicantsId","applicantsId","Applicants Id",'',$data->applicantsId)}}
</div><div class="col-lg-6">{{createText("gender","gender","Gender",'',$data->gender)}}
</div><div class="col-lg-4">{{createText("designation","designation","Designation",'',$data->designation)}}
</div><div class="col-lg-4">{{createDate("applicantsAppliedDate","applicantsAppliedDate","Applicants Applied Date",'',$data->applicantsAppliedDate)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>