<form action="{{route('hr.shiftroster.update',[$data->shiftRoster_id])}}" id="updateCustomForm">
        @csrf
        @method('PUT')
        <div class="row">
                <div class="col-lg-6">{{createText("rosterName_id","rosterName_id","RosterName
                        Id",'',$data->rosterName_id)}}
                </div>
                <div class="col-lg-6">{{createText("shift","shift","Shift",'',$data->shift)}}
                </div>
                <div class="col-lg-4">
                        {{createText("shiftFromDate","shiftFromDate","ShiftFromDate",'',$data->shiftFromDate)}}
                </div>
                <div class="col-lg-4">{{createText("shiftToDate","shiftToDate","ShiftToDate",'',$data->shiftToDate)}}
                </div>
               
                <div class="col-lg-4">
                        {{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
                </div>
                <div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks",'',$data->remarks)}}
                </div>
                <div class="col-md-12">
                        <?php createButton("btn-primary btn-update","","Submit"); ?>
                </div>
        </div>
</form>