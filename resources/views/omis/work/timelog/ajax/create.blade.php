
                <form action="{{route('work.timelog.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("projectName","projectName","Project Name")}}
</div><div class="col-lg-6">{{createText("projectTask","projectTask","Project Task")}}
</div><div class="col-lg-6">{{createText("projectEstimateTime","projectEstimateTime","Estimate Time")}}
</div><div class="col-lg-6">{{createDate("projectStartDate","projectStartDate","Start Date")}}
</div><div class="col-lg-6">{{createDate("projectEndDate","projectEndDate","End Date")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>