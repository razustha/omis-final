
                <form action="{{route('hr.transfer.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_employee","employee_id","firstName",'') !!}
</div><div class="col-lg-6">{{createDate("dateOfTransfer","dateOfTransfer","Date Of Transfer")}}
</div><div class="col-lg-6">{{createText("employeeName_id","employeeName_id","Employee Id")}}
</div><div class="col-lg-6">{{createText("fromDepartment","fromDepartment","From Department")}}
</div><div class="col-lg-6">{{createText("toDepartment","toDepartment","To Department")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createLabel('description','form-label col-form-label','Description')}}{{createTextArea("description","description","description","","")}}

</div><div class="col-lg-6">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks", "", "")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>