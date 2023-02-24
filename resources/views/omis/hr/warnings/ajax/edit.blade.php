<form action="{{route('hr.warnings.update',[$data->warnings_id])}}" id="updateCustomForm">
        @csrf
        <div class="row">
            <div class="col-lg-3">
                <div class="row">
                    <div class="col-lg-12">{{createText("warningTo","warningTo","Warning To",'',$data->warningTo)}}
                    </div>
                    <div class="col-lg-12">{{createDate("warningDate","warningDate","Warning Date",'',$data->warningDate)}}
                    </div>
                    <div class="col-lg-12">{{createText("warningType_id","warningType_id","Warning Type",'',$data->warningType_id)}}
                    </div>
                    <div class="col-lg-12">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
                    </div>
                </div>
                
            </div>
            <div class="col-lg-9">
                <div class="col-lg-12">{{createText("warningSubject","warningSubject","Warning Subject",'',$data->warningSubject)}}
                </div>
                <div class="col-lg-12">
                        {{createLabel('warningDescription', 'form-label col-form-label', 'Description')}}{{createTextArea("warningDescription","warningDescription","WarningDescription",'',$data->warningDescription)}}       
                </div>
                <div class="col-lg-12">
                        {{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
                </div>
            </div>
                      
            <br>
            <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
            </div>
    </form>
    