<form action="{{ route('setting.nepalicontent.store') }}" id="storeCustomForm">
    @csrf
    <div class="row">
        <div class="col-lg-6">
            {{ createText('english_string', 'english_string', 'English Word') }}
            {{ createErrorParagraph('english_string', '') }}

        </div>
        <div class="col-lg-6">
            {{ createText('nepali_string', 'nepali_string', 'Nepali Word') }}
            {{ createErrorParagraph('nepali_string', '') }}

        </div>
        {{-- <div class="col-lg-6">
            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive']) }}
        </div>
        <div class="col-lg-6">
            {{ createText('remarks', 'remarks', 'Remarks') }}
        </div>  --}}
        <br>
        <div class="col-md-12"><?php createButton('btn-primary btn-store', '', 'Submit'); ?>
        </div>
</form>
