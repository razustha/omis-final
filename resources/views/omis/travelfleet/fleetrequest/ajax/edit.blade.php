<form action="{{route('travelfleet.fleetrequest.update',[$data->fleetRequest_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_fleet","fleet_id","fleetName",'',$data,'Fleet') !!}
</div><div class="col-lg-6">{{createText("fleetName","fleetName","Fleet Name",'',$data->fleetName)}}
</div><div class="col-lg-6">{{createText("modelNumber","modelNumber","Model Number",'',$data->modelNumber)}}
</div><div class="col-lg-6">{{createText("numberPlate_id","numberPlate_id","Number Plate Id",'',$data->numberPlate_id)}}
</div><div class="col-lg-6">{{createText("numberPlateType","numberPlateType","Number Plate Type",'',$data->numberPlateType)}}
</div><div class="col-lg-6">{{createText("plateNumber","plateNumber","Plate Number",'',$data->plateNumber)}}
</div><div class="col-lg-6">{{createText("rootPermit","rootPermit","Root Permit",'',$data->rootPermit)}}
</div><div class="col-lg-6">{{createDate("issueDate","issueDate","Issue Date",'',$data->issueDate)}}
</div><div class="col-lg-6">{{createDate("expireDate","expireDate","Expire Date",'',$data->expireDate)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>