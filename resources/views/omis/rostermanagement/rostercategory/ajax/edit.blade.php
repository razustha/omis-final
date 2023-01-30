<form action="{{route('rostermanagement.rostercategory.update',[$data->rostercategory_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("titleName","titleName","Title Name",'',$data->titleName)}}
</div><div class="col-lg-6">{{createText("titleType_id","titleType_id","Title Id",'',$data->titleType_id)}}
</div><div class="col-lg-6">{{createText("time","time","Time",'',$data->time)}}
</div><div class="col-lg-6">{{createDate("date","date","Date",'',$data->date)}}
</div><div class="col-lg-6">{{createText("officerName","officerName","Officer Name",'',$data->officerName)}}
</div><div class="col-lg-6">{{createText("applicants_id","applicants_id","Applicants Id",'',$data->applicants_id)}}
</div><div class="col-lg-6">{{createText("applicantName","applicantName","Applicant Name",'',$data->applicantName)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>