@extends('omis.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Operation Log Lists</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Log</a></li>
                                            <li class="breadcrumb-item"><a href="#">Operations</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">logs
                                            </li>
                                        </ol>
                                    </nav>
                            </div>

                        </div>
                    </div>
                    <div class="nk-block">
                        @foreach ($operationLogs as $item)
                        @php
                            $oldValues = $item->previous_values ? json_decode($item->previous_values,true) : json_decode($item->new_values,true) ;
                            $newValues = $item->previous_values && $item->new_values ? json_decode($item->new_values,true) : [];
                        @endphp
                        <div class="card">
                            <table class="datatable-init table" data-nk-container="table-responsive">
                                <thead class="table-light">
                                    <tr>
                                        <th class="tb-col"><span class="overline-title">S.N.</span></th>
                                        <th class="tb-col"><span class="overline-title">Attribute</span></th>
                                        <th class="tb-col"><span class="overline-title">Old Value</span></th>
                                        <th class="tb-col"><span class="overline-title">New Value</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($oldValues as $key => $item)
                                        <tr>
                                            <td class="tb-col">{{ $i++ }}</td>
                                            <td class="tb-col">{{ $key }}</td>
                                            <td class="tb-col">{{ $item }}</td>
                                            <td class="tb-col">{{ isset($newValues[$key]) ? $newValues[$key] : '' }}</td>
                                            {{-- <td class="tb-col">{{ $item->previous_values }}</td> --}}
                                            {{-- <td class="tb-col">{{ $item->new_values }}</td> --}}
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
