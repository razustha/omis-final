
                <form method="POST" action="{{route('tbl_complaints.complaints.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("companyTitle","companyTitle","CompanyTitle")}}
</div><div class="col-lg-6">{{createText("complaintDate","complaintDate","ComplaintDate")}}
</div><div class="col-lg-6">{{createText("complaintFrom","complaintFrom","ComplaintFrom")}}
</div><div class="col-lg-6">{{createText("complaintAgainst","complaintAgainst","ComplaintAgainst")}}
</div><div class="col-lg-6">{{createText("complaintDescription","complaintDescription","ComplaintDescription")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>