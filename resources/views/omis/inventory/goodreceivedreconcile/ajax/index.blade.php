<table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
    <thead class="table-light">
        <tr>
        <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">goodReceivedReconcile_Title</span></th>
<th class="tb-col"><span class="overline-title">address</span></th>
<th class="tb-col"><span class="overline-title">purchaseNumber</span></th>
<th class="tb-col"><span class="overline-title">receiptNumber</span></th>
<th class="tb-col"><span class="overline-title">sn</span></th>
<th class="tb-col"><span class="overline-title">goodsDetails</span></th>
<th class="tb-col"><span class="overline-title">unit</span></th>
<th class="tb-col"><span class="overline-title">quanitity</span></th>
<th class="tb-col"><span class="overline-title">comments</span></th>
<th class="tb-col"><span class="overline-title">receiverdName</span></th>
<th class="tb-col"><span class="overline-title">receivedPosition</span></th>
<th class="tb-col"><span class="overline-title">receivedDate</span></th>
<th class="tb-col"><span class="overline-title">receivedAddress</span></th>
<th class="tb-col"><span class="overline-title">organization</span></th>
<th class="tb-col"><span class="overline-title">organizationDate</span></th>
<th class="tb-col"><span class="overline-title">alias</span></th>
<th class="tb-col"><span class="overline-title">status</span></th>
<th class="tb-col" data-sortable="false"><span
                    class="overline-title">Action</span></th>
        </tr>
    </thead>
    <tbody>
        @php
            $i = 1;
        @endphp
        @foreach ($data as $item)
        <tr>
            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->goodReceivedReconcile_Title }}</td>
<td class="tb-col">{{ $item->address }}</td>
<td class="tb-col">{{ $item->purchaseNumber }}</td>
<td class="tb-col">{{ $item->receiptNumber }}</td>
<td class="tb-col">{{ $item->sn }}</td>
<td class="tb-col">{{ $item->goodsDetails }}</td>
<td class="tb-col">{{ $item->unit }}</td>
<td class="tb-col">{{ $item->quanitity }}</td>
<td class="tb-col">{{ $item->comments }}</td>
<td class="tb-col">{{ $item->receiverdName }}</td>
<td class="tb-col">{{ $item->receivedPosition }}</td>
<td class="tb-col">{{ $item->receivedDate }}</td>
<td class="tb-col">{{ $item->receivedAddress }}</td>
<td class="tb-col">{{ $item->organization }}</td>
<td class="tb-col">{{ $item->organizationDate }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                <ul class="d-flex flex-wrap ">
                <li><a href="{{route('inventory.goodreceivedreconcile.show',[$item->goodreceivedreconcile_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                 <li><a href="{{route('inventory.goodreceivedreconcile.edit',[$item->goodreceivedreconcile_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                <li><button type="button" data-route="{{route('inventory.goodreceivedreconcile.destroy',[$item->goodreceivedreconcile_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
               </ul> </td>
               </tr>

        @endforeach

    </tbody>
</table>