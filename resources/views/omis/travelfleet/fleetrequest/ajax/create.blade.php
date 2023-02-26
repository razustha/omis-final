<form action="{{route('travelfleet.fleetrequest.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_fleet","fleet_id","fleetName",'','','Fleet') !!}
</div><div class="col-lg-6">{{createText("fleetName","fleetName","Fleet Name")}}
</div><div class="col-lg-6">{{createText("modelNumber","modelNumber","Model Number")}}
</div><div class="col-lg-6">{{createText("numberPlate_id","numberPlate_id","Number Plate Id")}}
</div><div class="col-lg-6">{{createText("numberPlateType","numberPlateType","Number Plate Type")}}
</div><div class="col-lg-6">{{createText("plateNumber","plateNumber","Plate Number")}}
</div><div class="col-lg-6">{{createText("rootPermit","rootPermit","Root Permit")}}
</div><div class="col-lg-6">{{createDate("issueDate","issueDate","Issue Date")}}
</div><div class="col-lg-6">{{createDate("expireDate","expireDate","Expire Date")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>