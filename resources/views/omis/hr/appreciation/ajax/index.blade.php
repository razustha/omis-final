<table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
    <thead class="table-light">
        <tr>
        <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">appreciationTitle</span></th>
<th class="tb-col"><span class="overline-title">appreciationType</span></th>
<th class="tb-col"><span class="overline-title">appreciatedBy</span></th>
<th class="tb-col"><span class="overline-title">recievedBy</span></th>
<th class="tb-col"><span class="overline-title">appreciationRecievedOn</span></th>
<th class="tb-col"><span class="overline-title">appreciatioanApprovedOn</span></th>
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
            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->appreciationTitle }}</td>
<td class="tb-col">{{ $item->appreciationType }}</td>
<td class="tb-col">{{ $item->appreciatedBy }}</td>
<td class="tb-col">{{ $item->recievedBy }}</td>
<td class="tb-col">{{ $item->appreciationRecievedOn }}</td>
<td class="tb-col">{{ $item->appreciatioanApprovedOn }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                <ul class="d-flex flex-wrap ">
                <li><a href="{{route('hr.appreciation.show',[$item->appreciation_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                 <li><a href="{{route('hr.appreciation.edit',[$item->appreciation_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                <li><button type="button" data-route="{{route('hr.appreciation.destroy',[$item->appreciation_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
               </ul> </td>
               </tr>

        @endforeach

    </tbody>
</table>