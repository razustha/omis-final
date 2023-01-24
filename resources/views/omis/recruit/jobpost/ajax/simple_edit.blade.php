
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("jobTitle","jobTitle","JobTitle",'',$data->jobTitle)}}
</div><div class="col-lg-6">{{createText("jobType","jobType","JobType",'',$data->jobType)}}
</div><div class="col-lg-6">{{createText("vacancyNumber","vacancyNumber","VacancyNumber",'',$data->vacancyNumber)}}
</div><div class="col-lg-6">{{createText("closingDate","closingDate","ClosingDate",'',$data->closingDate)}}
</div><div class="col-lg-6">{{createText("jobCategory","jobCategory","JobCategory",'',$data->jobCategory)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>