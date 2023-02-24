<form action="{{route('training.traininglist.update',[$data->traininglist_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("trainingList","trainingList","Training List",'',$data->trainingList)}}
</div><div class="col-lg-6">{{createDate("trainingDate","trainingDate","Start Date",'',$data->trainingDate)}}
</div><div class="col-lg-4">{{createDate("trainigEndDate","trainigEndDate","End Date",'',$data->trainigEndDate)}}
</div><div class="col-lg-4">{!! getSelectForForeignColumn("tbl_department","department_id","departmentName",'',$data,'Department') !!}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form> 