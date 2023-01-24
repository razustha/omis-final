<table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
    <thead class="table-light">
        <tr>
        <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">applyJobTitle</span></th>
<th class="tb-col"><span class="overline-title">applicantsName</span></th>
<th class="tb-col"><span class="overline-title">applyedDepartmentName</span></th>
<th class="tb-col"><span class="overline-title">workingExperience</span></th>
<th class="tb-col"><span class="overline-title">previousWorkingCompanyName</span></th>
<th class="tb-col"><span class="overline-title">applyDate</span></th>
<th class="tb-col"><span class="overline-title">recommendedBy</span></th>
<th class="tb-col"><span class="overline-title">portfolio</span></th>
<th class="tb-col"><span class="overline-title">fullTime</span></th>
<th class="tb-col"><span class="overline-title">partTime</span></th>
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
            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->applyJobTitle }}</td>
<td class="tb-col">{{ $item->applicantsName }}</td>
<td class="tb-col">{{ $item->applyedDepartmentName }}</td>
<td class="tb-col">{{ $item->workingExperience }}</td>
<td class="tb-col">{{ $item->previousWorkingCompanyName }}</td>
<td class="tb-col">{{ $item->applyDate }}</td>
<td class="tb-col">{{ $item->recommendedBy }}</td>
<td class="tb-col">{{ $item->portfolio }}</td>
<td class="tb-col">{{ $item->fullTime }}</td>
<td class="tb-col">{{ $item->partTime }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                <ul class="d-flex flex-wrap ">
                <li><a href="{{route('recruit.jobapplication.show',[$item->jobapplication_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                 <li><a href="{{route('recruit.jobapplication.edit',[$item->jobapplication_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                <li><button type="button" data-route="{{route('recruit.jobapplication.destroy',[$item->jobapplication_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
               </ul> </td>
               </tr>

        @endforeach

    </tbody>
</table>