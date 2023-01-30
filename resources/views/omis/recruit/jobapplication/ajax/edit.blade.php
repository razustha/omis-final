
        <form action="{{route('recruit.jobapplication.update',[$data->jobapplication_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("applyJobTitle","applyJobTitle","JobTitle",'',$data->applyJobTitle)}}
</div><div class="col-lg-6">{{createText("applicantsName","applicantsName","Applicants Name",'',$data->applicantsName)}}
</div><div class="col-lg-6">{{createText("applyedDepartmentName","applyedDepartmentName","Applied Department Name",'',$data->applyedDepartmentName)}}
</div><div class="col-lg-6">{{createText("workingExperience","workingExperience","Working Experience",'',$data->workingExperience)}}
</div><div class="col-lg-6">{{createText("previousWorkingCompanyName","previous Working CompanyName","Previous Working Company Name",'',$data->previousWorkingCompanyName)}}
</div><div class="col-lg-6">{{createDate("applyDate","applyDate","Apply Date",'',$data->applyDate)}}
</div><div class="col-lg-6">{{createText("recommendedBy","recommendedBy","Recommended By",'',$data->recommendedBy)}}
</div><div class="col-lg-6">{{createText("portfolio","portfolio","Portfolio",'',$data->portfolio)}}
</div><div class="col-lg-4">{{createText("fullTime","fullTime","Full Time",'',$data->fullTime)}}
</div><div class="col-lg-4">{{createText("partTime","partTime","Part Time",'',$data->partTime)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>