<form action="{{route('training.traininglist.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("trainingList","trainingList","Training List")}}
</div><div class="col-lg-6">{{createDate("trainingDate","trainingDate","Training Date")}}
</div><div class="col-lg-4">{{createDate("trainigEndDate","trainigEndDate","Trainig End Date")}}
</div><div class="col-lg-4">{{createLabel('','form-label col-form-label','Department Name')}}{!! getSelectForForeignColumn("tbl_department","department_id","departmentName",'') !!}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>