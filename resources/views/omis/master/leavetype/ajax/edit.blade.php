        <form action="{{route('master.leavetype.update',[$data->leavetype_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("leaveType","leaveType","LeaveType",'',$data->leaveType)}}
</div><div class="col-lg-6">{{customCreateSelect("leavePaidStatus","leavePaidStatus",'',"Leave Paid Status",['Paid','Unpaid'],$data->status)}}
</div><div class="col-lg-6">{{createText("numberOfLeave","numberOfLeave","NumberOfLeave",'',$data->numberOfLeave)}}
</div><div class="col-lg-6">{{createText("monthlyLimit","monthlyLimit","MonthlyLimit",'',$data->monthlyLimit)}}
</div><div class="col-lg-4">{{createText("colorCode","colorCode","ColorCode",'',$data->colorCode)}}
</div><div class="col-lg-4">{{createText("assignEmployee","assignEmployee","AssignEmployee",'',$data->assignEmployee)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-from-label','Remarks')}}{{createTextArea("remarks","remarks","remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>