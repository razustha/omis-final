<form method="POST" action="{{route('hr.complaints.update',[$data->complaints_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("companyTitle","companyTitle","CompanyTitle",'',$data->companyTitle)}}
</div><div class="col-lg-6">{{createText("complaintDate","complaintDate","ComplaintDate",'',$data->complaintDate)}}
</div><div class="col-lg-6">{{createText("complaintFrom","complaintFrom","ComplaintFrom",'',$data->complaintFrom)}}
</div><div class="col-lg-6">{{createText("complaintAgainst","complaintAgainst","ComplaintAgainst",'',$data->complaintAgainst)}}
</div><div class="col-lg-6">{{createText("complaintDescription","complaintDescription","ComplaintDescription",'',$data->complaintDescription)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>