<form action="{{route('hr.mangeholiday.store')}}" id="storeCustomForm">
 @csrf 
<div class="row">
    <!-- <div class="col-lg-6">{{createText("companyName_id","companyName_id","Company Id")}}
</div> -->
<div class="col-lg-12">{{createText("title","title","Title")}}
</div><div class="col-lg-4">{{createDate("eventStartDate","eventStartDate","Start Date")}}
</div><div class="col-lg-4">{{createDate("eventEndDate","eventEndDate","End Date")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createLabel('holidayDescription','form-label col-form-label','Description')}}{{createTextArea("holidayDescription","holidayDescription","HolidayDescription","","")}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>