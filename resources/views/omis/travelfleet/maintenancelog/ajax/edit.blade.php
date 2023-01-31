<form action="{{route('travelfleet.maintenancelog.update',[$data->maintenancelog_id])}}" id="updateCustomForm">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-6">{{createText("fleetName","fleetName","Fleet Name",'',$data->fleetName)}}
        </div>
        <div class="col-lg-6">{{createText("driverName","driverName","Driver Name",'',$data->driverName)}}
        </div>
        <div class="col-lg-6">{{createText("model","model","Model",'',$data->model)}}
        </div>
        <div class="col-lg-6">{{createText("date","date","Date",'',$data->date)}}
        </div>
        <div class="col-lg-6">{{createText("time","time","Time",'',$data->time)}}
        </div>
        <div class="col-lg-6">
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