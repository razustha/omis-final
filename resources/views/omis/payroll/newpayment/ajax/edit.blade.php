<form action="{{route('payroll.newpayment.update',[$data->newpayment_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("employeeAccountNumber","employeeAccountNumber","Employee Account Number",'',$data->employeeAccountNumber)}}
</div><div class="col-lg-6">{{createText("employeeName","employeeName","Employee Name",'',$data->employeeName)}}
</div><div class="col-lg-6">{{createText("paidDate","paidDate","Paid Date",'',$data->paidDate)}}
</div><div class="col-lg-6">{{createText("paidAmount","paidAmount","Paid Amount",'',$data->paidAmount)}}
</div><div class="col-lg-4">{{createText("paymentMethod","paymentMethod","Payment Method",'',$data->paymentMethod)}}
</div><div class="col-lg-4">{{createText("selectDepartment","selectDepartment","Select Department",'',$data->selectDepartment)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>