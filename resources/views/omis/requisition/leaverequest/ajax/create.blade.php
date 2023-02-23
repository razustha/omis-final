<form action="{{route('requisition.leaverequest.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("leaveType","leaveType","Leave Type")}}
</div><div class="col-lg-6">{{createText("company_id","company_id","Company")}}
</div><div class="col-lg-6">{{createText("departmentType","departmentType","Department Type")}}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_department","department_id","departmentName",'','','Department') !!}
</div><div class="col-lg-6">{{createDate("startDate","startDate","Start Date")}}
</div><div class="col-lg-6">{{createDate("endDate","endDate","End Date")}}
</div><div class="col-lg-6">{{createText("totalDays","totalDays","Total Days")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>