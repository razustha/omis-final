
                <form >
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("title","title","Title")}}
</div><div class="col-lg-6">{{createText("fullName","fullName","FullName")}}
</div><div class="col-lg-6">{{createText("departmentSector","departmentSector","DepartmentSector")}}
</div><div class="col-lg-6">{{createText("visitedLocation","visitedLocation","VisitedLocation")}}
</div><div class="col-lg-6">{{createText("visitedDate","visitedDate","VisitedDate")}}
</div><div class="col-lg-6">{{createText("activities","activities","Activities")}}
</div><div class="col-lg-6">{{createText("visitObjectives","visitObjectives","VisitObjectives")}}
</div><div class="col-lg-6">{{createText("keyHighlights","keyHighlights","KeyHighlights")}}
</div><div class="col-lg-6">{{createText("achievement","achievement","Achievement")}}
</div><div class="col-lg-6">{{createText("observation","observation","Observation")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>