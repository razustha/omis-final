<form action="{{ route('master.traveltype.update', [$data->traveltype_id]) }}" id="updateCustomForm">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-6">
            {{ createText('travelTypeName', 'travelTypeName', 'Travel Type Name', '', $data->travelTypeName) }}
        </div>
        <div class="col-lg-6">
            {{ createText('travelTypeDescription', 'travelTypeDescription', 'Travel Type Description', '', $data->travelTypeDescription) }}
        </div>
        <div class="col-lg-6">
            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive'], $data->status) }}
        </div>
        <div class="col-lg-6">{{ createText('remarks', 'remarks', 'Remarks', '', $data->remarks) }}
        </div>
        <div class="col-md-12"><?php createButton('btn-primary btn-update', '', 'Submit'); ?>
        </div>
</form>
