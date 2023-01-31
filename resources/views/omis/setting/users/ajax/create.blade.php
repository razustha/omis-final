
                <form action="{{route('setting.users.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("user_type","user_type","User Type")}}
</div><div class="col-lg-6">{{createText("company_id","company_id","Company Id")}}
</div><div class="col-lg-6">{{createText("branch_id","branch_id","Branch Id")}}
</div><div class="col-lg-6">{{createText("name","name","Name")}}
</div><div class="col-lg-6">{{createText("mobile","mobile","Mobile")}}
</div><div class="col-lg-6">{{createText("email","email","Email")}}
</div><div class="col-lg-6">{{createText("email_verified_at","email_verified_at","Email Verified At")}}
</div><div class="col-lg-6">{{createText("password","password","Password")}}
</div><div class="col-lg-6">{{createText("remember_token","remember_token","Remember Token")}}
</div><div class="col-lg-6">{{createText("created_by","created_by","Created By")}}
</div><div class="col-lg-6">{{createText("updated_by","updated_by","Updated By")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("is_deleted","is_deleted","Is Deleted")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>