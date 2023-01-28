
                <form action="{{route('officemanagement.generatorlogbook.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("logbookTitle","logbookTitle","Logbook Title")}}
</div><div class="col-lg-6">{{createText("subTitle","subTitle","Sub Title")}}
</div><div class="col-lg-6">{{createText("pageNumber","pageNumber","Page Number")}}
</div><div class="col-lg-6">{{createDate("checkedDate","checkedDate","Checked Date")}}
</div><div class="col-lg-6">{{createText("fullName","fullName","Full Name")}}
</div><div class="col-lg-6">{{createText("purpose","purpose","Purpose")}}
</div><div class="col-lg-6">{{createText("from","from","From")}}
</div><div class="col-lg-6">{{createText("to","to","To")}}
</div><div class="col-lg-6">{{createText("totalTime","totalTime","Total Time")}}
</div><div class="col-lg-6">{{createText("dieselConsumed","dieselConsumed","Diesel Consumed")}}
</div><div class="col-lg-4">{{createText("mobileConsume","mobileConsume","Mobile Consume")}}
</div><div class="col-lg-4">{{createDate("servicingDate","servicingDate","Servicing Date")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>