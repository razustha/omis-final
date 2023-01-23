
        <form action="{{route('hr.warnings.update',[$data->warnings_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("warningTo","warningTo","WarningTo",'',$data->warningTo)}}
</div><div class="col-lg-6">{{createText("warningSubject","warningSubject","WarningSubject",'',$data->warningSubject)}}
</div><div class="col-lg-4">{{createDate("warningDate","warningDate","WarningDate",'',$data->warningDate)}}
</div><div class="col-lg-4">{{createText("warningType_id","warningType_id","WarningType Id",'',$data->warningType_id)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createLabel('warningDescription', 'form-label col-form-label', 'Description')}}{{createTextArea("warningDescription","warningDescription","WarningDescription",'',$data->warningDescription)}}

</div><div class="col-lg-6">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>