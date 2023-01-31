<form action="{{route('hr.employeementtimeline.update',[$data->employeementTimeLine_id])}}" id="updateCustomForm">
        @csrf
        @method('PUT')
        <div class="row">
                <div class="col-lg-6">{{createDate("startDate","startDate","Start Date",'',$data->startDate)}}
                </div>
                <div class="col-lg-6">{{createDate("endDate","endDate","End Date",'',$data->endDate)}}
                </div>
                <div class="col-lg-12">
                        {{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
                </div>
                <div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks",'',$data->remarks)}}
                </div>
                <div class="col-md-12">
                        <?php createButton("btn-primary btn-update","","Update"); ?>
                </div>
        </div>
</form>