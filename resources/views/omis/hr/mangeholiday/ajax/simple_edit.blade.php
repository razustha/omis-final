
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("companyName_id","companyName_id","CompanyName Id",'',$data->companyName_id)}}
</div><div class="col-lg-6">{{createText("eventStartDate","eventStartDate","EventStartDate",'',$data->eventStartDate)}}
</div><div class="col-lg-6">{{createText("eventEndDate","eventEndDate","EventEndDate",'',$data->eventEndDate)}}
</div><div class="col-lg-6">{{createText("holidayDescription","holidayDescription","HolidayDescription",'',$data->holidayDescription)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>