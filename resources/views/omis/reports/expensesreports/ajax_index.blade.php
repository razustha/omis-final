@extends('omis.partials.layouts')
        @section('content')
            <div class="nk-content">
                <div class="container">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <div class="nk-block-head-between flex-wrap gap g-2">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title">Expensesreports List</h1>
                                            <nav>
                                                <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                    <li class="breadcrumb-item"><a href="#">Expensesreports</a></li>
                                                    <li class="breadcrumb-item"><a href="#">Expensesreports Manage</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">Expensesreports
                                                    </li>
                                                </ol>
                                            </nav>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <ul class="d-flex">
                                            <button class="btn btn-primary btn-add" data-bs-toggle="offcanvas" data-bs-target="#addOffcanvas">  <em class="icon ni ni-plus"></em>Add Expensesreports</button>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-block">
                                <div class="card">
                                    <table class="datatable-init table" data-nk-container="table-responsive">
                                        <thead class="table-light">
                                            <tr>
                                            <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">applicant_id</span></th>
<th class="tb-col"><span class="overline-title">expensesDesciption</span></th>
<th class="tb-col"><span class="overline-title">expensesReportBy</span></th>
<th class="tb-col"><span class="overline-title">totalExpenses</span></th>
<th class="tb-col"><span class="overline-title">issueDate</span></th>
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
                                                <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->applicant_id }}</td>
<td class="tb-col">{{ $item->expensesDesciption }}</td>
<td class="tb-col">{{ $item->expensesReportBy }}</td>
<td class="tb-col">{{ $item->totalExpenses }}</td>
<td class="tb-col">{{ $item->issueDate }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                    <ul class="d-flex flex-wrap ">
                                                    <li><a href="{{route('reports.expensesreports.show',[$item->expensesReports_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                                                   <li> <button class="btn btn-color-primary btn-hover-primary btn-icon btn-soft btn-addCity" data-route="{{route('reports.expensesreports.edit',[$item->expensesReports_id])}}" data-bs-toggle="offcanvas" data-bs-target="#editoffcanvas">  <em
                                                            class="icon ni ni-edit"></em></button> </li>
                                                    <li><button type="button" data-route="{{route('reports.expensesreports.destroy',[$item->expensesReports_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
                                                   </ul> </td>
                                                   <tr>

                                            @endforeach

                                        </tbody>
                                    </table>
                                    {{-- Add Modal --}}
                           <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                            <div class="offcanvas-header border-bottom border-light">
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Expensesreports</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body" data-simplebar>
                              <div class="card h-100">
                                    <div class="card-body">
                                        <form >
 <input type="hidden" name="_token" value="vwADvyetHVewekrMj3k7Bpg4D9XdaetgYlYpUR6U"> 
<div class="row"><div class="col-lg-6">            <label for="applicant_id" class="form-label col-form-label"> Applicant Id </label>
            <div class="form-control-wrap">
                <input type="text" id="applicant_id" placeholder="" name="applicant_id" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="expensesDesciption" class="form-label col-form-label"> ExpensesDesciption </label>
            <div class="form-control-wrap">
                <input type="text" id="expensesDesciption" placeholder="" name="expensesDesciption" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="expensesReportBy" class="form-label col-form-label"> ExpensesReportBy </label>
            <div class="form-control-wrap">
                <input type="text" id="expensesReportBy" placeholder="" name="expensesReportBy" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="totalExpenses" class="form-label col-form-label"> TotalExpenses </label>
            <div class="form-control-wrap">
                <input type="text" id="totalExpenses" placeholder="" name="totalExpenses" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="issueDate" class="form-label col-form-label"> IssueDate </label>
            <div class="form-control-wrap">
                <input type="text" id="issueDate" placeholder="" name="issueDate" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="alias" class="form-label col-form-label"> Alias </label>
            <div class="form-control-wrap">
                <input type="text" id="alias" placeholder="" name="alias" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">
                        <label for="status" class="form-label col-form-label"> Status </label>
                        <div class="form-control-wrap">
                        <select class="form-select " name="status" id="status" aria-label="Default select example">
                                                            <option value="1" selected>Active</option>
                                            <option value="0" >Inactive</option>
                                    </select>
                        </div>

            
</div><div class="col-lg-6">            <label for="remarks" class="form-label col-form-label"> Remarks </label>
            <div class="form-control-wrap">
                <input type="text" id="remarks" placeholder="" name="remarks" class="form-control " value="">
            </div>
        
</div> <br> <div class="col-md-12">                <button class="mt-3 btn btn-primary  btn-primary" type="submit">
                    Submit                </button>
            </div> </form>

                                        </div>
                                        </div>
                                    </div>
                                </div>

                            {{-- End of Add Modal --}}

                            {{-- Edit Modal --}}
                            <div class="offcanvas offcanvas-end offcanvas-size-xxlg editoffcanvas" id="editoffcanvas">
                                <div class="offcanvas-header border-bottom border-light">
                                    <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Expensesreports</h5><button type="button" class="btn-close"
                                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body" data-simplebar>
                                    <div class="card h-100">
                                        <div class="card-body" id="add_content">
                                            {{-- Dynamic content will be added here Content --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Edit Modal --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push("js")
<script>

    $(document).on("click", ".btn-addCity", function(obj) {
        var route = $(this).data("route");
        $.ajax({
            type: "get",
            url: route,
            success:function(res){
                $("#add_content").html(res.content);
            }
        })
    })
</script>
@endpush
        