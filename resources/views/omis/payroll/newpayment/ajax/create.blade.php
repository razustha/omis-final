
                <form >
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("employeeAccountNumber","employeeAccountNumber","EmployeeAccountNumber")}}
</div><div class="col-lg-6">{{createText("employeeName","employeeName","EmployeeName")}}
</div><div class="col-lg-6">{{createText("paidDate","paidDate","PaidDate")}}
</div><div class="col-lg-6">{{createText("paidAmount","paidAmount","PaidAmount")}}
</div><div class="col-lg-6">{{createText("paymentMethod","paymentMethod","PaymentMethod")}}
</div><div class="col-lg-6">{{createText("selectDepartment","selectDepartment","SelectDepartment")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>