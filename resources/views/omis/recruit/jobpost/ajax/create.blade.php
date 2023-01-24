<form action="{{route('recruit.jobpost.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("jobTitle","jobTitle","Job Title")}}
</div><div class="col-lg-6">{{createText("jobType","jobType","Job Type")}}
</div><div class="col-lg-6">{{createText("vacancyNumber","vacancyNumber","Vacancy Number")}}
</div><div class="col-lg-6">{{createDate("closingDate","closingDate","Closing Date")}}
</div><div class="col-lg-6">{{createText("jobCategory","jobCategory","Job Category")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>