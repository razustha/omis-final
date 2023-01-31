<form action="{{route('eventsandmeetings.event.update',[$data->event_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("eventTitle","eventTitle","Event Title",'',$data->eventTitle)}}
</div><div class="col-lg-6">{{createText("eventDate","eventDate","Event Date",'',$data->eventDate)}}
</div><div class="col-lg-6">{{createText("eventTime","eventTime","Event Time",'',$data->eventTime)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>