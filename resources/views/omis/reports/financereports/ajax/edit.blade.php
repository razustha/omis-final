<form action="{{route('reports.financereports.update',[$data->financeReports_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("applicants_id","applicants_id","Applicants",'',$data->applicants_id)}}
</div><div class="col-lg-6">{{createText("company_id","company_id","Company",'',$data->company_id)}}
</div><div class="col-lg-6">{{createText("jobRole","jobRole","Job Role",'',$data->jobRole)}}
</div><div class="col-lg-6">{{createText("applicantsDepartment","applicantsDepartment","Applicants Department",'',$data->applicantsDepartment)}}
</div><div class="col-lg-4">{{createText("reportBy","reportBy","Report By",'',$data->reportBy)}}
</div><div class="col-lg-4">{{createDate("issueDate","issueDate","Issue Date",'',$data->issueDate)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createLabel('reprotDescription','form-label col-form-label','Description')}}{{createTextArea("reportDescription","reportDescription","ReportDescription",'',$data->reportDescription)}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>