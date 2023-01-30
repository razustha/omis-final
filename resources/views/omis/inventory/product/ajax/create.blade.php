<form action="{{route('inventory.product.store')}}" id="storeCustomForm" method="post">
    @csrf
    <div class="row">
        <div class="col-lg-6">{{createText("productName","productName","Product Name")}}
        </div>
      
        <div class="col-lg-6">{{createText("useMaterials","useMaterials","Use Materials")}}
        </div>
        <div class="col-lg-6">{{createText("packing","packing","Packing")}}
        </div>
        <div class="col-lg-6">{{createText("company_id","company_id","Company Id")}}
        </div>
        <div class="col-lg-4">{{createText("companyName","companyName","Company Name")}}
        </div>
        <div class="col-lg-4">{{createText("companyAddress","companyAddress","Company Address")}}
        </div>
        <div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
        </div>
        <div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
        </div>  <div class="col-lg-6">
        {{createLabel('productPhoto','form-label col-form-label','Product Photo')}}
        <input id="thumbnail" class="form-control" type="text" name="productPhoto" value="" readonly>
                                <button id="lfm btn-image" data-input="thumbnail" data-preview="holder" class="lfm btn icon-left btn-primary mt-2 btn-image">
                                    <i class="fa fa-upload"></i> &nbsp;Choose
                                </button>
        </div> <br>
        <div class="col-md-12"><?php createButton("btn-primary btn-store", "", "Submit"); ?>
        </div>
</form>