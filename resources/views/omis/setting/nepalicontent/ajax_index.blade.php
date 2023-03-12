@extends('omis.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">{{ __('lang.English according Nepali Word List') }} </h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">{{ __('lang.Nepali Word') }}</a></li>
                                            <li class="breadcrumb-item"><a href="#">{{ __('lang.Nepali Word Manage') }}</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">{{ __('lang.Nepali Word') }}
                                            </li>
                                        </ol>
                                    </nav>
                            </div>
                            <div class="nk-block-head-content">
                                <ul class="d-flex">
                                    {!! createCanvasButton('customBtnAdd', '', 'Nepali Word', 'setting.nepalicontent.create') !!}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="card">
                            <table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
                                <thead class="table-light">
                                    <tr>
                                        <th class="tb-col"><span class="overline-title">{{ __('lang.S.N.') }}</span></th>
                                        <th class="tb-col"><span class="overline-title">{{ __('lang.English Word') }}</span></th>
                                        <th class="tb-col"><span class="overline-title">{{ __('lang.Nepali Word') }}</span></th>
                                        {{-- <th class="tb-col"><span class="overline-title">status</span></th> --}}
                                        <th class="tb-col" data-sortable="false"><span class="overline-title">{{ __('lang.Action') }}</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="tb-col">{{ $i++ }}</td>
                                            <td class="tb-col">{{ $item->english_string }}</td>
                                            <td class="tb-col">{{ $item->nepali_string }}</td>
                                            {{-- <td class="tb-col">{!! $item->status_name !!}</td> --}}
                                            <td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                    <li>
                                                        {!! actionCanvasButton(
                                                            '',
                                                            'btn-showCanvas',
                                                            'showoffcanvas',
                                                            'eye',
                                                            'setting.nepalicontent.show',
                                                            $item->nepalicontent_id,
                                                        ) !!}
                                                    </li>
                                                    <li>
                                                        {!! actionCanvasButton(
                                                            '',
                                                            'btn-editCanvas',
                                                            'editoffcanvas',
                                                            'edit',
                                                            'setting.nepalicontent.edit',
                                                            $item->nepalicontent_id,
                                                        ) !!}
                                                    </li>
                                                    {{-- <li>{!! deleteCanvasButton('', 'btn-hover-danger', 'setting.nepalicontent.destroy', $item->nepalicontent_id) !!}</li> --}}
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{-- Add Modal --}}
                            <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                                <div class="offcanvas-header border-bottom border-light">
                                    <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.Add Nepali Word according To English') }}</h5><button
                                        type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body" data-simplebar>
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="alert alert-danger print-error-msg" style="display:none">
                                                <ul></ul>
                                            </div>
                                            <div id="addConvasByAjax">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Edit Modal --}}
                        <div class="offcanvas offcanvas-end offcanvas-size-xxlg editoffcanvas" id="editoffcanvas">
                            <div class="offcanvas-header border-bottom border-light">
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.Edit Nepali Word according To English') }}<h5><button
                                            type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body" data-simplebar>
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="alert alert-danger print-error-msg" style="display:none">
                                            <ul></ul>
                                        </div>
                                        <div id="editConvasByAjax">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Edit Modal --}}

                        {{-- Edit Modal --}}
                        <div class="offcanvas offcanvas-end offcanvas-size-xxlg showoffcanvas" id="showoffcanvas">

                        </div>
                        {{-- Edit Modal --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
