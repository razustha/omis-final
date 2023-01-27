
                <form action="{{route('hr.leaveapplication.store')}}" id="storeCustomForm">
 @csrf
<div class="row"><div class="col-lg-6">{{customCreateSelect("leaveType","leaveType",'',"leaveType",['sick'=>'Sick','paid'=>'Paid'])}}
</div><div class="col-lg-6">{{ createDate('leaveStart', 'leaveStart', 'Leave Start') }}
</div><div class="col-lg-6">{{createDate("leaveEnd","leaveEnd","Leave End")}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>
