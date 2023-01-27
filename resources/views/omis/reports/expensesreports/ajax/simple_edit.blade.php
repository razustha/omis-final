
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("applicant_id","applicant_id","Applicant Id",'',$data->applicant_id)}}
</div><div class="col-lg-6">{{createText("expensesDesciption","expensesDesciption","ExpensesDesciption",'',$data->expensesDesciption)}}
</div><div class="col-lg-6">{{createText("expensesReportBy","expensesReportBy","ExpensesReportBy",'',$data->expensesReportBy)}}
</div><div class="col-lg-6">{{createText("totalExpenses","totalExpenses","TotalExpenses",'',$data->totalExpenses)}}
</div><div class="col-lg-6">{{createText("issueDate","issueDate","IssueDate",'',$data->issueDate)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>