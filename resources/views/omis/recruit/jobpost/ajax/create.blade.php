
                <form >
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("jobTitle","jobTitle","JobTitle")}}
</div><div class="col-lg-6">{{createText("jobType","jobType","JobType")}}
</div><div class="col-lg-6">{{createText("vacancyNumber","vacancyNumber","VacancyNumber")}}
</div><div class="col-lg-6">{{createText("closingDate","closingDate","ClosingDate")}}
</div><div class="col-lg-6">{{createText("jobCategory","jobCategory","JobCategory")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>