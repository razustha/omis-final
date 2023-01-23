
                <form method="POST" action="{{route('hr.employee.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("employeeFirstName","employeeFirstName","EmployeeFirstName")}}
</div><div class="col-lg-6">{{createText("employeeMiddleName","employeeMiddleName","EmployeeMiddleName")}}
</div><div class="col-lg-6">{{createText("employeeLastName","employeeLastName","EmployeeLastName")}}
</div><div class="col-lg-6">{{createText("phone","phone","Phone")}}
</div><div class="col-lg-6">{{createText("email","email","Email")}}
</div><div class="col-lg-6">{{createText("employeeRole","employeeRole","EmployeeRole")}}
</div><div class="col-lg-6">{{createText("employeeSalary","employeeSalary","EmployeeSalary")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>