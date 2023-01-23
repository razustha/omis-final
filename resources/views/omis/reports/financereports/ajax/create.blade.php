
                <form >
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("applicants_id","applicants_id","Applicants Id")}}
</div><div class="col-lg-6">{{createText("company_id","company_id","Company Id")}}
</div><div class="col-lg-6">{{createText("jobRole","jobRole","JobRole")}}
</div><div class="col-lg-6">{{createText("applicantsDepartment","applicantsDepartment","ApplicantsDepartment")}}
</div><div class="col-lg-6">{{createText("reportBy","reportBy","ReportBy")}}
</div><div class="col-lg-6">{{createText("issueDate","issueDate","IssueDate")}}
</div><div class="col-lg-6">{{createText("reportDescription","reportDescription","ReportDescription")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>