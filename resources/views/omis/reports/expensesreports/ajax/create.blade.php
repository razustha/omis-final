<form action="{{route('reports.expensesreports.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("applicant_id","applicant_id","Applicant")}}
</div><div class="col-lg-6">{{createText("expensesReportBy","expensesReportBy","Expenses Report By")}}
</div><div class="col-lg-4">{{createText("totalExpenses","totalExpenses","Total Expenses")}}
</div><div class="col-lg-4">{{createDate("issueDate","issueDate","Issue Date")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createLabel('expensesDescription','form-label col-form-label','Description')}}{{createTextArea("expensesDesciption","expensesDesciption","ExpensesDesciption","","")}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>