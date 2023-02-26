
        <form action="{{route('requisition.convincerequest.update',[$data->convinceReuest_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("ttileName","ttileName","Title",'',$data->ttileName)}}
</div><div class="col-lg-6">{{createText("applicants_id","applicants_id","Applicant",'',$data->applicants_id)}}
</div><div class="col-lg-4">{{createDate("startDate","startDate","Start Date",'',$data->startDate)}}
</div><div class="col-lg-4">{{createDate("expireDate","expireDate","Expire Date",'',$data->expireDate)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>