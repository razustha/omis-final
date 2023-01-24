<table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
    <thead class="table-light">
        <tr>
        <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">title</span></th>
<th class="tb-col"><span class="overline-title">fullName</span></th>
<th class="tb-col"><span class="overline-title">financialYear</span></th>
<th class="tb-col"><span class="overline-title">currency</span></th>
<th class="tb-col"><span class="overline-title">exchangeRate</span></th>
<th class="tb-col"><span class="overline-title">date</span></th>
<th class="tb-col"><span class="overline-title">dailyAllowence</span></th>
<th class="tb-col"><span class="overline-title">food</span></th>
<th class="tb-col"><span class="overline-title">hotelBill</span></th>
<th class="tb-col"><span class="overline-title">officialMeeting</span></th>
<th class="tb-col"><span class="overline-title">transportation</span></th>
<th class="tb-col"><span class="overline-title">consultantAccomodation</span></th>
<th class="tb-col"><span class="overline-title">receiptNumber</span></th>
<th class="tb-col"><span class="overline-title">total</span></th>
<th class="tb-col"><span class="overline-title">amount</span></th>
<th class="tb-col"><span class="overline-title">recievedAdvance</span></th>
<th class="tb-col"><span class="overline-title">totalExpense</span></th>
<th class="tb-col"><span class="overline-title">payBalance</span></th>
<th class="tb-col"><span class="overline-title">requestedName</span></th>
<th class="tb-col"><span class="overline-title">requestedDesignation</span></th>
<th class="tb-col"><span class="overline-title">requestedDate</span></th>
<th class="tb-col"><span class="overline-title">checkedName</span></th>
<th class="tb-col"><span class="overline-title">checkedDesignation</span></th>
<th class="tb-col"><span class="overline-title">checkedDate</span></th>
<th class="tb-col"><span class="overline-title">recommendName</span></th>
<th class="tb-col"><span class="overline-title">recommendedDesignation</span></th>
<th class="tb-col"><span class="overline-title">recommendDate</span></th>
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
            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->title }}</td>
<td class="tb-col">{{ $item->fullName }}</td>
<td class="tb-col">{{ $item->financialYear }}</td>
<td class="tb-col">{{ $item->currency }}</td>
<td class="tb-col">{{ $item->exchangeRate }}</td>
<td class="tb-col">{{ $item->date }}</td>
<td class="tb-col">{{ $item->dailyAllowence }}</td>
<td class="tb-col">{{ $item->food }}</td>
<td class="tb-col">{{ $item->hotelBill }}</td>
<td class="tb-col">{{ $item->officialMeeting }}</td>
<td class="tb-col">{{ $item->transportation }}</td>
<td class="tb-col">{{ $item->consultantAccomodation }}</td>
<td class="tb-col">{{ $item->receiptNumber }}</td>
<td class="tb-col">{{ $item->total }}</td>
<td class="tb-col">{{ $item->amount }}</td>
<td class="tb-col">{{ $item->recievedAdvance }}</td>
<td class="tb-col">{{ $item->totalExpense }}</td>
<td class="tb-col">{{ $item->payBalance }}</td>
<td class="tb-col">{{ $item->requestedName }}</td>
<td class="tb-col">{{ $item->requestedDesignation }}</td>
<td class="tb-col">{{ $item->requestedDate }}</td>
<td class="tb-col">{{ $item->checkedName }}</td>
<td class="tb-col">{{ $item->checkedDesignation }}</td>
<td class="tb-col">{{ $item->checkedDate }}</td>
<td class="tb-col">{{ $item->recommendName }}</td>
<td class="tb-col">{{ $item->recommendedDesignation }}</td>
<td class="tb-col">{{ $item->recommendDate }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                <ul class="d-flex flex-wrap ">
                <li><a href="{{route('finance.expensesclaim.show',[$item->expensesClaim_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                 <li><a href="{{route('finance.expensesclaim.edit',[$item->expensesClaim_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                <li><button type="button" data-route="{{route('finance.expensesclaim.destroy',[$item->expensesClaim_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
               </ul> </td>
               </tr>

        @endforeach

    </tbody>
</table>