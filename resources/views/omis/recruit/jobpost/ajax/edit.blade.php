<form action="{{route('recruit.jobpost.update',[$data->jobpost_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("jobTitle","job Title","JobTitle",'',$data->jobTitle)}}
</div><div class="col-lg-6">{{createText("jobType","jobType","Job Type",'',$data->jobType)}}
</div><div class="col-lg-6">{{createText("vacancyNumber","vacancyNumber","Vacancy Number",'',$data->vacancyNumber)}}
</div><div class="col-lg-6">{{createDate("closingDate","closingDate","Closing Date",'',$data->closingDate)}}
</div><div class="col-lg-6">{{createText("jobCategory","jobCategory","Job Category",'',$data->jobCategory)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>