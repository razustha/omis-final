<table class="datatable-init table" data-nk-container="table-responsive">
        <thead class="table-light">
            <tr>
            <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">date</span></th>
<th class="tb-col"><span class="overline-title">categoryType</span></th>
<th class="tb-col"><span class="overline-title">details</span></th>
<th class="tb-col"><span class="overline-title">amount</span></th>
<th class="tb-col"><span class="overline-title">amountInWords</span></th>
<th class="tb-col"><span class="overline-title">claimedBy</span></th>
<th class="tb-col"><span class="overline-title">verifiedBy</span></th>
<th class="tb-col"><span class="overline-title">approvedBy</span></th>
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
                <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->date }}</td>
<td class="tb-col">{{ $item->categoryType }}</td>
<td class="tb-col">{{ $item->details }}</td>
<td class="tb-col">{{ $item->amount }}</td>
<td class="tb-col">{{ $item->amountInWords }}</td>
<td class="tb-col">{{ $item->claimedBy }}</td>
<td class="tb-col">{{ $item->verifiedBy }}</td>
<td class="tb-col">{{ $item->approvedBy }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                    <ul class="d-flex flex-wrap ">
                    <li><a href="{{route('travelfleet.travelcategory.show',[$item->travelcategory_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                     <li><a href="{{route('travelfleet.travelcategory.edit',[$item->travelcategory_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                    <li><button type="button" data-route="{{route('travelfleet.travelcategory.destroy',[$item->travelcategory_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
                   </ul> </td>
                   <tr>

            @endforeach

        </tbody>
    </table>