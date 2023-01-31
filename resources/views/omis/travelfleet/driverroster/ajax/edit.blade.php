<form action="{{route('travelfleet.driverroster.update',[$data->driverRoster_id])}}" id="updateCustomForm">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-6">{{createText("driverName","driverName","Driver Name",'',$data->driverName)}}
        </div>
        <div class="col-lg-6">{{createText("driverPhone","driverPhone","Driver Phone",'',$data->driverPhone)}}
        </div>
        <div class="col-lg-4">{{createText("driverVehicle","driverVehicle","Driver Vehicle",'',$data->driverVehicle)}}
        </div>
        <div class="col-lg-4">{{createText("vehicleNumber","vehicleNumber","Vehicle Number",'',$data->vehicleNumber)}}
        </div>
        <div class="col-lg-4">
            {{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
        </div>
        <div class="col-lg-12">{{createLabel('remarks','form-label
            col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
        </div>
        <div class="col-md-12">
            <?php createButton("btn-primary btn-update","","Update"); ?>
        </div>
        </div>
</form>