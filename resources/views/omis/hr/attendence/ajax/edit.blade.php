
        <form action="{{route('hr.attendence.update',[$data->attendence_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("employeePosition","employeePosition","EmployeePosition",'',$data->employeePosition)}}
</div><div class="col-lg-6">{{createDate("todayDate","todayDate","TodayDate",'',$data->todayDate)}}
</div><div class="col-lg-6">{{createText("timePicker1","timePicker1","TimePicker1",'',$data->timePicker1)}}
</div><div class="col-lg-6">{{createText("timePicker2","timePicker2","TimePicker2",'',$data->timePicker2)}}
</div><div class="col-lg-12">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>