<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_leaverequest", function (Blueprint $table) {
$table->integer("leaverequest_id")->autoIncrement();
$table->string("leaveType")->nullable();
$table->integer("company_id")->default(0);
$table->string("departmentType")->nullable();
$table->integer("department_id")->default(0);
$table->integer("totalDays")->default(0);
$table->datetime("createdOn")->nullable();;
$table->string("createdBy")->nullable();
$table->string("alias")->nullable();
$table->integer("status")->default(0);
$table->text("remarks")->nullable();;
$table->string("updatedBy")->nullable();
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_leaverequest");
    }
};