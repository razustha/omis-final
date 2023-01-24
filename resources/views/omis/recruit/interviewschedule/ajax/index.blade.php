<table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
    <thead class="table-light">
        <tr>
        <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">applicants_id</span></th>
<th class="tb-col"><span class="overline-title">jobTitle</span></th>
<th class="tb-col"><span class="overline-title">jobDepartment</span></th>
<th class="tb-col"><span class="overline-title">interviewerName</span></th>
<th class="tb-col"><span class="overline-title">jobInterviewTime</span></th>
<th class="tb-col"><span class="overline-title">scheduleBy</span></th>
<th class="tb-col"><span class="overline-title">recommendedBy</span></th>
<th class="tb-col"><span class="overline-title">scheduleDate</span></th>
<th class="tb-col"><span class="overline-title">interviewMode</span></th>
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
            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->applicants_id }}</td>
<td class="tb-col">{{ $item->jobTitle }}</td>
<td class="tb-col">{{ $item->jobDepartment }}</td>
<td class="tb-col">{{ $item->interviewerName }}</td>
<td class="tb-col">{{ $item->jobInterviewTime }}</td>
<td class="tb-col">{{ $item->scheduleBy }}</td>
<td class="tb-col">{{ $item->recommendedBy }}</td>
<td class="tb-col">{{ $item->scheduleDate }}</td>
<td class="tb-col">{{ $item->interviewMode }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                <ul class="d-flex flex-wrap ">
                <li><a href="{{route('recruit.interviewschedule.show',[$item->interviewschedule_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                 <li><a href="{{route('recruit.interviewschedule.edit',[$item->interviewschedule_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                <li><button type="button" data-route="{{route('recruit.interviewschedule.destroy',[$item->interviewschedule_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
               </ul> </td>
               </tr>

        @endforeach

    </tbody>
</table>