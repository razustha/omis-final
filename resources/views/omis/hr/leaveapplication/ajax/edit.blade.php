<form action="{{route('hr.leaveapplication.update',[$data->leaveApplication_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("leaveRequestedBy","leaveRequestedBy","LeaveRequestedBy",'',$data->leaveRequestedBy)}}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_employee","employee_id","employee_id",'',$data) !!}
</div><div class="col-lg-6">{{createText("chooseDepartment_id","chooseDepartment_id","ChooseDepartment Id",'',$data->chooseDepartment_id)}}
</div><div class="col-lg-6">{{createText("leaveType","leaveType","LeaveType",'',$data->leaveType)}}
</div><div class="col-lg-6">{{createText("leaveStart","leaveStart","LeaveStart",'',$data->leaveStart)}}
</div><div class="col-lg-6">{{createText("leaveEnd","leaveEnd","LeaveEnd",'',$data->leaveEnd)}}
</div><div class="col-lg-6">{{createText("leaveApprovalBy","leaveApprovalBy","LeaveApprovalBy",'',$data->leaveApprovalBy)}}
</div><div class="col-lg-6">{{createDate("leaveApprovedDate","leaveApprovedDate","LeaveApprovedDate",'',$data->leaveApprovedDate)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("leaveApplication_status","leaveApplication_status","LeaveApplication Status",'',$data->leaveApplication_status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>