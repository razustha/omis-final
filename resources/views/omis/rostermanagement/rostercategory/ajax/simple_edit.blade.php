
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("titleName","titleName","TitleName",'',$data->titleName)}}
</div><div class="col-lg-6">{{createText("titleType_id","titleType_id","TitleType Id",'',$data->titleType_id)}}
</div><div class="col-lg-6">{{createText("time","time","Time",'',$data->time)}}
</div><div class="col-lg-6">{{createText("date","date","Date",'',$data->date)}}
</div><div class="col-lg-6">{{createText("officerName","officerName","OfficerName",'',$data->officerName)}}
</div><div class="col-lg-6">{{createText("applicants_id","applicants_id","Applicants Id",'',$data->applicants_id)}}
</div><div class="col-lg-6">{{createText("applicantName","applicantName","ApplicantName",'',$data->applicantName)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>