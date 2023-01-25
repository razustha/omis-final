<table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
    <thead class="table-light">
        <tr>
        <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">postion</span></th>
<th class="tb-col"><span class="overline-title">department_id</span></th>
<th class="tb-col"><span class="overline-title">workingDay</span></th>
<th class="tb-col"><span class="overline-title">workingDate</span></th>
<th class="tb-col"><span class="overline-title">holidayReason</span></th>
<th class="tb-col"><span class="overline-title">from</span></th>
<th class="tb-col"><span class="overline-title">to</span></th>
<th class="tb-col"><span class="overline-title">workingReason</span></th>
<th class="tb-col"><span class="overline-title">recommendation</span></th>
<th class="tb-col"><span class="overline-title">verificationUnit</span></th>
<th class="tb-col"><span class="overline-title">verifiedDate</span></th>
<th class="tb-col"><span class="overline-title">approvedBy</span></th>
<th class="tb-col"><span class="overline-title">approvedDate</span></th>
<th class="tb-col"><span class="overline-title">alias</span></th>
<th class="tb-col"><span class="overline-title">status</span></th>
<th class="tb-col"><span class="overline-title">tbl_compensatoryLeave_id</span></th>
<th class="tb-col"><span class="overline-title">compensatoryLeave_id</span></th>
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
            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->postion }}</td>
<td class="tb-col">{{ $item->department_id }}</td>
<td class="tb-col">{{ $item->workingDay }}</td>
<td class="tb-col">{{ $item->workingDate }}</td>
<td class="tb-col">{{ $item->holidayReason }}</td>
<td class="tb-col">{{ $item->from }}</td>
<td class="tb-col">{{ $item->to }}</td>
<td class="tb-col">{{ $item->workingReason }}</td>
<td class="tb-col">{{ $item->recommendation }}</td>
<td class="tb-col">{{ $item->verificationUnit }}</td>
<td class="tb-col">{{ $item->verifiedDate }}</td>
<td class="tb-col">{{ $item->approvedBy }}</td>
<td class="tb-col">{{ $item->approvedDate }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">{{ $item->tbl_compensatoryLeave_id }}</td>
<td class="tb-col">{{ $item->compensatoryLeave_id }}</td>
<td class="tb-col">
                <ul class="d-flex flex-wrap ">
                <li><a href="{{route('requisition.compensatoryleave.show',[$item->applicant_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                 <li><a href="{{route('requisition.compensatoryleave.edit',[$item->applicant_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                <li><button type="button" data-route="{{route('requisition.compensatoryleave.destroy',[$item->applicant_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
               </ul> </td>
               </tr>

        @endforeach

    </tbody>
</table>