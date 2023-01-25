
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("fleet_id","fleet_id","Fleet Id",'',$data->fleet_id)}}
</div><div class="col-lg-6">{{createText("fleetName","fleetName","FleetName",'',$data->fleetName)}}
</div><div class="col-lg-6">{{createText("modelNumber","modelNumber","ModelNumber",'',$data->modelNumber)}}
</div><div class="col-lg-6">{{createText("numberPlate_id","numberPlate_id","NumberPlate Id",'',$data->numberPlate_id)}}
</div><div class="col-lg-6">{{createText("numberPlateType","numberPlateType","NumberPlateType",'',$data->numberPlateType)}}
</div><div class="col-lg-6">{{createText("plateNumber","plateNumber","PlateNumber",'',$data->plateNumber)}}
</div><div class="col-lg-6">{{createText("rootPermit","rootPermit","RootPermit",'',$data->rootPermit)}}
</div><div class="col-lg-6">{{createText("issueDate","issueDate","IssueDate",'',$data->issueDate)}}
</div><div class="col-lg-6">{{createText("expireDate","expireDate","ExpireDate",'',$data->expireDate)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>