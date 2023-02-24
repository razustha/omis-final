<form action="{{route('reports.financereports.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("applicants_id","applicants_id","Applicants")}}
</div><div class="col-lg-6">{{createText("company_id","company_id","Company")}}
</div><div class="col-lg-6">{{createText("jobRole","jobRole","Job Role")}}
</div><div class="col-lg-6">{{createText("applicantsDepartment","applicantsDepartment","Applicants Department")}}
</div><div class="col-lg-4">{{createText("reportBy","reportBy","Report By")}}
</div><div class="col-lg-4">{{createDate("issueDate","issueDate","Issue Date")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createLabel('reportDescription','form-label col-form-label','Description')}}{{createTextArea("reportDescription","reportDescription","ReportDescription","","")}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>