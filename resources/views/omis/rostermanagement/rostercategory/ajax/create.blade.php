<form action="{{route('rostermanagement.rostercategory.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("titleName","titleName","Title Name")}}
</div><div class="col-lg-6">{{createText("titleType_id","titleType_id","TitleType Id")}}
</div><div class="col-lg-6">{{createText("time","time","Time")}}
</div><div class="col-lg-6">{{createDate("date","date","Date")}}
</div><div class="col-lg-6">{{createText("officerName","officerName","Officer Name")}}
</div><div class="col-lg-6">{{createText("applicants_id","applicants_id","Applicants Id")}}
</div><div class="col-lg-6">{{createText("applicantName","applicantName","Applicant Name")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>