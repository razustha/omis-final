
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("applyJobTitle","applyJobTitle","ApplyJobTitle",'',$data->applyJobTitle)}}
</div><div class="col-lg-6">{{createText("applicantsName","applicantsName","ApplicantsName",'',$data->applicantsName)}}
</div><div class="col-lg-6">{{createText("applyedDepartmentName","applyedDepartmentName","ApplyedDepartmentName",'',$data->applyedDepartmentName)}}
</div><div class="col-lg-6">{{createText("workingExperience","workingExperience","WorkingExperience",'',$data->workingExperience)}}
</div><div class="col-lg-6">{{createText("previousWorkingCompanyName","previousWorkingCompanyName","PreviousWorkingCompanyName",'',$data->previousWorkingCompanyName)}}
</div><div class="col-lg-6">{{createText("applyDate","applyDate","ApplyDate",'',$data->applyDate)}}
</div><div class="col-lg-6">{{createText("recommendedBy","recommendedBy","RecommendedBy",'',$data->recommendedBy)}}
</div><div class="col-lg-6">{{createText("portfolio","portfolio","Portfolio",'',$data->portfolio)}}
</div><div class="col-lg-6">{{createText("fullTime","fullTime","FullTime",'',$data->fullTime)}}
</div><div class="col-lg-6">{{createText("partTime","partTime","PartTime",'',$data->partTime)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>