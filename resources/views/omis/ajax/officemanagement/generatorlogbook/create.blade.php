
                <form method="POST" action="{{route('officemanagement.generatorlogbook.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("logbookTitle","logbookTitle","LogbookTitle")}}
</div><div class="col-lg-6">{{createText("subTitle","subTitle","SubTitle")}}
</div><div class="col-lg-6">{{createText("pageNumber","pageNumber","PageNumber")}}
</div><div class="col-lg-6">{{createText("checkedDate","checkedDate","CheckedDate")}}
</div><div class="col-lg-6">{{createText("fullName","fullName","FullName")}}
</div><div class="col-lg-6">{{createText("purpose","purpose","Purpose")}}
</div><div class="col-lg-6">{{createText("from","from","From")}}
</div><div class="col-lg-6">{{createText("to","to","To")}}
</div><div class="col-lg-6">{{createText("totalTime","totalTime","TotalTime")}}
</div><div class="col-lg-6">{{createText("dieselConsumed","dieselConsumed","DieselConsumed")}}
</div><div class="col-lg-6">{{createText("mobileConsume","mobileConsume","MobileConsume")}}
</div><div class="col-lg-6">{{createText("servicingDate","servicingDate","ServicingDate")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>