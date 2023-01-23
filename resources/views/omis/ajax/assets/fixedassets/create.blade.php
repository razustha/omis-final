
                <form method="POST" action="{{route('assets.fixedassets.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("assetsValue","assetsValue","AssetsValue")}}
</div><div class="col-lg-6">{{createText("time","time","Time")}}
</div><div class="col-lg-6">{{createText("date","date","Date")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div><div class="col-lg-6">{{createText("assets_id","assets_id","Assets Id")}}
</div><div class="col-lg-6">{{createText("fixedAssets_id","fixedAssets_id","FixedAssets Id")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>