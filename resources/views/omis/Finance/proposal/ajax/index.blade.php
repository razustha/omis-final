<table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
    <thead class="table-light">
        <tr>
        <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">applicantName_id</span></th>
<th class="tb-col"><span class="overline-title">deparmentName_id</span></th>
<th class="tb-col"><span class="overline-title">proposalTitle</span></th>
<th class="tb-col"><span class="overline-title">proposalDetails</span></th>
<th class="tb-col"><span class="overline-title">proposalSubmittedBy</span></th>
<th class="tb-col"><span class="overline-title">proposalSubmittedTo</span></th>
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
            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->applicantName_id }}</td>
<td class="tb-col">{{ $item->deparmentName_id }}</td>
<td class="tb-col">{{ $item->proposalTitle }}</td>
<td class="tb-col">{{ $item->proposalDetails }}</td>
<td class="tb-col">{{ $item->proposalSubmittedBy }}</td>
<td class="tb-col">{{ $item->proposalSubmittedTo }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                <ul class="d-flex flex-wrap ">
                <li><a href="{{route('finance.proposal.show',[$item->proposal_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                 <li><a href="{{route('finance.proposal.edit',[$item->proposal_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                <li><button type="button" data-route="{{route('finance.proposal.destroy',[$item->proposal_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
               </ul> </td>
               </tr>

        @endforeach

    </tbody>
</table>