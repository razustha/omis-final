<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_experienceletter", function (Blueprint $table) {
$table->integer("experienceletter_id")->autoIncrement();
$table->integer("employee_id")->default(0);
$table->string("designation")->nullable();
$table->string("departmentName")->nullable();
$table->string("experienceDetails")->nullable();
$table->string("letterIssueBy")->nullable();
$table->datetime("createdOn")->nullable();;
$table->string("createdBy")->nullable();
$table->string("updatedBy")->nullable();
$table->string("alias")->nullable();
$table->integer("status")->default(0);
$table->text("remarks")->nullable();;
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_experienceletter");
    }
};