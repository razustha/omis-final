
        <form action="{{route('recruit.experienceletter.update',[$data->experienceletter_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_employee","employee_id","employee_id",'',$data,'Employee Name') !!}
</div><div class="col-lg-6">{{createText("designation","designation","Designation",'',$data->designation)}}
</div><div class="col-lg-6">{{createText("departmentName","departmentName","Department Name",'',$data->departmentName)}}
</div><div class="col-lg-6">{{createDate("joiningDate","joiningDate","Joining Date",'',$data->joiningDate)}}
</div><div class="col-lg-6">{{createDate("leftDate","leftDate","Left Date",'',$data->leftDate)}}
</div><div class="col-lg-6">{{createText("letterIssueBy","letterIssueBy","Letter Issue By",'',$data->letterIssueBy)}}
</div><div class="col-lg-6">{{createDate("letterIssueDate","letterIssueDate","LetterIssueDate",'',$data->letterIssueDate)}}

</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createLabel('experienceDetails','form-label col-form-label','Remarks')}}{{createTextArea("experienceDetails","experienceDetails","ExperienceDetails",'',$data->experienceDetails)}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>