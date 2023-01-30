
        <form action="{{route('hr.complaints.update',[$data->complaints_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("companyName","companyName","Company Name",'',$data->companyName)}}
</div><div class="col-lg-6">{{createText("companyTitle","companyTitle","Company Title",'',$data->companyTitle)}}
</div><div class="col-lg-6">{{createText("complaintDate","complaintDate","Complaint Date",'',$data->complaintDate)}}
</div><div class="col-lg-6">{{createText("complaintFrom","complaintFrom","Complaint From",'',$data->complaintFrom)}}
</div><div class="col-lg-6">{{createText("complaintAgainst","complaintAgainst","Complaint Against",'',$data->complaintAgainst)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createLabel('complaintDescription' ,'form-label col-form-label', 'Description')}}{{createTextArea("complaintDescription","complaintDescription","ComplaintDescription",'',$data->complaintDescription)}}

</div><div class="col-lg-6">{{createLabel('remarks', 'form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>