
                <form action="{{route('hr.mangeholiday.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("companyName_id","companyName_id","CompanyName Id")}}
</div><div class="col-lg-6">{{createDate("eventStartDate","eventStartDate","EventStartDate")}}
</div><div class="col-lg-6">{{createDate("eventEndDate","eventEndDate","EventEndDate")}}
</div><div class="col-lg-6">{{createText("holidayDescription","holidayDescription","HolidayDescription")}}
</div><div class="col-lg-12">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks", "", "")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>