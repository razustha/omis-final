<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_jobapplication", function (Blueprint $table) {
$table->integer("jobapplication_id")->autoIncrement();
$table->string("applyJobTitle")->nullable();
$table->string("applicantsName")->nullable();
$table->string("applyedDepartmentName")->nullable();
$table->string("workingExperience")->nullable();
$table->string("previousWorkingCompanyName")->nullable();
$table->string("recommendedBy")->nullable();
$table->string("portfolio")->nullable();
$table->string("fullTime")->nullable();
$table->string("partTime")->nullable();
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
     Schema::dropIfExists("tbl_jobapplication");
    }
};