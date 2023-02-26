
        <form action="{{route('hr.transfer.update',[$data->transfer_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{  customCreateSelect('employee_id', 'employee_id', '','Employee', getEmployees()->pluck('full_name','employee_id')->toArray())  }}
</div><div class="col-lg-6">{{createDate("dateOfTransfer","dateOfTransfer","Date Of Transfer",'',$data->dateOfTransfer)}}
</div>
<!-- <div class="col-lg-6">{{createText("employeeName_id","employeeName_id","Employee Id",'',$data->employeeName_id)}}
</div> -->
<div class="col-lg-6">{{createText("fromDepartment","fromDepartment","From Department",'',$data->fromDepartment)}}
</div><div class="col-lg-6">{{createText("toDepartment","toDepartment","To Department",'',$data->toDepartment)}}
</div><div class="col-lg-12">{{createLabel('description','form-label col-form-label', 'Description')}}{{createTextArea("description","description","description",'',$data->description)}}

</div><div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks",'',$data->remarks)}}
</div><div class="col-lg-12">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>