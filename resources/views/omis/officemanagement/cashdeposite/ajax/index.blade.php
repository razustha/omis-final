<table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
    <thead class="table-light">
        <tr>
        <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">mainTitle</span></th>
<th class="tb-col"><span class="overline-title">DATE</span></th>
<th class="tb-col"><span class="overline-title">amountWords</span></th>
<th class="tb-col"><span class="overline-title">thousand</span></th>
<th class="tb-col"><span class="overline-title">fiveHundred</span></th>
<th class="tb-col"><span class="overline-title">hundred</span></th>
<th class="tb-col"><span class="overline-title">fifty</span></th>
<th class="tb-col"><span class="overline-title">twenty</span></th>
<th class="tb-col"><span class="overline-title">ten</span></th>
<th class="tb-col"><span class="overline-title">five</span></th>
<th class="tb-col"><span class="overline-title">two</span></th>
<th class="tb-col"><span class="overline-title">one</span></th>
<th class="tb-col"><span class="overline-title">fullName</span></th>
<th class="tb-col"><span class="overline-title">position</span></th>
<th class="tb-col"><span class="overline-title">declaredDate</span></th>
<th class="tb-col"><span class="overline-title">approvedName</span></th>
<th class="tb-col"><span class="overline-title">approvedPosition</span></th>
<th class="tb-col"><span class="overline-title">approvedDate</span></th>
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
            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->mainTitle }}</td>
<td class="tb-col">{{ $item->DATE }}</td>
<td class="tb-col">{{ $item->amountWords }}</td>
<td class="tb-col">{{ $item->thousand }}</td>
<td class="tb-col">{{ $item->fiveHundred }}</td>
<td class="tb-col">{{ $item->hundred }}</td>
<td class="tb-col">{{ $item->fifty }}</td>
<td class="tb-col">{{ $item->twenty }}</td>
<td class="tb-col">{{ $item->ten }}</td>
<td class="tb-col">{{ $item->five }}</td>
<td class="tb-col">{{ $item->two }}</td>
<td class="tb-col">{{ $item->one }}</td>
<td class="tb-col">{{ $item->fullName }}</td>
<td class="tb-col">{{ $item->position }}</td>
<td class="tb-col">{{ $item->declaredDate }}</td>
<td class="tb-col">{{ $item->approvedName }}</td>
<td class="tb-col">{{ $item->approvedPosition }}</td>
<td class="tb-col">{{ $item->approvedDate }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                <ul class="d-flex flex-wrap ">
                <li><a href="{{route('officemanagement.cashdeposite.show',[$item->cashDeposite_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                 <li><a href="{{route('officemanagement.cashdeposite.edit',[$item->cashDeposite_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                <li><button type="button" data-route="{{route('officemanagement.cashdeposite.destroy',[$item->cashDeposite_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
               </ul> </td>
               </tr>

        @endforeach

    </tbody>
</table>