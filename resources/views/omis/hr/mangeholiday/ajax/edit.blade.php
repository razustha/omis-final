
        <form action="{{route('hr.mangeholiday.update',[$data->mangeHoliday_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("companyName_id","companyName_id","CompanyName Id",'',$data->companyName_id)}}
</div><div class="col-lg-6">{{createText("eventStartDate","eventStartDate","EventStartDate",'',$data->eventStartDate)}}
</div><div class="col-lg-6">{{createText("eventEndDate","eventEndDate","EventEndDate",'',$data->eventEndDate)}}
</div><div class="col-lg-6">{{createText("holidayDescription","holidayDescription","HolidayDescription",'',$data->holidayDescription)}}
</div><div class="col-lg-12">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>