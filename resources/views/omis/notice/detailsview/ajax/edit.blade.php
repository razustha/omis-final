<form action="{{route('notice.detailsview.update',[$data->detailsview_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-4">{{createText("detailsType","detailsType","Details Type",'',$data->detailsType)}}
</div><div class="col-lg-4">{{createText("detailsName","detailsName","Details Name",'',$data->detailsName)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>