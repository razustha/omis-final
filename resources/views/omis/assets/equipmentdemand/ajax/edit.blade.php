
        <form action="{{route('assets.equipmentdemand.update',[$data->equipmentdemand_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createDate("date","date","Date",'',$data->date)}}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_department","department_id","departmentName",'',$data,'Department') !!}
</div><div class="col-lg-4">{{createText("position","position","Position",'',$data->position)}}
</div><div class="col-lg-4">{{createText("equipmentList","equipmentList","Equipment List",'',$data->equipmentList)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>