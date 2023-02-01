<table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
    <thead class="table-light">
        <tr>
        <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">user_type</span></th>
<th class="tb-col"><span class="overline-title">company_id</span></th>
<th class="tb-col"><span class="overline-title">branch_id</span></th>
<th class="tb-col"><span class="overline-title">name</span></th>
<th class="tb-col"><span class="overline-title">mobile</span></th>
<th class="tb-col"><span class="overline-title">email</span></th>
<th class="tb-col"><span class="overline-title">email_verified_at</span></th>
<th class="tb-col"><span class="overline-title">password</span></th>
<th class="tb-col"><span class="overline-title">remember_token</span></th>
<th class="tb-col"><span class="overline-title">created_by</span></th>
<th class="tb-col"><span class="overline-title">updated_by</span></th>
<th class="tb-col"><span class="overline-title">status</span></th>
<th class="tb-col"><span class="overline-title">is_deleted</span></th>
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
            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->user_type }}</td>
<td class="tb-col">{{ $item->company_id }}</td>
<td class="tb-col">{{ $item->branch_id }}</td>
<td class="tb-col">{{ $item->name }}</td>
<td class="tb-col">{{ $item->mobile }}</td>
<td class="tb-col">{{ $item->email }}</td>
<td class="tb-col">{{ $item->email_verified_at }}</td>
<td class="tb-col">{{ $item->password }}</td>
<td class="tb-col">{{ $item->remember_token }}</td>
<td class="tb-col">{{ $item->created_by }}</td>
<td class="tb-col">{{ $item->updated_by }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">{{ $item->is_deleted }}</td>
<td class="tb-col">
                <ul class="d-flex flex-wrap ">
                <li><a href="{{route('setting.users.show',[$item->id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                 <li><a href="{{route('setting.users.edit',[$item->id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                <li><button type="button" data-route="{{route('setting.users.destroy',[$item->id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
               </ul> </td>
               </tr>

        @endforeach

    </tbody>
</table>