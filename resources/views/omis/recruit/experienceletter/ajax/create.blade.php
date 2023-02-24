
                <form action="{{route('recruit.experienceletter.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_employee","employee_id","employee_id",'','','Employee Name') !!}
</div><div class="col-lg-6">{{createText("designation","designation","Designation")}}
</div><div class="col-lg-6">{{createText("departmentName","departmentName","Department Name")}}
</div><div class="col-lg-6">{{createDate("joiningDate","joiningDate","Joining Date")}}
</div><div class="col-lg-6">{{createDate("leftDate","leftDate","Left Date")}}
</div><div class="col-lg-6">{{createText("letterIssueBy","letterIssueBy","Letter Issue By")}}
</div><div class="col-lg-6">{{createDate("letterIssueDate","letterIssueDate","Letter Issue Date")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createLabel('experienceDetails','form-label col-form-label','Details')}}{{createTextArea("experienceDetails","experienceDetails","Experience Details","","")}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>