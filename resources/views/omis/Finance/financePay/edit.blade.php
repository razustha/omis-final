@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit FinancePay</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('finance.financepay.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('finance.financepay.update',[$data->payeeName_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("payeePhone","payeePhone","PayeePhone",'',$data->payeePhone)}}
</div><div class="col-lg-6">{{createText("payeeAccount","payeeAccount","PayeeAccount",'',$data->payeeAccount)}}
</div><div class="col-lg-6">{{createText("payerName","payerName","PayerName",'',$data->payerName)}}
</div><div class="col-lg-6">{{createText("payerPhone","payerPhone","PayerPhone",'',$data->payerPhone)}}
</div><div class="col-lg-4">{{createText("payerAccount","payerAccount","PayerAccount",'',$data->payerAccount)}}
</div><div class="col-lg-4">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks",'',"remarks",'',"")}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection