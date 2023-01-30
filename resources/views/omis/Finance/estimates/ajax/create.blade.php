
                <form action="{{route('finance.estimates.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("departmentName","department Name","Department Name")}}
</div><div class="col-lg-6">{{createDate("estimateDate","estimateDate","Estimate Date")}}
</div><div class="col-lg-6">{{createText("totalEstimates","totalEstimates","Total Estimates")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createLabel('estimateDetails','form-label col-form-label','Details')}}{{createTextArea("estimateDetails","estimateDetails","EstimateDetails","","")}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>