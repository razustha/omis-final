
                <form method="POST" action="{{route('hr.mangeholiday.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("companyName_id","companyName_id","CompanyName Id")}}
</div><div class="col-lg-6">{{createText("eventStartDate","eventStartDate","EventStartDate")}}
</div><div class="col-lg-6">{{createText("eventEndDate","eventEndDate","EventEndDate")}}
</div><div class="col-lg-6">{{createText("holidayDescription","holidayDescription","HolidayDescription")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>