@extends('omis.partials.layouts')
        @section('content')
            <div class="nk-content">
                <div class="container">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <div class="nk-block-head-between flex-wrap gap g-2">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title">Travelreports List</h1>
                                            <nav>
                                                <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                    <li class="breadcrumb-item"><a href="#">Travelreports</a></li>
                                                    <li class="breadcrumb-item"><a href="#">Travelreports Manage</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">Travelreports
                                                    </li>
                                                </ol>
                                            </nav>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <ul class="d-flex">
                                            <button class="btn btn-primary btn-add" data-bs-toggle="offcanvas" data-bs-target="#addOffcanvas">  <em class="icon ni ni-plus"></em>Add Travelreports</button>
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
<th class="tb-col"><span class="overline-title">title</span></th>
<th class="tb-col"><span class="overline-title">fullName</span></th>
<th class="tb-col"><span class="overline-title">departmentSector</span></th>
<th class="tb-col"><span class="overline-title">visitedLocation</span></th>
<th class="tb-col"><span class="overline-title">visitedDate</span></th>
<th class="tb-col"><span class="overline-title">activities</span></th>
<th class="tb-col"><span class="overline-title">visitObjectives</span></th>
<th class="tb-col"><span class="overline-title">keyHighlights</span></th>
<th class="tb-col"><span class="overline-title">achievement</span></th>
<th class="tb-col"><span class="overline-title">observation</span></th>
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
<td class="tb-col">{{ $item->departmentSector }}</td>
<td class="tb-col">{{ $item->visitedLocation }}</td>
<td class="tb-col">{{ $item->visitedDate }}</td>
<td class="tb-col">{{ $item->activities }}</td>
<td class="tb-col">{{ $item->visitObjectives }}</td>
<td class="tb-col">{{ $item->keyHighlights }}</td>
<td class="tb-col">{{ $item->achievement }}</td>
<td class="tb-col">{{ $item->observation }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                    <ul class="d-flex flex-wrap ">
                                                    <li><a href="{{route('reports.travelreports.show',[$item->travelReports_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                                                   <li> <button class="btn btn-color-primary btn-hover-primary btn-icon btn-soft btn-addCity" data-route="{{route('reports.travelreports.edit',[$item->travelReports_id])}}" data-bs-toggle="offcanvas" data-bs-target="#editoffcanvas">  <em
                                                            class="icon ni ni-edit"></em></button> </li>
                                                    <li><button type="button" data-route="{{route('reports.travelreports.destroy',[$item->travelReports_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
                                                   </ul> </td>
                                                   <tr>

                                            @endforeach

                                        </tbody>
                                    </table>
                                    {{-- Add Modal --}}
                           <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                            <div class="offcanvas-header border-bottom border-light">
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Travelreports</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body" data-simplebar>
                              <div class="card h-100">
                                    <div class="card-body">
                                        <form >
 <input type="hidden" name="_token" value="vwADvyetHVewekrMj3k7Bpg4D9XdaetgYlYpUR6U"> 
<div class="row"><div class="col-lg-6">            <label for="title" class="form-label col-form-label"> Title </label>
            <div class="form-control-wrap">
                <input type="text" id="title" placeholder="" name="title" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="fullName" class="form-label col-form-label"> FullName </label>
            <div class="form-control-wrap">
                <input type="text" id="fullName" placeholder="" name="fullName" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="departmentSector" class="form-label col-form-label"> DepartmentSector </label>
            <div class="form-control-wrap">
                <input type="text" id="departmentSector" placeholder="" name="departmentSector" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="visitedLocation" class="form-label col-form-label"> VisitedLocation </label>
            <div class="form-control-wrap">
                <input type="text" id="visitedLocation" placeholder="" name="visitedLocation" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="visitedDate" class="form-label col-form-label"> VisitedDate </label>
            <div class="form-control-wrap">
                <input type="text" id="visitedDate" placeholder="" name="visitedDate" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="activities" class="form-label col-form-label"> Activities </label>
            <div class="form-control-wrap">
                <input type="text" id="activities" placeholder="" name="activities" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="visitObjectives" class="form-label col-form-label"> VisitObjectives </label>
            <div class="form-control-wrap">
                <input type="text" id="visitObjectives" placeholder="" name="visitObjectives" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="keyHighlights" class="form-label col-form-label"> KeyHighlights </label>
            <div class="form-control-wrap">
                <input type="text" id="keyHighlights" placeholder="" name="keyHighlights" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="achievement" class="form-label col-form-label"> Achievement </label>
            <div class="form-control-wrap">
                <input type="text" id="achievement" placeholder="" name="achievement" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="observation" class="form-label col-form-label"> Observation </label>
            <div class="form-control-wrap">
                <input type="text" id="observation" placeholder="" name="observation" class="form-control " value="">
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
                                    <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Travelreports</h5><button type="button" class="btn-close"
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
        