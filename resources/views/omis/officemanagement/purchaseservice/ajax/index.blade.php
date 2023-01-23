<table class="datatable-init table" data-nk-container="table-responsive">
        <thead class="table-light">
            <tr>
            <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">purchaseTitle</span></th>
<th class="tb-col"><span class="overline-title">contractName</span></th>
<th class="tb-col"><span class="overline-title">referenceNumber</span></th>
<th class="tb-col"><span class="overline-title">date</span></th>
<th class="tb-col"><span class="overline-title">vatNumber</span></th>
<th class="tb-col"><span class="overline-title">address</span></th>
<th class="tb-col"><span class="overline-title">contact</span></th>
<th class="tb-col"><span class="overline-title">serialNumber</span></th>
<th class="tb-col"><span class="overline-title">descriptions</span></th>
<th class="tb-col"><span class="overline-title">units</span></th>
<th class="tb-col"><span class="overline-title">quantity</span></th>
<th class="tb-col"><span class="overline-title">rate</span></th>
<th class="tb-col"><span class="overline-title">amount</span></th>
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
                <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->purchaseTitle }}</td>
<td class="tb-col">{{ $item->contractName }}</td>
<td class="tb-col">{{ $item->referenceNumber }}</td>
<td class="tb-col">{{ $item->date }}</td>
<td class="tb-col">{{ $item->vatNumber }}</td>
<td class="tb-col">{{ $item->address }}</td>
<td class="tb-col">{{ $item->contact }}</td>
<td class="tb-col">{{ $item->serialNumber }}</td>
<td class="tb-col">{{ $item->descriptions }}</td>
<td class="tb-col">{{ $item->units }}</td>
<td class="tb-col">{{ $item->quantity }}</td>
<td class="tb-col">{{ $item->rate }}</td>
<td class="tb-col">{{ $item->amount }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                    <ul class="d-flex flex-wrap ">
                    <li><a href="{{route('officemanagement.purchaseservice.show',[$item->prchaseService_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                     <li><a href="{{route('officemanagement.purchaseservice.edit',[$item->prchaseService_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                    <li><button type="button" data-route="{{route('officemanagement.purchaseservice.destroy',[$item->prchaseService_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
                   </ul> </td>
                   <tr>

            @endforeach

        </tbody>
    </table>