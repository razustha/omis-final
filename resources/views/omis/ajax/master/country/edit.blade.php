<form method="POST" action="{{ route('master.country.update', [$data->country_id]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-6">{{ createText('countryName', 'countryName', 'CountryName', '', $data->countryName) }}
        </div>
        <div class="col-lg-6">{{ createText('alias', 'alias', 'Alias', '', $data->alias) }}
        </div>
        <div class="col-lg-6">
            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive'], $data->status) }}
        </div>
        <div class="col-lg-6">{{ createText('remarks', 'remarks', 'Remarks', '', $data->remarks) }}
        </div>
        <div class="col-md-12"><?php createButton('btn-primary', '', 'Submit'); ?>
        </div>
</form>
