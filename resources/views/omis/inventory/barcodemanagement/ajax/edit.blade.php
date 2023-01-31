<form action="{{route('inventory.barcodemanagement.update',[$data->barcodemanagement_id])}}" id="updateCustomForm">
        @csrf
        @method('PUT')
        <div class="row">
                <div class="col-lg-6">{{createText("barCode_id","barCode_id","Barcode Id",'',$data->barCode_id)}}
                        </div>
                        <div class="col-lg-6">
                        {{createText("stockName","stockName","Stock Name",'',$data->stockName)}}
                </div>
                <div class="col-lg-6">
                        {{createText("barCodeType","barCodeType","Barcode Type",'',$data->barCodeType)}}
                </div>
                <div class="col-lg-6">{{createDate("date","date","Date",'',$data->date)}}
                </div>
                <div class="col-lg-6">{{createText("time","time","Time",'',$data->time)}}
                </div>
                <div class="col-lg-6">
                        {{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
                </div>
                <div class="col-lg-12">{{createLabel('remarks','form-label
                        col-form-label','Remarks')}}{{createTextArea("remarks",'',"remarks",'',$data->remarks)}}
                </div>
                <div class="col-md-12">
                        <?php createButton("btn-primary btn-update","","Update"); ?>
                </div>
        </div>
</form>