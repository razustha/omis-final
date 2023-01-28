
                <form action="{{route('recruit.recuritreports.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("departmentName","departmentName","Department Name")}}
</div><div class="col-lg-6">{{createText("totalNumberOfApplication","totalNumberOfApplication","Total Number Of Application")}}
</div><div class="col-lg-6">{{createText("applicantsId","applicantsId","Applicants Id")}}
</div><div class="col-lg-6">{{createText("gender","gender","Gender")}}
</div><div class="col-lg-4">{{createText("designation","designation","Designation")}}
</div><div class="col-lg-4">{{createDate("applicantsAppliedDate","applicantsAppliedDate","Applicants Applied Date")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>