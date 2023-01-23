@extends('omis.partials.layouts')
        @section('content')
            <div class="nk-content">
                <div class="container">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <div class="nk-block-head-between flex-wrap gap g-2">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title">Purchaseservice List</h1>
                                            <nav>
                                                <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                    <li class="breadcrumb-item"><a href="#">Purchaseservice</a></li>
                                                    <li class="breadcrumb-item"><a href="#">Purchaseservice Manage</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">Purchaseservice
                                                    </li>
                                                </ol>
                                            </nav>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <ul class="d-flex">
                                            <button class="btn btn-primary btn-add" data-bs-toggle="offcanvas" data-bs-target="#addOffcanvas">  <em class="icon ni ni-plus"></em>Add Purchaseservice</button>
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
<th class="tb-col"><span class="overline-title">purchaseTitle</span></th>
<th class="tb-col"><span class="overline-title">contractName</span></th>
<th class="tb-col"><span class="overline-title">referenceNumber</span></th>
<th class="tb-col"><span class="overline-title">date</span></th>
<th class="tb-col"><span class="overline-title">vatNumber</span></th>
<th class="tb-col"><span class="overline-title">address</span></th>
<th class="tb-col"><span class="overline-title">contact</span></th>
<th class="tb-col"><span class="overline-title">serialNumber</span></th>
<th class="tb-col"><span class="overline-title">descriptions</span></th>
<th class="tb-col"><span class="overline-title">units</span></th>
<th class="tb-col"><span class="overline-title">quantity</span></th>
<th class="tb-col"><span class="overline-title">rate</span></th>
<th class="tb-col"><span class="overline-title">amount</span></th>
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
                                                <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->purchaseTitle }}</td>
<td class="tb-col">{{ $item->contractName }}</td>
<td class="tb-col">{{ $item->referenceNumber }}</td>
<td class="tb-col">{{ $item->date }}</td>
<td class="tb-col">{{ $item->vatNumber }}</td>
<td class="tb-col">{{ $item->address }}</td>
<td class="tb-col">{{ $item->contact }}</td>
<td class="tb-col">{{ $item->serialNumber }}</td>
<td class="tb-col">{{ $item->descriptions }}</td>
<td class="tb-col">{{ $item->units }}</td>
<td class="tb-col">{{ $item->quantity }}</td>
<td class="tb-col">{{ $item->rate }}</td>
<td class="tb-col">{{ $item->amount }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                    <ul class="d-flex flex-wrap ">
                                                    <li><a href="{{route('officemanagement.purchaseservice.show',[$item->prchaseService_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                                                   <li> <button class="btn btn-color-primary btn-hover-primary btn-icon btn-soft btn-addCity" data-route="{{route('officemanagement.purchaseservice.edit',[$item->prchaseService_id])}}" data-bs-toggle="offcanvas" data-bs-target="#editoffcanvas">  <em
                                                            class="icon ni ni-edit"></em></button> </li>
                                                    <li><button type="button" data-route="{{route('officemanagement.purchaseservice.destroy',[$item->prchaseService_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
                                                   </ul> </td>
                                                   <tr>

                                            @endforeach

                                        </tbody>
                                    </table>
                                    {{-- Add Modal --}}
                           <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                            <div class="offcanvas-header border-bottom border-light">
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Purchaseservice</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body" data-simplebar>
                              <div class="card h-100">
                                    <div class="card-body">
                                        <form >
 <input type="hidden" name="_token" value="vwADvyetHVewekrMj3k7Bpg4D9XdaetgYlYpUR6U"> 
<div class="row"><div class="col-lg-6">            <label for="purchaseTitle" class="form-label col-form-label"> PurchaseTitle </label>
            <div class="form-control-wrap">
                <input type="text" id="purchaseTitle" placeholder="" name="purchaseTitle" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="contractName" class="form-label col-form-label"> ContractName </label>
            <div class="form-control-wrap">
                <input type="text" id="contractName" placeholder="" name="contractName" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="referenceNumber" class="form-label col-form-label"> ReferenceNumber </label>
            <div class="form-control-wrap">
                <input type="text" id="referenceNumber" placeholder="" name="referenceNumber" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="date" class="form-label col-form-label"> Date </label>
            <div class="form-control-wrap">
                <input type="text" id="date" placeholder="" name="date" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="vatNumber" class="form-label col-form-label"> VatNumber </label>
            <div class="form-control-wrap">
                <input type="text" id="vatNumber" placeholder="" name="vatNumber" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="address" class="form-label col-form-label"> Address </label>
            <div class="form-control-wrap">
                <input type="text" id="address" placeholder="" name="address" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="contact" class="form-label col-form-label"> Contact </label>
            <div class="form-control-wrap">
                <input type="text" id="contact" placeholder="" name="contact" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="serialNumber" class="form-label col-form-label"> SerialNumber </label>
            <div class="form-control-wrap">
                <input type="text" id="serialNumber" placeholder="" name="serialNumber" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="descriptions" class="form-label col-form-label"> Descriptions </label>
            <div class="form-control-wrap">
                <input type="text" id="descriptions" placeholder="" name="descriptions" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="units" class="form-label col-form-label"> Units </label>
            <div class="form-control-wrap">
                <input type="text" id="units" placeholder="" name="units" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="quantity" class="form-label col-form-label"> Quantity </label>
            <div class="form-control-wrap">
                <input type="text" id="quantity" placeholder="" name="quantity" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="rate" class="form-label col-form-label"> Rate </label>
            <div class="form-control-wrap">
                <input type="text" id="rate" placeholder="" name="rate" class="form-control " value="">
            </div>
        
</div><div class="col-lg-6">            <label for="amount" class="form-label col-form-label"> Amount </label>
            <div class="form-control-wrap">
                <input type="text" id="amount" placeholder="" name="amount" class="form-control " value="">
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
                                    <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Purchaseservice</h5><button type="button" class="btn-close"
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
        