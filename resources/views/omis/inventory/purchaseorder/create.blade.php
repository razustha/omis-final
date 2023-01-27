@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Add Purchaseorder</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('inventory.purchaseorder.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('inventory.purchaseorder.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("date","date","Date")}}
</div><div class="col-lg-6">{{createText("referenceNumber","referenceNumber","ReferenceNumber")}}
</div><div class="col-lg-6">{{createText("telePhone","telePhone","TelePhone")}}
</div><div class="col-lg-6">{{createText("venderName","venderName","VenderName")}}
</div><div class="col-lg-6">{{createText("contractorPAN","contractorPAN","ContractorPAN")}}
</div><div class="col-lg-6">{{createText("address","address","Address")}}
</div><div class="col-lg-6">{{createText("projectCode","projectCode","ProjectCode")}}
</div><div class="col-lg-6">{{createText("fundingSource","fundingSource","FundingSource")}}
</div><div class="col-lg-6">{{createText("goodsDescription","goodsDescription","GoodsDescription")}}
</div><div class="col-lg-6">{{createText("unit","unit","Unit")}}
</div><div class="col-lg-6">{{createText("totalUnit","totalUnit","TotalUnit")}}
</div><div class="col-lg-6">{{createText("unitRate","unitRate","UnitRate")}}
</div><div class="col-lg-6">{{createText("amount","amount","Amount")}}
</div><div class="col-lg-6">{{createText("totalAmount","totalAmount","TotalAmount")}}
</div><div class="col-lg-6">{{createText("specialRequest","specialRequest","SpecialRequest")}}
</div><div class="col-lg-6">{{createText("adminName","adminName","AdminName")}}
</div><div class="col-lg-6">{{createText("adminDesignation","adminDesignation","AdminDesignation")}}
</div><div class="col-lg-6">{{createText("adminDate","adminDate","AdminDate")}}
</div><div class="col-lg-6">{{createText("operationalName","operationalName","OperationalName")}}
</div><div class="col-lg-6">{{createText("operationalDesignation","operationalDesignation","OperationalDesignation")}}
</div><div class="col-lg-6">{{createText("operationalDate","operationalDate","OperationalDate")}}
</div><div class="col-lg-6">{{createText("vendorName","vendorName","VendorName")}}
</div><div class="col-lg-6">{{createText("vendorDesignation","vendorDesignation","VendorDesignation")}}
</div><div class="col-lg-6">{{createText("vendorDate","vendorDate","VendorDate")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection