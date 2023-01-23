<form method="POST" action="{{route('hr.shiftroster.update',[$data->shiftroster_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("rosterName_id","rosterName_id","RosterName Id",'',$data->rosterName_id)}}
</div><div class="col-lg-6">{{createText("shiftFromDate","shiftFromDate","ShiftFromDate",'',$data->shiftFromDate)}}
</div><div class="col-lg-6">{{createText("shiftToDate","shiftToDate","ShiftToDate",'',$data->shiftToDate)}}
</div><div class="col-lg-6">{{createText("shift","shift","Shift",'',$data->shift)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>