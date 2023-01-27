<form action="{{route('training.traininglist.update',[$data->traininglist_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("trainingList","trainingList","TrainingList",'',$data->trainingList)}}
</div><div class="col-lg-6">{{createDate("trainingDate","trainingDate","TrainingDate",'',$data->trainingDate)}}
</div><div class="col-lg-4">{{createDate("trainigEndDate","trainigEndDate","TrainigEndDate",'',$data->trainigEndDate)}}
</div><div class="col-lg-4">{{createLabel('','form-label col-form-label','Department Name')}}{!! getSelectForForeignColumn("tbl_department","department_id","departmentName",'',$data) !!}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form> 