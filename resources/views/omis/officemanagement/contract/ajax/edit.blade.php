
        <form action="{{route('officemanagement.contract.update',[$data->contract_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("ownerName","ownerName","Owner Name",'',$data->ownerName)}}
</div><div class="col-lg-6">{{createText("contactTitle","contactTitle","Contract Title",'',$data->contactTitle)}}
</div><div class="col-lg-4">{{createDate("issueDate","issueDate","Issue Date",'',$data->issueDate)}}
</div><div class="col-lg-4">{{createDate("expireDate","expireDate","Expire Date",'',$data->expireDate)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>