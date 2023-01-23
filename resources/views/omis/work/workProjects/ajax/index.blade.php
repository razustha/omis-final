<table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
    <thead class="table-light">
        <tr>
        <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">projectTitle</span></th>
<th class="tb-col"><span class="overline-title">projectStartClient</span></th>
<th class="tb-col"><span class="overline-title">projectStartDate</span></th>
<th class="tb-col"><span class="overline-title">projectEndDate</span></th>
<th class="tb-col"><span class="overline-title">projectPriority</span></th>
<th class="tb-col"><span class="overline-title">companyName_id</span></th>
<th class="tb-col"><span class="overline-title">assignedEmployees</span></th>
<th class="tb-col"><span class="overline-title">projectDescription</span></th>
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
            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->projectTitle }}</td>
<td class="tb-col">{{ $item->projectStartClient }}</td>
<td class="tb-col">{{ $item->projectStartDate }}</td>
<td class="tb-col">{{ $item->projectEndDate }}</td>
<td class="tb-col">{{ $item->projectPriority }}</td>
<td class="tb-col">{{ $item->companyName_id }}</td>
<td class="tb-col">{{ $item->assignedEmployees }}</td>
<td class="tb-col">{{ $item->projectDescription }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                <ul class="d-flex flex-wrap ">
                <li><a href="{{route('work.workprojects.show',[$item->workProject_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                 <li><a href="{{route('work.workprojects.edit',[$item->workProject_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                <li><button type="button" data-route="{{route('work.workprojects.destroy',[$item->workProject_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
               </ul> </td>
               </tr>

        @endforeach

    </tbody>
</table>