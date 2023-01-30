
        <form action="{{route('notice.overview.update',[$data->overview_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("overviewFor","overviewFor","Overview For",'',$data->overviewFor)}}
</div><div class="col-lg-6">{{createText("overviewBy","overviewBy","Overview By",'',$data->overviewBy)}}
</div><div class="col-lg-6">{{createDate("overviewDate","overviewDate","Overview Date",'',$data->overviewDate)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createLabel('overviewdescription','form-label col-form-label','Description')}}{{createTextArea("overviewDescription","overviewDescription","Description",'',$data->overviewDescription)}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>