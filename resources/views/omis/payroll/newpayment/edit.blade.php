@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit Newpayment</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('payroll.newpayment.index') }}" class="btn btn-md d-md-none btn-primary">
                                <em class="icon ni ni-plus"></em>
                                <span>View Cities</span>
                            </a>
                        </li>

                    </ul>
                </div>
                </div>
            </div>

            <div class="nk-block">

                        <div class="card">
                            <div class="card-body">
                <form method="POST" action="{{route('payroll.newpayment.update',[$data->newpayment_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("employeeAccountNumber","employeeAccountNumber","Account Number",'',$data->employeeAccountNumber)}}
</div><div class="col-lg-6">{{createText("employeeName","employeeName","Employee Name",'',$data->employeeName)}}
</div><div class="col-lg-6">{{createDate("paidDate","paidDate","Date",'',$data->paidDate)}}
</div><div class="col-lg-6">{{createText("paidAmount","paidAmount","Amount",'',$data->paidAmount)}}
</div><div class="col-lg-6">{{createText("paymentMethod","paymentMethod","Payment Method",'',$data->paymentMethod)}}
</div><div class="col-lg-6">{{createText("selectDepartment","selectDepartment","Select Department",'',$data->selectDepartment)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection