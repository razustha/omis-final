
                <form >
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("entryType_id","entryType_id","EntryType Id")}}
</div><div class="col-lg-6">{{createText("time","time","Time")}}
</div><div class="col-lg-6">{{createText("date","date","Date")}}
</div><div class="col-lg-6">{{createText("officerName","officerName","OfficerName")}}
</div><div class="col-lg-6">{{createText("applicantName_id","applicantName_id","ApplicantName Id")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>