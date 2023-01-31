
                <form action="{{route('recruit.jobapplication.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("applyJobTitle","applyJobTitle","Job Title")}}
</div><div class="col-lg-6">{{createText("applicantsName","applicantsName","Applicants Name")}}
</div><div class="col-lg-6">{{createText("applyedDepartmentName","applyedDepartmentName","Applied Department Name")}}
</div><div class="col-lg-6">{{createText("workingExperience","workingExperience","Working Experience")}}
</div><div class="col-lg-6">{{createText("previousWorkingCompanyName","previousWorkingCompanyName","Previous Working Company Name")}}
</div><div class="col-lg-6">{{createDate("applyDate","applyDate","Apply Date")}}
</div><div class="col-lg-6">{{createText("recommendedBy","recommendedBy","Recommended By")}}
</div><div class="col-lg-6">{{createText("portfolio","portfolio","Portfolio")}}
</div><div class="col-lg-4">{{createText("fullTime","fullTime","Full Time")}}
</div><div class="col-lg-4">{{createText("partTime","partTime","Part Time")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>