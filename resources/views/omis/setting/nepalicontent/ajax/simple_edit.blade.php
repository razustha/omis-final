
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("english_string","english_string","English String",'',$data->english_string)}}
</div><div class="col-lg-6">{{createText("nepali_string","nepali_string","Nepali String",'',$data->nepali_string)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>