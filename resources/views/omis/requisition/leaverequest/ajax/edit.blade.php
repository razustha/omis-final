<form action="{{route('requisition.leaverequest.update',[$data->leaverequest_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("leaveType","leaveType","Leave Type",'',$data->leaveType)}}
</div><div class="col-lg-6">{{createText("company_id","company_id","Company",'',$data->company_id)}}
</div><div class="col-lg-6">{{createText("departmentType","departmentType","Department Type",'',$data->departmentType)}}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_department","department_id","departmentName",'',$data,'Department') !!}
</div><div class="col-lg-6">{{createDate("startDate","startDate","Start Date",'',$data->startDate)}}
</div><div class="col-lg-6">{{createDate("endDate","endDate","End Date",'',$data->endDate)}}
</div><div class="col-lg-6">{{createText("totalDays","totalDays","Total Days",'',$data->totalDays)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>