
                <form action="{{route('officemanagement.cashdeposite.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("mainTitle","mainTitle","Main Title")}}
</div><div class="col-lg-6">{{createDate("DATE","DATE","DATE")}}
</div><div class="col-lg-4">{{createText("amountWords","amountWords","Amount Words")}}
</div><div class="col-lg-4">{{createText("thousand","thousand","Thousand")}}
</div><div class="col-lg-4">{{createText("fiveHundred","fiveHundred","Five Hundred")}}
</div><div class="col-lg-4">{{createText("hundred","hundred","Hundred")}}
</div><div class="col-lg-4">{{createText("fifty","fifty","Fifty")}}
</div><div class="col-lg-4">{{createText("twenty","twenty","Twenty")}}
</div><div class="col-lg-4">{{createText("ten","ten","Ten")}}
</div><div class="col-lg-4">{{createText("five","five","Five")}}
</div><div class="col-lg-4">{{createText("two","two","Two")}}
</div><div class="col-lg-4">{{createText("one","one","One")}}
</div><div class="col-lg-4">{{createText("fullName","fullName","Full Name")}}
</div><div class="col-lg-4">{{createText("position","position","Position")}}
</div><div class="col-lg-4">{{createDate("declaredDate","declaredDate","Declared Date")}}
</div><div class="col-lg-4">{{createText("approvedName","approvedName","Approved Name")}}
</div><div class="col-lg-4">{{createText("approvedPosition","approvedPosition","Approved Position")}}
</div><div class="col-lg-6">{{createDate("approvedDate","approvedDate","Approved Date")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>