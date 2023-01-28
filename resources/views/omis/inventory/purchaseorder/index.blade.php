@extends('omis.partials.layouts')
        @section('content')
            <div class="nk-content">
                <div class="container">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <div class="nk-block-head-between flex-wrap gap g-2">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title">Purchaseorder List</h1>
                                            <nav>
                                                <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                    <li class="breadcrumb-item"><a href="#">Purchaseorder</a></li>
                                                    <li class="breadcrumb-item"><a href="#">Purchaseorder Manage</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">Purchaseorder
                                                    </li>
                                                </ol>
                                            </nav>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <ul class="d-flex">
                                            <li><a href="{{route('inventory.purchaseorder.create')}}" class="btn btn-md d-md-none btn-primary" data-bs-toggle="modal"
                                                    data-bs-target=""><em
                                                        class="icon ni ni-plus"></em><span>Add</span></a></li>
                                            <li><a href="{{route('inventory.purchaseorder.create')}}"
                                                    class="btn btn-primary d-none d-md-inline-flex"><em
                                                        class="icon ni ni-plus"></em><span>Add Purchaseorder</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-block">
                                <div class="card">
                                    <table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
                                        <thead class="table-light">
                                            <tr>
                                            <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">date</span></th>
<th class="tb-col"><span class="overline-title">referenceNumber</span></th>
<th class="tb-col"><span class="overline-title">telePhone</span></th>
<th class="tb-col"><span class="overline-title">venderName</span></th>
<th class="tb-col"><span class="overline-title">contractorPAN</span></th>
<th class="tb-col"><span class="overline-title">address</span></th>
<th class="tb-col"><span class="overline-title">projectCode</span></th>
<th class="tb-col"><span class="overline-title">fundingSource</span></th>
<th class="tb-col"><span class="overline-title">goodsDescription</span></th>
<th class="tb-col"><span class="overline-title">unit</span></th>
<th class="tb-col"><span class="overline-title">totalUnit</span></th>
<th class="tb-col"><span class="overline-title">unitRate</span></th>
<th class="tb-col"><span class="overline-title">amount</span></th>
<th class="tb-col"><span class="overline-title">totalAmount</span></th>
<th class="tb-col"><span class="overline-title">specialRequest</span></th>
<th class="tb-col"><span class="overline-title">adminName</span></th>
<th class="tb-col"><span class="overline-title">adminDesignation</span></th>
<th class="tb-col"><span class="overline-title">adminDate</span></th>
<th class="tb-col"><span class="overline-title">operationalName</span></th>
<th class="tb-col"><span class="overline-title">operationalDesignation</span></th>
<th class="tb-col"><span class="overline-title">operationalDate</span></th>
<th class="tb-col"><span class="overline-title">vendorName</span></th>
<th class="tb-col"><span class="overline-title">vendorDesignation</span></th>
<th class="tb-col"><span class="overline-title">vendorDate</span></th>
<th class="tb-col"><span class="overline-title">alias</span></th>
<th class="tb-col"><span class="overline-title">status</span></th>
<th class="tb-col" data-sortable="false"><span
                                                                                                class="overline-title">Action</span>
                                            </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($data as $item)
                                            <tr>
                                                <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->date }}</td>
<td class="tb-col">{{ $item->referenceNumber }}</td>
<td class="tb-col">{{ $item->telePhone }}</td>
<td class="tb-col">{{ $item->venderName }}</td>
<td class="tb-col">{{ $item->contractorPAN }}</td>
<td class="tb-col">{{ $item->address }}</td>
<td class="tb-col">{{ $item->projectCode }}</td>
<td class="tb-col">{{ $item->fundingSource }}</td>
<td class="tb-col">{{ $item->goodsDescription }}</td>
<td class="tb-col">{{ $item->unit }}</td>
<td class="tb-col">{{ $item->totalUnit }}</td>
<td class="tb-col">{{ $item->unitRate }}</td>
<td class="tb-col">{{ $item->amount }}</td>
<td class="tb-col">{{ $item->totalAmount }}</td>
<td class="tb-col">{{ $item->specialRequest }}</td>
<td class="tb-col">{{ $item->adminName }}</td>
<td class="tb-col">{{ $item->adminDesignation }}</td>
<td class="tb-col">{{ $item->adminDate }}</td>
<td class="tb-col">{{ $item->operationalName }}</td>
<td class="tb-col">{{ $item->operationalDesignation }}</td>
<td class="tb-col">{{ $item->operationalDate }}</td>
<td class="tb-col">{{ $item->vendorName }}</td>
<td class="tb-col">{{ $item->vendorDesignation }}</td>
<td class="tb-col">{{ $item->vendorDate }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                    <ul class="d-flex flex-wrap ">
                                                    <li><a href="{{route('inventory.purchaseorder.show',[$item->purchaseorder_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                                                     <li><a href="{{route('inventory.purchaseorder.edit',[$item->purchaseorder_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                                                    <li><button type="button" data-route="{{route('inventory.purchaseorder.destroy',[$item->purchaseorder_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
                                                   </ul> </td>
                                                   </tr>

                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        