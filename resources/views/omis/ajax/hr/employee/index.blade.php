<table class="datatable-init table" data-nk-container="table-responsive">
        <thead class="table-light">
            <tr>
            <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">employeeFirstName</span></th>
<th class="tb-col"><span class="overline-title">employeeMiddleName</span></th>
<th class="tb-col"><span class="overline-title">employeeLastName</span></th>
<th class="tb-col"><span class="overline-title">phone</span></th>
<th class="tb-col"><span class="overline-title">email</span></th>
<th class="tb-col"><span class="overline-title">employeeRole</span></th>
<th class="tb-col"><span class="overline-title">employeeSalary</span></th>
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
                <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->employeeFirstName }}</td>
<td class="tb-col">{{ $item->employeeMiddleName }}</td>
<td class="tb-col">{{ $item->employeeLastName }}</td>
<td class="tb-col">{{ $item->phone }}</td>
<td class="tb-col">{{ $item->email }}</td>
<td class="tb-col">{{ $item->employeeRole }}</td>
<td class="tb-col">{{ $item->employeeSalary }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                    <ul class="d-flex flex-wrap ">
                    <li><a href="{{route('hr.employee.show',[$item->employee_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                     <li><a href="{{route('hr.employee.edit',[$item->employee_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                    <li><button type="button" data-route="{{route('hr.employee.destroy',[$item->employee_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
                   </ul> </td> 
                   <tr>
            
            @endforeach

        </tbody>
    </table>