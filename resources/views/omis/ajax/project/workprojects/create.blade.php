
                <form method="POST" action="{{route('project.workprojects.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("projectTitle","projectTitle","ProjectTitle")}}
</div><div class="col-lg-6">{{createText("projectStartClient","projectStartClient","ProjectStartClient")}}
</div><div class="col-lg-6">{{createText("projectStartDate","projectStartDate","ProjectStartDate")}}
</div><div class="col-lg-6">{{createText("projectEndDate","projectEndDate","ProjectEndDate")}}
</div><div class="col-lg-6">{{createText("projectPriority","projectPriority","ProjectPriority")}}
</div><div class="col-lg-6">{{createText("companyName_id","companyName_id","CompanyName Id")}}
</div><div class="col-lg-6">{{createText("assignedEmployees","assignedEmployees","AssignedEmployees")}}
</div><div class="col-lg-6">{{createText("projectDescription","projectDescription","ProjectDescription")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>