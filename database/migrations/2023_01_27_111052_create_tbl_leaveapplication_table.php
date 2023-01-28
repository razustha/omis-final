<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_leaveapplication", function (Blueprint $table) {
$table->integer("leaveApplication_id")->default(0);
$table->string("leaveRequestedBy")->nullable();
$table->integer("employee_id")->default(0);
$table->integer("chooseDepartment_id")->default(0);
$table->string("leaveType")->nullable();
$table->string("leaveStart")->nullable();
$table->string("leaveEnd")->nullable();
$table->string("leaveApprovalBy")->nullable();
$table->datetime("createdOn")->nullable();;
$table->string("createdBy")->nullable();
$table->string("alias")->nullable();
$table->integer("status")->default(0);
$table->string("leaveApplication_status")->nullable();
$table->text("remarks")->nullable();;
$table->string("updatedBy")->nullable();
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_leaveapplication");
    }
};