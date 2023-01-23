<form method="POST" action="{{route('hr.employee.update',[$data->employee_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("employeeFirstName","employeeFirstName","EmployeeFirstName",'',$data->employeeFirstName)}}
</div><div class="col-lg-6">{{createText("employeeMiddleName","employeeMiddleName","EmployeeMiddleName",'',$data->employeeMiddleName)}}
</div><div class="col-lg-6">{{createText("employeeLastName","employeeLastName","EmployeeLastName",'',$data->employeeLastName)}}
</div><div class="col-lg-6">{{createText("phone","phone","Phone",'',$data->phone)}}
</div><div class="col-lg-6">{{createText("email","email","Email",'',$data->email)}}
</div><div class="col-lg-6">{{createText("employeeRole","employeeRole","EmployeeRole",'',$data->employeeRole)}}
</div><div class="col-lg-6">{{createText("employeeSalary","employeeSalary","EmployeeSalary",'',$data->employeeSalary)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>