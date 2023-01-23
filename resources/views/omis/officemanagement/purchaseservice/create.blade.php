@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Add Purchaseservice</h1>

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
                <form method="POST" action="{{route('officemanagement.purchaseservice.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("purchaseTitle","purchaseTitle","PurchaseTitle")}}
</div><div class="col-lg-6">{{createText("contractName","contractName","ContractName")}}
</div><div class="col-lg-6">{{createText("referenceNumber","referenceNumber","ReferenceNumber")}}
</div><div class="col-lg-6">{{createDate("date","date","Date",'','','')}}
</div><div class="col-lg-6">{{createText("vatNumber","vatNumber","VatNumber")}}
</div><div class="col-lg-6">{{createText("address","address","Address")}}
</div><div class="col-lg-6">{{createText("contact","contact","Contact")}}
</div><div class="col-lg-6">{{createText("serialNumber","serialNumber","SerialNumber")}}
</div><div class="col-lg-6">{{createText("descriptions","descriptions","Descriptions")}}
</div><div class="col-lg-6">{{createText("units","units","Units")}}
</div><div class="col-lg-6">{{createText("quantity","quantity","Quantity")}}
</div><div class="col-lg-6">{{createText("rate","rate","Rate")}}
</div><div class="col-lg-4">{{createText("amount","amount","Amount")}}
</div><div class="col-lg-4">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks",'',"remarks","",'')}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection