@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Add Goodreceivedreconcile</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('inventory.goodreceivedreconcile.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('inventory.goodreceivedreconcile.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("goodReceivedReconcile_Title","goodReceivedReconcile_Title","GoodReceivedReconcile Title")}}
</div><div class="col-lg-6">{{createText("address","address","Address")}}
</div><div class="col-lg-6">{{createText("purchaseNumber","purchaseNumber","PurchaseNumber")}}
</div><div class="col-lg-6">{{createText("receiptNumber","receiptNumber","ReceiptNumber")}}
</div><div class="col-lg-6">{{createText("sn","sn","Sn")}}
</div><div class="col-lg-6">{{createText("goodsDetails","goodsDetails","GoodsDetails")}}
</div><div class="col-lg-6">{{createText("unit","unit","Unit")}}
</div><div class="col-lg-6">{{createText("quanitity","quanitity","Quanitity")}}
</div><div class="col-lg-6">{{createText("comments","comments","Comments")}}
</div><div class="col-lg-6">{{createText("receiverdName","receiverdName","ReceiverdName")}}
</div><div class="col-lg-6">{{createText("receivedPosition","receivedPosition","ReceivedPosition")}}
</div><div class="col-lg-6">{{createText("receivedDate","receivedDate","ReceivedDate")}}
</div><div class="col-lg-6">{{createText("receivedAddress","receivedAddress","ReceivedAddress")}}
</div><div class="col-lg-6">{{createText("organization","organization","Organization")}}
</div><div class="col-lg-6">{{createText("organizationDate","organizationDate","OrganizationDate")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection