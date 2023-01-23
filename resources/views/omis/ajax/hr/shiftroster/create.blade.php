
                <form method="POST" action="{{route('hr.shiftroster.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("rosterName_id","rosterName_id","RosterName Id")}}
</div><div class="col-lg-6">{{createText("shiftFromDate","shiftFromDate","ShiftFromDate")}}
</div><div class="col-lg-6">{{createText("shiftToDate","shiftToDate","ShiftToDate")}}
</div><div class="col-lg-6">{{createText("shift","shift","Shift")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>