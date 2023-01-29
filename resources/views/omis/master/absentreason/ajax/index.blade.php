<table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
    <thead class="table-light">
        <tr>
        <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">designation</span></th>
<th class="tb-col"><span class="overline-title">dateAbsense</span></th>
<th class="tb-col"><span class="overline-title">dayAbsense</span></th>
<th class="tb-col"><span class="overline-title">holidayApprovedBy</span></th>
<th class="tb-col"><span class="overline-title">reasonAbsence</span></th>
<th class="tb-col"><span class="overline-title">submittedBy</span></th>
<th class="tb-col"><span class="overline-title">checkedBy</span></th>
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
            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->designation }}</td>
<td class="tb-col">{{ $item->dateAbsense }}</td>
<td class="tb-col">{{ $item->dayAbsense }}</td>
<td class="tb-col">{{ $item->holidayApprovedBy }}</td>
<td class="tb-col">{{ $item->reasonAbsence }}</td>
<td class="tb-col">{{ $item->submittedBy }}</td>
<td class="tb-col">{{ $item->checkedBy }}</td>
<td class="tb-col">{{ $item->approvedBy }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                <ul class="d-flex flex-wrap ">
                <li><a href="{{route('master.absentreason.show',[$item->absentReason_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                 <li><a href="{{route('master.absentreason.edit',[$item->absentReason_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                <li><button type="button" data-route="{{route('master.absentreason.destroy',[$item->absentReason_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
               </ul> </td>
               </tr>

        @endforeach

    </tbody>
</table>