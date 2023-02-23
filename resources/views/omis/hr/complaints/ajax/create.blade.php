
                <form action="{{route('hr.complaints.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-4">{{createText("companyName","companyName","Company Name")}}
</div><div class="col-lg-4">{{createText("companyTitle","companyTitle","Company Title")}}
</div><div class="col-lg-4">{{createDate("complaintDate","complaintDate","Complaint Date")}}
</div><div class="col-lg-6">{{createText("complaintFrom","complaintFrom","Complaint From")}}
</div><div class="col-lg-6">{{createText("complaintAgainst","complaintAgainst","Complaint Against")}}
</div><div class="col-lg-12">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createLabel('complaintDescription', 'form-label col-form-label', 'Description')}}{{createTextArea("complaintDescription","complaintDescription","Complaint Description", "", "")}}

</div><div class="col-lg-6">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks", "", "")}}

</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>