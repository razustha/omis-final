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
$table->string("leaveType");
$table->integer("company_id")->default(0);
$table->string("departmentType");
$table->integer("department_id")->default(0);
$table->integer("totalDays")->default(0);
$table->datetime("createdOn");
$table->string("createdBy");
$table->string("alias");
$table->integer("status")->default(0);
$table->text("remarks");
$table->string("updatedBy");
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_leaverequest");
    }
};