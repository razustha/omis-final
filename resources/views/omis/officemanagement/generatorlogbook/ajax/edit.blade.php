
        <form action="{{route('officemanagement.generatorlogbook.update',[$data->generatorlogbook_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("logbookTitle","logbookTitle","LogbookTitle",'',$data->logbookTitle)}}
</div><div class="col-lg-6">{{createText("subTitle","subTitle","Sub Title",'',$data->subTitle)}}
</div><div class="col-lg-6">{{createText("pageNumber","pageNumber","Page Number",'',$data->pageNumber)}}
</div><div class="col-lg-6">{{createDate("checkedDate","checkedDate","Checked Date",'',$data->checkedDate)}}
</div><div class="col-lg-6">{{createText("fullName","fullName","Full Name",'',$data->fullName)}}
</div><div class="col-lg-6">{{createText("purpose","purpose","Purpose",'',$data->purpose)}}
</div><div class="col-lg-6">{{createText("from","from","From",'',$data->from)}}
</div><div class="col-lg-6">{{createText("to","to","To",'',$data->to)}}
</div><div class="col-lg-6">{{createText("totalTime","totalTime","Total Time",'',$data->totalTime)}}
</div><div class="col-lg-6">{{createText("dieselConsumed","dieselConsumed","Diesel Consumed",'',$data->dieselConsumed)}}
</div><div class="col-lg-4">{{createText("mobileConsume","mobileConsume","Mobile Consume",'',$data->mobileConsume)}}
</div><div class="col-lg-4">{{createDate("servicingDate","servicingDate","Servicing Date",'',$data->servicingDate)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>