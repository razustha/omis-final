
                <form >
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("applicant_id","applicant_id","Applicant Id")}}
</div><div class="col-lg-6">{{createText("expensesDesciption","expensesDesciption","ExpensesDesciption")}}
</div><div class="col-lg-6">{{createText("expensesReportBy","expensesReportBy","ExpensesReportBy")}}
</div><div class="col-lg-6">{{createText("totalExpenses","totalExpenses","TotalExpenses")}}
</div><div class="col-lg-6">{{createText("issueDate","issueDate","IssueDate")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>