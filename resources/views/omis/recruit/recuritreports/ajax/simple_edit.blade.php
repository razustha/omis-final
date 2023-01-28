
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("departmentName","departmentName","DepartmentName",'',$data->departmentName)}}
</div><div class="col-lg-6">{{createText("totalNumberOfApplication","totalNumberOfApplication","TotalNumberOfApplication",'',$data->totalNumberOfApplication)}}
</div><div class="col-lg-6">{{createText("applicantsId","applicantsId","ApplicantsId",'',$data->applicantsId)}}
</div><div class="col-lg-6">{{createText("gender","gender","Gender",'',$data->gender)}}
</div><div class="col-lg-6">{{createText("designation","designation","Designation",'',$data->designation)}}
</div><div class="col-lg-6">{{createText("applicantsAppliedDate","applicantsAppliedDate","ApplicantsAppliedDate",'',$data->applicantsAppliedDate)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>