
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("employeeAccountNumber","employeeAccountNumber","EmployeeAccountNumber",'',$data->employeeAccountNumber)}}
</div><div class="col-lg-6">{{createText("employeeName","employeeName","EmployeeName",'',$data->employeeName)}}
</div><div class="col-lg-6">{{createText("paidDate","paidDate","PaidDate",'',$data->paidDate)}}
</div><div class="col-lg-6">{{createText("paidAmount","paidAmount","PaidAmount",'',$data->paidAmount)}}
</div><div class="col-lg-6">{{createText("paymentMethod","paymentMethod","PaymentMethod",'',$data->paymentMethod)}}
</div><div class="col-lg-6">{{createText("selectDepartment","selectDepartment","SelectDepartment",'',$data->selectDepartment)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>