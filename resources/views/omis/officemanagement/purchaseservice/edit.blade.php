@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit Purchase service</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('officemanagement.purchaseservice.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('officemanagement.purchaseservice.update',[$data->prchaseService_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("purchaseTitle","purchaseTitle","PurchaseTitle",'',$data->purchaseTitle)}}
</div><div class="col-lg-6">{{createText("contractName","contractName","ContractName",'',$data->contractName)}}
</div><div class="col-lg-6">{{createText("referenceNumber","referenceNumber","ReferenceNumber",'',$data->referenceNumber)}}
</div><div class="col-lg-6">{{createText("date","date","Date",'',$data->date)}}
</div><div class="col-lg-6">{{createText("vatNumber","vatNumber","VatNumber",'',$data->vatNumber)}}
</div><div class="col-lg-6">{{createText("address","address","Address",'',$data->address)}}
</div><div class="col-lg-6">{{createText("contact","contact","Contact",'',$data->contact)}}
</div><div class="col-lg-6">{{createText("serialNumber","serialNumber","SerialNumber",'',$data->serialNumber)}}
</div><div class="col-lg-6">{{createText("descriptions","descriptions","Descriptions",'',$data->descriptions)}}
</div><div class="col-lg-6">{{createText("units","units","Units",'',$data->units)}}
</div><div class="col-lg-6">{{createText("quantity","quantity","Quantity",'',$data->quantity)}}
</div><div class="col-lg-6">{{createText("rate","rate","Rate",'',$data->rate)}}
</div><div class="col-lg-4">{{createText("amount","amount","Amount",'',$data->amount)}}
</div><div class="col-lg-4">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks",'',"remarks","",$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection