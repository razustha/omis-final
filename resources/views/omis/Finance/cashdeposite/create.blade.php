@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Add Cashdeposite</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('finance.cashdeposite.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('finance.cashdeposite.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("mainTitle","mainTitle","MainTitle")}}
</div><div class="col-lg-6">{{createDate("DATE","DATE","DATE", "", "", "")}}
</div><div class="col-lg-6">{{createText("amountWords","amountWords","AmountWords")}}
</div><div class="col-lg-6">{{createText("thousand","thousand","Thousand")}}
</div><div class="col-lg-6">{{createText("fiveHundred","fiveHundred","FiveHundred")}}
</div><div class="col-lg-6">{{createText("hundred","hundred","Hundred")}}
</div><div class="col-lg-6">{{createText("fifty","fifty","Fifty")}}
</div><div class="col-lg-6">{{createText("twenty","twenty","Twenty")}}
</div><div class="col-lg-6">{{createText("ten","ten","Ten")}}
</div><div class="col-lg-6">{{createText("five","five","Five")}}
</div><div class="col-lg-6">{{createText("two","two","Two")}}
</div><div class="col-lg-6">{{createText("one","one","One")}}
</div><div class="col-lg-6">{{createText("fullName","fullName","FullName")}}
</div><div class="col-lg-6">{{createText("position","position","Position")}}

</div><div class="col-lg-6">{{createText("approvedName","approvedName","ApprovedName")}}
</div><div class="col-lg-6">{{createText("approvedPosition","approvedPosition","ApprovedPosition")}}
</div><div class="col-lg-6">{{createDate("declaredDate","declaredDate","Declared Date", "", "", "")}}
</div><div class="col-lg-6">{{createDate("approvedDate","approvedDate","Approved Date", "", "", "")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks", "", "")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection