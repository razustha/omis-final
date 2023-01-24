<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_interviewschedule", function (Blueprint $table) {
$table->integer("interviewschedule_id")->autoIncrement();
$table->integer("applicants_id")->default(0);
$table->string("jobTitle")->nullable();
$table->string("jobDepartment")->nullable();
$table->string("interviewerName")->nullable();
$table->string("scheduleBy")->nullable();
$table->string("recommendedBy")->nullable();
$table->string("interviewMode")->nullable();
$table->datetime("createdOn")->nullable();;
$table->string("createdBy")->nullable();
$table->string("alias")->nullable();
$table->integer("status")->default(0);
$table->text("remarks")->nullable();;
$table->integer("updatedBy")->default(0);
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_interviewschedule");
    }
};