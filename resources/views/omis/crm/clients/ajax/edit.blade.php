
        <form action="{{route('crm.clients.update',[$data->clients_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("applicantName_id","applicantName_id","Applicant Name",'',$data->applicantName_id)}}
</div><div class="col-lg-6">{{createText("phone","phone","Phone",'',$data->phone)}}
</div><div class="col-lg-6">{{createText("email","email","Email",'',$data->email)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>