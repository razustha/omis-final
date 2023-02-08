
                <form action="{{route('hr.shiftroster.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("rosterName_id","rosterName_id","Roster Id")}}
</div><div class="col-lg-6">{{createText("shift","shift","Shift")}}


</div><div class="col-lg-4">{{createDate("shiftFromDate","shiftFromDate","Shift From Date")}}
</div><div class="col-lg-4">{{createDate("shiftToDate","shiftToDate","Shift To Date")}}

</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks", "", "")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>