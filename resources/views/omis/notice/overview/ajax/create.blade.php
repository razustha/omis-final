
                <form action="{{route('notice.overview.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("overviewFor","overviewFor","Overview For")}}
</div><div class="col-lg-6">{{createText("overviewBy","overviewBy","Overview By")}}
</div><div class="col-lg-6">{{createDate("overviewDate","overviewDate","Overview Date")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createLabel('overviewDescription','form-label col-form-label','Description')}}{{createTextArea("overviewDescription","overviewDescription","OverviewDescription","","")}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>