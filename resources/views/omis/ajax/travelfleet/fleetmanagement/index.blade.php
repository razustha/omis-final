<table class="datatable-init table" data-nk-container="table-responsive">
        <thead class="table-light">
            <tr>
            <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">lesseeName</span></th>
<th class="tb-col"><span class="overline-title">lesseeAddress</span></th>
<th class="tb-col"><span class="overline-title">lessorName</span></th>
<th class="tb-col"><span class="overline-title">lessorContact</span></th>
<th class="tb-col"><span class="overline-title">vehicleType_id</span></th>
<th class="tb-col"><span class="overline-title">vehicleNumber</span></th>
<th class="tb-col"><span class="overline-title">driverName</span></th>
<th class="tb-col"><span class="overline-title">driverContact</span></th>
<th class="tb-col"><span class="overline-title">driverAddress</span></th>
<th class="tb-col"><span class="overline-title">organizationName</span></th>
<th class="tb-col"><span class="overline-title">staff_Id</span></th>
<th class="tb-col"><span class="overline-title">staffName</span></th>
<th class="tb-col"><span class="overline-title">staffIdentity</span></th>
<th class="tb-col"><span class="overline-title">totalPeople</span></th>
<th class="tb-col"><span class="overline-title">travelDateFrom</span></th>
<th class="tb-col"><span class="overline-title">travelDateTo</span></th>
<th class="tb-col"><span class="overline-title">NumerOfDays</span></th>
<th class="tb-col"><span class="overline-title">travelPlaceFrom</span></th>
<th class="tb-col"><span class="overline-title">travelPlaceTo</span></th>
<th class="tb-col"><span class="overline-title">costPerDay</span></th>
<th class="tb-col"><span class="overline-title">tax</span></th>
<th class="tb-col"><span class="overline-title">remainingAmount</span></th>
<th class="tb-col"><span class="overline-title">HCIName</span></th>
<th class="tb-col"><span class="overline-title">HCIDate</span></th>
<th class="tb-col"><span class="overline-title">HCIAddress</span></th>
<th class="tb-col"><span class="overline-title">vehileCompany_id</span></th>
<th class="tb-col"><span class="overline-title">vehileCompanyName</span></th>
<th class="tb-col"><span class="overline-title">vehicleCompanyDate</span></th>
<th class="tb-col"><span class="overline-title">vehicleCompanyAddress</span></th>
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
                <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->lesseeName }}</td>
<td class="tb-col">{{ $item->lesseeAddress }}</td>
<td class="tb-col">{{ $item->lessorName }}</td>
<td class="tb-col">{{ $item->lessorContact }}</td>
<td class="tb-col">{{ $item->vehicleType_id }}</td>
<td class="tb-col">{{ $item->vehicleNumber }}</td>
<td class="tb-col">{{ $item->driverName }}</td>
<td class="tb-col">{{ $item->driverContact }}</td>
<td class="tb-col">{{ $item->driverAddress }}</td>
<td class="tb-col">{{ $item->organizationName }}</td>
<td class="tb-col">{{ $item->staff_Id }}</td>
<td class="tb-col">{{ $item->staffName }}</td>
<td class="tb-col">{{ $item->staffIdentity }}</td>
<td class="tb-col">{{ $item->totalPeople }}</td>
<td class="tb-col">{{ $item->travelDateFrom }}</td>
<td class="tb-col">{{ $item->travelDateTo }}</td>
<td class="tb-col">{{ $item->NumerOfDays }}</td>
<td class="tb-col">{{ $item->travelPlaceFrom }}</td>
<td class="tb-col">{{ $item->travelPlaceTo }}</td>
<td class="tb-col">{{ $item->costPerDay }}</td>
<td class="tb-col">{{ $item->tax }}</td>
<td class="tb-col">{{ $item->remainingAmount }}</td>
<td class="tb-col">{{ $item->HCIName }}</td>
<td class="tb-col">{{ $item->HCIDate }}</td>
<td class="tb-col">{{ $item->HCIAddress }}</td>
<td class="tb-col">{{ $item->vehileCompany_id }}</td>
<td class="tb-col">{{ $item->vehileCompanyName }}</td>
<td class="tb-col">{{ $item->vehicleCompanyDate }}</td>
<td class="tb-col">{{ $item->vehicleCompanyAddress }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                    <ul class="d-flex flex-wrap ">
                    <li><a href="{{route('travelfleet.fleetmanagement.show',[$item->fleetmanagement_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                     <li><a href="{{route('travelfleet.fleetmanagement.edit',[$item->fleetmanagement_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                    <li><button type="button" data-route="{{route('travelfleet.fleetmanagement.destroy',[$item->fleetmanagement_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
                   </ul> </td>
                   <tr>

            @endforeach

        </tbody>
    </table>