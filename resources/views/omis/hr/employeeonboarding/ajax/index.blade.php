<table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
    <thead class="table-light">
        <tr>
        <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">employee_id</span></th>


<th class="tb-col"><span class="overline-title">workingShift</span></th>
<th class="tb-col"><span class="overline-title">workingHour</span></th>
<th class="tb-col"><span class="overline-title">workingMode</span></th>




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

<td class="tb-col">{{ $item->workingShift }}</td>
<td class="tb-col">{{ $item->workingHour }}</td>
<td class="tb-col">{{ $item->workingMode }}</td>


<td class="tb-col">
                <ul class="d-flex flex-wrap ">
                <li><a href="{{route('hr.employeeonboarding.show',[$item->employeeonboarding_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                 <li><a href="{{route('hr.employeeonboarding.edit',[$item->employeeonboarding_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                <li><button type="button" data-route="{{route('hr.employeeonboarding.destroy',[$item->employeeonboarding_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
               </ul> </td>
               </tr>

        @endforeach

    </tbody>
</table>