
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("leavePaidStatus","leavePaidStatus","LeavePaidStatus",'',$data->leavePaidStatus)}}
</div><div class="col-lg-6">{{createText("numberOfLeave","numberOfLeave","NumberOfLeave",'',$data->numberOfLeave)}}
</div><div class="col-lg-6">{{createText("monthlyLimit","monthlyLimit","MonthlyLimit",'',$data->monthlyLimit)}}
</div><div class="col-lg-6">{{createText("colorCode","colorCode","ColorCode",'',$data->colorCode)}}
</div><div class="col-lg-6">{{createText("assignEmployee","assignEmployee","AssignEmployee",'',$data->assignEmployee)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>