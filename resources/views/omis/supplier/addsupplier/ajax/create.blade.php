
                <form action="{{route('supplier.addsupplier.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-4">{{createText("day","day","Day")}}
</div><div class="col-lg-4">{{createDate("date","date","Date")}}
</div><div class="col-lg-4">{{createText("addSupplier_id","addSupplier_id","AddSupplier Id")}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","","remarks",'','')}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>