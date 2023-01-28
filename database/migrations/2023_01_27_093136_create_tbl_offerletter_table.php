<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_offerletter", function (Blueprint $table) {
$table->integer("offerletter_id")->autoIncrement();
$table->integer("applicants_id")->default(0);
$table->string("designation")->nullable();
$table->string("departmentName")->nullable();
$table->string("workingShift")->nullable();
$table->string("workingMode")->nullable();
$table->string("offeredSalary")->nullable();
$table->string("contractTimePeriod")->nullable();
$table->string("offerDescription")->nullable();
$table->string("offeredIssueBy")->nullable();
$table->datetime("createdOn")->nullable();;
$table->string("createdBy")->nullable();
$table->integer("updatedBy")->default(0);
$table->string("alias")->nullable();
$table->text("remarks")->nullable();;
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_offerletter");
    }
};