
                <form action="{{route('hr.warnings.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("warningTo","warningTo","WarningTo")}}
</div><div class="col-lg-6">{{createText("warningSubject","warningSubject","WarningSubject")}}
</div><div class="col-lg-4">{{createDate("warningDate","warningDate","WarningDate")}}
</div><div class="col-lg-4">{{createText("warningType_id","warningType_id","WarningType Id")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createLabel('warningDescription', 'form-label col-form-label', 'Description')}}{{createTextArea("warningDescription","warningDescription","WarningDescription", "", "")}}

</div><div class="col-lg-6">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks", "", "")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>