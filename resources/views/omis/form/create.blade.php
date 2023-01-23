@extends('omis.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="nk-content-inner">
                <form method="get" action="{{ route('form.store') }}" enctype="multipart/form-data">
                    {{ customCreateSelect('type', 'type', '', '', ['ajax-curd' => 'Ajax CURD', 'make-table-nullable'=>'Make Table Nullable','store' => 'store', 'update' => 'update']) }}
                    {{ customCreateSelect('tableName', 'tableName', 'form-control custom-select2', '', $allTables) }}
                    {{ createText('directoryName', 'directoryName', 'Directory Name') }}
                    <?php createButton('mt-3 btn-primary', '', 'Submit'); ?>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $('.custom-select2').select2();
        });
    </script>
@endpush
