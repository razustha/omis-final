<table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
    <thead class="table-light">
        <tr>
        <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">arrangementType_id</span></th>
<th class="tb-col"><span class="overline-title">purposeOfVisit</span></th>
<th class="tb-col"><span class="overline-title">destination</span></th>
<th class="tb-col"><span class="overline-title">travelStartDate</span></th>
<th class="tb-col"><span class="overline-title">travelEndDate</span></th>
<th class="tb-col"><span class="overline-title">expectedBudget</span></th>
<th class="tb-col"><span class="overline-title">actualBudget</span></th>
<th class="tb-col"><span class="overline-title">travelMode</span></th>
<th class="tb-col"><span class="overline-title">alias</span></th>
<th class="tb-col"><span class="overline-title">status</span></th>
<th class="tb-col"><span class="overline-title">companyName_id</span></th>
<th class="tb-col"><span class="overline-title">travel_id</span></th>
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
            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->arrangementType_id }}</td>
<td class="tb-col">{{ $item->purposeOfVisit }}</td>
<td class="tb-col">{{ $item->destination }}</td>
<td class="tb-col">{{ $item->travelStartDate }}</td>
<td class="tb-col">{{ $item->travelEndDate }}</td>
<td class="tb-col">{{ $item->expectedBudget }}</td>
<td class="tb-col">{{ $item->actualBudget }}</td>
<td class="tb-col">{{ $item->travelMode }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">{{ $item->companyName_id }}</td>
<td class="tb-col">{{ $item->travel_id }}</td>
<td class="tb-col">
                <ul class="d-flex flex-wrap ">
                <li><a href="{{route('requisition.travel.show',[$item->employeeName_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                 <li><a href="{{route('requisition.travel.edit',[$item->employeeName_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                <li><button type="button" data-route="{{route('requisition.travel.destroy',[$item->employeeName_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
               </ul> </td>
               </tr>

        @endforeach

    </tbody>
</table>