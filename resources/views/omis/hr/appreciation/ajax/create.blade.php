
<form action="{{route('hr.appreciation.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("appreciationTitle","appreciationTitle","Appreciation Title")}}
</div><div class="col-lg-6">{{createText("appreciationType","appreciationType","Appreciation Type")}}
</div><div class="col-lg-6">{{createText("appreciatedBy","appreciatedBy","Appreciated By")}}
</div><div class="col-lg-6">{{createText("recievedBy","recievedBy","Recieved By")}}
</div><div class="col-lg-6">{{createDate("appreciationRecievedOn","appreciationRecievedOn","Appreciation Recieved On")}}
</div><div class="col-lg-6">{{createDate("appreciatioanApprovedOn","appreciatioanApprovedOn","Appreciation Approved On")}}
</div><div class="col-lg-12">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks", "", "")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>