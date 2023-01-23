<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;
        
        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_leaveApplication", function (Blueprint $table) {
$table->integer("applicantion_id")->default(0);
$table->string("leaveRequestedBy");
$table->integer("employeeNumber")->default(0);
$table->integer("chooseDepartment_id")->default(0);
$table->string("leaveType");
$table->string("leaveStart");
$table->string("leaveEnd");
$table->string("leaveApprovalBy");
$table->datetime("createdOn");
$table->string("createdBy");
$table->string("alias");
$table->integer("status")->default(0);
$table->text("remarks");
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_leaveApplication");
    }
};