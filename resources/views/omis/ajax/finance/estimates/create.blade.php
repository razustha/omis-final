
                <form method="POST" action="{{route('finance.estimates.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("departmentName","departmentName","DepartmentName")}}
</div><div class="col-lg-6">{{createText("estimateDate","estimateDate","EstimateDate")}}
</div><div class="col-lg-6">{{createText("estimateDetails","estimateDetails","EstimateDetails")}}
</div><div class="col-lg-6">{{createText("totalEstimates","totalEstimates","TotalEstimates")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>