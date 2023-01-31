
        <form action="{{route('officemanagement.cashdeposite.update',[$data->cashDeposite_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("mainTitle","mainTitle","Main Title",'',$data->mainTitle)}}
</div><div class="col-lg-6">{{createDate("DATE","DATE","DATE",'',$data->DATE)}}
</div><div class="col-lg-4">{{createText("amountWords","amountWords","Amount Words",'',$data->amountWords)}}
</div><div class="col-lg-4">{{createText("thousand","thousand","Thousand",'',$data->thousand)}}
</div><div class="col-lg-4">{{createText("fiveHundred","fiveHundred","Five Hundred",'',$data->fiveHundred)}}
</div><div class="col-lg-4">{{createText("hundred","hundred","Hundred",'',$data->hundred)}}
</div><div class="col-lg-4">{{createText("fifty","fifty","Fifty",'',$data->fifty)}}
</div><div class="col-lg-4">{{createText("twenty","twenty","Twenty",'',$data->twenty)}}
</div><div class="col-lg-4">{{createText("ten","ten","Ten",'',$data->ten)}}
</div><div class="col-lg-4">{{createText("five","five","Five",'',$data->five)}}
</div><div class="col-lg-4">{{createText("two","two","Two",'',$data->two)}}
</div><div class="col-lg-4">{{createText("one","one","One",'',$data->one)}}
</div><div class="col-lg-4">{{createText("fullName","fullName","Full Name",'',$data->fullName)}}
</div><div class="col-lg-4">{{createText("position","position","Position",'',$data->position)}}
</div><div class="col-lg-4">{{createDate("declaredDate","declaredDate","Declared Date",'',$data->declaredDate)}}
</div><div class="col-lg-4">{{createText("approvedName","approvedName","Approved Name",'',$data->approvedName)}}
</div><div class="col-lg-4">{{createText("approvedPosition","approvedPosition","Approved Position",'',$data->approvedPosition)}}
</div><div class="col-lg-6">{{createDate("approvedDate","approvedDate","Approved Date",'',$data->approvedDate)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>