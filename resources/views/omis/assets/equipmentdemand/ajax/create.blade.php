<form action="{{route('assets.equipmentdemand.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createDate("date","date","Date")}}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_department","department_id","departmentName",'','','Department') !!}
</div><div class="col-lg-4">{{createText("position","position","Position")}}
</div><div class="col-lg-4">{{createText("equipmentList","equipmentList","Equipment List")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>