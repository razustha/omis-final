<form action="{{route('reports.expensesreports.update',[$data->expensesReports_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("applicant_id","applicant_id","Applicant",'',$data->applicant_id)}}
</div><div class="col-lg-6">{{createText("expensesReportBy","expensesReportBy","Expenses Report By",'',$data->expensesReportBy)}}
</div><div class="col-lg-4">{{createText("totalExpenses","totalExpenses","Total Expenses",'',$data->totalExpenses)}}
</div><div class="col-lg-4">{{createText("issueDate","issueDate","Issue Date",'',$data->issueDate)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createLabel('expensesDescription','form-label col-form-label','Description')}}{{createTextArea("expensesDesciption","expensesDesciption","ExpensesDesciption",'',$data->expensesDesciption)}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>