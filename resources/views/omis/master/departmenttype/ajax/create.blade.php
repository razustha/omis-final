
                <form action="{{route('master.departmenttype.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("departmentParent_id","departmentParent_id","DepartmentParent Id")}}
</div><div class="col-lg-6">{{createText("departmentName","departmentName","DepartmentName")}}
</div><div class="col-lg-6">{{createText("jobTitle","jobTitle","JobTitle")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>