
                <form action="{{route('hr.leaveapplication.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("leaveRequestedBy","leaveRequestedBy","LeaveRequestedBy")}}
</div><div class="col-lg-6">{{createText("employeeNumber","employeeNumber","EmployeeNumber")}}
</div><div class="col-lg-6">{{createText("chooseDepartment_id","chooseDepartment_id","ChooseDepartment Id")}}
</div><div class="col-lg-6">{{createText("leaveType","leaveType","LeaveType")}}
</div><div class="col-lg-6">{{createDate("leaveStart","leaveStart","LeaveStart")}}
</div><div class="col-lg-6">{{createDate("leaveEnd","leaveEnd","LeaveEnd")}}
</div><div class="col-lg-4">{{createText("leaveApprovalBy","leaveApprovalBy","LeaveApprovalBy")}}
</div><div class="col-lg-4">{{createDate("leaveApprovedDate","leaveApprovedDate","LeaveApprovedDate")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks", "", "")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>