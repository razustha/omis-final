@extends('omis.partials.layouts')
    @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="card-body">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title">Leave Type List</h1>
                                        <nav>
                                            <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                <li class="breadcrumb-item"><a href="#">Leave Type</a></li>
                                                <li class="breadcrumb-item"><a href="#">Leave Type Manage</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Leave Type
                                                </li>
                                            </ol>
                                        </nav>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="d-flex">
                                        {!!createCanvasButton("customBtnAdd","","Leave Type","master.leavetype.create") !!}
                                    </ul>
                                </div>
                            </div>
                        </div>
                                <p class="col-form-label form-label" style="font-size: 20px">Paid Leave : @if($paidLeave != null )
                                        <b>{{$paidLeave->paidLeave}}</b> / month @else <b
                                            class="badge badge-warning">Not Added</b>@endif</p>
                                <caption>(This is the no. of paid leaves an employee can take in a month.)</caption>
                                <hr/>
                             

                                
                                <form action="{{route('master.leavetype.addPaidLeave')}}" method="POST">
                                <div class="row d-flex align-items-center">   
                                @csrf
                                    <div class="col-9  form-group">
                                        <label for="paidLeave" class="font-weight-normal col-form-label">Change paid leave per month</label>
                                        <input type="number" class="form-control" name="paidLeave" id="paidLeave">
                                    </div>
                                    <div class="col-3 form-group mt-5">
                                        <button type="submit" class="btn btn-success">Change</button>
                                    </div>
                                    </div>
                                </form>
                            

                            </div>

                            
                        
                        <div class="nk-block">
                            <div class="card mt-3">
                                <table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
                                    <thead class="table-light">
                                        <tr>
                                        <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">leave Type</span></th>
<!-- <th class="tb-col"><span class="overline-title">leavePaidStatus</span></th> -->
<th class="tb-col"><span class="overline-title">number Of Leave</span></th>
<!-- <th class="tb-col"><span class="overline-title">monthlyLimit</span></th> -->
<!-- <th class="tb-col"><span class="overline-title">colorCode</span></th>
<th class="tb-col"><span class="overline-title">assignEmployee</span></th>
<th class="tb-col"><span class="overline-title">alias</span></th> -->
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
                                            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->leaveType }}</td>
<!-- <td class="tb-col">{{ $item->leavePaidStatus }}</td> -->
<td class="tb-col">{{ $item->leaveCount }}</td>
<!-- <td class="tb-col">{{ $item->monthlyLimit }}</td>
<td class="tb-col">{{ $item->colorCode }}</td>
<td class="tb-col">{{ $item->assignEmployee }}</td>
<td class="tb-col">{{ $item->alias }}</td> -->
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                <li>
                                                    {!! actionCanvasButton("","btn-showCanvas","showoffcanvas","eye",'master.leavetype.show',$item->leavetype_id) !!}
                                                </li>
                                               <li>
                                                        {!! actionCanvasButton("","btn-editCanvas","editoffcanvas","edit",'master.leavetype.edit',$item->leavetype_id) !!}
                                                </li>
                                                <li>{!! deleteCanvasButton("","btn-hover-danger",'master.leavetype.destroy',$item->leavetype_id) !!}</li>
                                               </ul> </td>
                                               </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                                {{-- Add Modal --}}
                       <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                        <div class="offcanvas-header border-bottom border-light">
                            <h5 class="offcanvas-title" id="offcanvasTopLabel">Add Leave Type</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body" data-simplebar>
                          <div class="card h-100">
                                <div class="card-body">
                                    <div class="alert alert-danger print-error-msg" style="display:none">
                                        <ul></ul>
                                    </div>
                                    <div id="addConvasByAjax">
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            {{-- Edit Modal --}}
                            <div class="offcanvas offcanvas-end offcanvas-size-xxlg editoffcanvas" id="editoffcanvas">
                            <div class="offcanvas-header border-bottom border-light">
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit Leave Type<h5><button type="button" class="btn-close"
                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body" data-simplebar>
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="alert alert-danger print-error-msg" style="display:none">
                                            <ul></ul>
                                        </div>
                                        <div id="editConvasByAjax">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Edit Modal --}}

                            {{-- Edit Modal --}}
                            <div class="offcanvas offcanvas-end offcanvas-size-xxlg showoffcanvas" id="showoffcanvas">

                            </div>
                            {{-- Edit Modal --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
