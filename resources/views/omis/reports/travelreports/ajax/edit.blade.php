<form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("title","title","Title",'',$data->title)}}
</div><div class="col-lg-6">{{createText("fullName","fullName","FullName",'',$data->fullName)}}
</div><div class="col-lg-6">{{createText("departmentSector","departmentSector","DepartmentSector",'',$data->departmentSector)}}
</div><div class="col-lg-6">{{createText("visitedLocation","visitedLocation","VisitedLocation",'',$data->visitedLocation)}}
</div><div class="col-lg-6">{{createText("visitedDate","visitedDate","VisitedDate",'',$data->visitedDate)}}
</div><div class="col-lg-6">{{createText("activities","activities","Activities",'',$data->activities)}}
</div><div class="col-lg-6">{{createText("visitObjectives","visitObjectives","VisitObjectives",'',$data->visitObjectives)}}
</div><div class="col-lg-6">{{createText("keyHighlights","keyHighlights","KeyHighlights",'',$data->keyHighlights)}}
</div><div class="col-lg-6">{{createText("achievement","achievement","Achievement",'',$data->achievement)}}
</div><div class="col-lg-6">{{createText("observation","observation","Observation",'',$data->observation)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>