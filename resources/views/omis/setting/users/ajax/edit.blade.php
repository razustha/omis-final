
        <form action="{{route('setting.users.update',[$data->users_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("user_type","user_type","User Type",'',$data->user_type)}}
</div><div class="col-lg-6">{{createText("company_id","company_id","Company Id",'',$data->company_id)}}
</div><div class="col-lg-6">{{createText("branch_id","branch_id","Branch Id",'',$data->branch_id)}}
</div><div class="col-lg-6">{{createText("name","name","Name",'',$data->name)}}
</div><div class="col-lg-6">{{createText("mobile","mobile","Mobile",'',$data->mobile)}}
</div><div class="col-lg-6">{{createText("email","email","Email",'',$data->email)}}
</div><div class="col-lg-6">{{createText("email_verified_at","email_verified_at","Email Verified At",'',$data->email_verified_at)}}
</div><div class="col-lg-6">{{createText("password","password","Password",'',$data->password)}}
</div><div class="col-lg-6">{{createText("remember_token","remember_token","Remember Token",'',$data->remember_token)}}
</div><div class="col-lg-6">{{createText("created_by","created_by","Created By",'',$data->created_by)}}
</div><div class="col-lg-6">{{createText("updated_by","updated_by","Updated By",'',$data->updated_by)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("is_deleted","is_deleted","Is Deleted",'',$data->is_deleted)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>