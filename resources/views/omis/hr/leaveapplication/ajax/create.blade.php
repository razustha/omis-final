<form action="{{route('hr.leaveapplication.store')}}" id="storeCustomForm">
 @csrf 
<div class="row">
    
    <h4>{{ auth()->user()->name }}</h4>
    
    {{createHidden("employee_id",'employee_id','',"employee_id",auth()->user()->id)}}
    <div class="col-lg-6">{{customCreateSelect("leaveType","leaveType",'',"leaveType",['sick'=>'Sick','paid'=>'Paid'])}}
</div><div class="col-lg-6">{{createDate("leaveStart","leaveStart","LeaveStart")}}
</div><div class="col-lg-6">{{createDate("leaveEnd","leaveEnd","LeaveEnd")}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>