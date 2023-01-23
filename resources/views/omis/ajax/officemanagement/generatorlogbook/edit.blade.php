<form method="POST" action="{{route('officemanagement.generatorlogbook.update',[$data->generatorlogbook_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("logbookTitle","logbookTitle","LogbookTitle",'',$data->logbookTitle)}}
</div><div class="col-lg-6">{{createText("subTitle","subTitle","SubTitle",'',$data->subTitle)}}
</div><div class="col-lg-6">{{createText("pageNumber","pageNumber","PageNumber",'',$data->pageNumber)}}
</div><div class="col-lg-6">{{createText("checkedDate","checkedDate","CheckedDate",'',$data->checkedDate)}}
</div><div class="col-lg-6">{{createText("fullName","fullName","FullName",'',$data->fullName)}}
</div><div class="col-lg-6">{{createText("purpose","purpose","Purpose",'',$data->purpose)}}
</div><div class="col-lg-6">{{createText("from","from","From",'',$data->from)}}
</div><div class="col-lg-6">{{createText("to","to","To",'',$data->to)}}
</div><div class="col-lg-6">{{createText("totalTime","totalTime","TotalTime",'',$data->totalTime)}}
</div><div class="col-lg-6">{{createText("dieselConsumed","dieselConsumed","DieselConsumed",'',$data->dieselConsumed)}}
</div><div class="col-lg-6">{{createText("mobileConsume","mobileConsume","MobileConsume",'',$data->mobileConsume)}}
</div><div class="col-lg-6">{{createText("servicingDate","servicingDate","ServicingDate",'',$data->servicingDate)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>