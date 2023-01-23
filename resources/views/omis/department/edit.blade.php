<form method="POST" action="update" enctype="multipart/form-data">
{{createText("department_id","department_id","Department Id")}}
{{createText("department_name","department_name","Department Name")}}
{{createText("created_on","created_on","Created On")}}
{{createText("created_by","created_by","Created By")}}
{{createText("remarks","remarks","Remarks")}}
{{createText("status","status","Status")}}
<?php createButton("btn-primary","","Submit"); ?>
 </form>
