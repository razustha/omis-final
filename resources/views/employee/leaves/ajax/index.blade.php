<table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
    <thead class="table-light">
        <tr>
        <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">leaveRequestedBy</span></th>
<th class="tb-col"><span class="overline-title">employeeNumber</span></th>
<th class="tb-col"><span class="overline-title">chooseDepartment_id</span></th>
<th class="tb-col"><span class="overline-title">leaveType</span></th>
<th class="tb-col"><span class="overline-title">leaveStart</span></th>
<th class="tb-col"><span class="overline-title">leaveEnd</span></th>
<th class="tb-col"><span class="overline-title">leaveApprovalBy</span></th>
<th class="tb-col"><span class="overline-title">leaveApprovedDate</span></th>
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
            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->leaveRequestedBy }}</td>
<td class="tb-col">{{ $item->employeeNumber }}</td>
<td class="tb-col">{{ $item->chooseDepartment_id }}</td>
<td class="tb-col">{{ $item->leaveType }}</td>
<td class="tb-col">{{ $item->leaveStart }}</td>
<td class="tb-col">{{ $item->leaveEnd }}</td>
<td class="tb-col">{{ $item->leaveApprovalBy }}</td>
<td class="tb-col">{{ $item->leaveApprovedDate }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                <ul class="d-flex flex-wrap ">
                <li><a href="{{route('hr.leaveapplication.show',[$item->leaveApplication_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                 <li><a href="{{route('hr.leaveapplication.edit',[$item->leaveApplication_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                <li><button type="button" data-route="{{route('hr.leaveapplication.destroy',[$item->leaveApplication_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
               </ul> </td>
               </tr>

        @endforeach

    </tbody>
</table>