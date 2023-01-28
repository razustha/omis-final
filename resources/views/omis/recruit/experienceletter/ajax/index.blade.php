<table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
    <thead class="table-light">
        <tr>
        <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">employee_id</span></th>
<th class="tb-col"><span class="overline-title">designation</span></th>
<th class="tb-col"><span class="overline-title">departmentName</span></th>
<th class="tb-col"><span class="overline-title">joiningDate</span></th>
<th class="tb-col"><span class="overline-title">leftDate</span></th>
<th class="tb-col"><span class="overline-title">experienceDetails</span></th>
<th class="tb-col"><span class="overline-title">letterIssueBy</span></th>
<th class="tb-col"><span class="overline-title">letterIssueDate</span></th>
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
            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->employee_id }}</td>
<td class="tb-col">{{ $item->designation }}</td>
<td class="tb-col">{{ $item->departmentName }}</td>
<td class="tb-col">{{ $item->joiningDate }}</td>
<td class="tb-col">{{ $item->leftDate }}</td>
<td class="tb-col">{{ $item->experienceDetails }}</td>
<td class="tb-col">{{ $item->letterIssueBy }}</td>
<td class="tb-col">{{ $item->letterIssueDate }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                <ul class="d-flex flex-wrap ">
                <li><a href="{{route('recruit.experienceletter.show',[$item->experienceletter_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                 <li><a href="{{route('recruit.experienceletter.edit',[$item->experienceletter_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                <li><button type="button" data-route="{{route('recruit.experienceletter.destroy',[$item->experienceletter_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
               </ul> </td>
               </tr>

        @endforeach

    </tbody>
</table>