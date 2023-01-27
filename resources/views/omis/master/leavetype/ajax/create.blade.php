                <form action="{{route('master.leavetype.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("leaveType","leaveType","LeaveType")}}
</div><div class="col-lg-6">{{customCreateSelect("leavePaidStatus","leavePaidStatus",'',"Leave Paid Status",['Paid','Unpaid'])}}
</div><div class="col-lg-6">{{createText("numberOfLeave","numberOfLeave","NumberOfLeave")}}
</div><div class="col-lg-6">{{createText("monthlyLimit","monthlyLimit","MonthlyLimit")}}
</div><div class="col-lg-4">{{createText("colorCode","colorCode","ColorCode")}}
</div><div class="col-lg-4">{{createText("assignEmployee","assignEmployee","AssignEmployee")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-from-label','Remarks')}}{{createTextArea("remarks",'',"remarks",'',"")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>