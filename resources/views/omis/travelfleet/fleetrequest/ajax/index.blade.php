<table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
    <thead class="table-light">
        <tr>
        <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">fleet_id</span></th>
<th class="tb-col"><span class="overline-title">fleetName</span></th>
<th class="tb-col"><span class="overline-title">modelNumber</span></th>
<th class="tb-col"><span class="overline-title">numberPlate_id</span></th>
<th class="tb-col"><span class="overline-title">numberPlateType</span></th>
<th class="tb-col"><span class="overline-title">plateNumber</span></th>
<th class="tb-col"><span class="overline-title">rootPermit</span></th>
<th class="tb-col"><span class="overline-title">issueDate</span></th>
<th class="tb-col"><span class="overline-title">expireDate</span></th>
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
            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->fleet_id }}</td>
<td class="tb-col">{{ $item->fleetName }}</td>
<td class="tb-col">{{ $item->modelNumber }}</td>
<td class="tb-col">{{ $item->numberPlate_id }}</td>
<td class="tb-col">{{ $item->numberPlateType }}</td>
<td class="tb-col">{{ $item->plateNumber }}</td>
<td class="tb-col">{{ $item->rootPermit }}</td>
<td class="tb-col">{{ $item->issueDate }}</td>
<td class="tb-col">{{ $item->expireDate }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                <ul class="d-flex flex-wrap ">
                <li><a href="{{route('travelfleet.fleetrequest.show',[$item->fleetRequest_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                 <li><a href="{{route('travelfleet.fleetrequest.edit',[$item->fleetRequest_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                <li><button type="button" data-route="{{route('travelfleet.fleetrequest.destroy',[$item->fleetRequest_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
               </ul> </td>
               </tr>

        @endforeach

    </tbody>
</table>