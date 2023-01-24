<form action="{{route('payroll.newpayment.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("employeeAccountNumber","employeeAccountNumber","Employee Account Number")}}
</div><div class="col-lg-6">{{createText("employeeName","employeeName","Employee Name")}}
</div><div class="col-lg-6">{{createDate("paidDate","paidDate","Paid Date")}}
</div><div class="col-lg-6">{{createText("paidAmount","paidAmount","Paid Amount")}}
</div><div class="col-lg-4">{{createText("paymentMethod","paymentMethod","Payment Method")}}
</div><div class="col-lg-4">{{createText("selectDepartment","selectDepartment","Select Department")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>