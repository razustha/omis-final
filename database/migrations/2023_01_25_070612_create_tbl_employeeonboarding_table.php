<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_employeeonboarding", function (Blueprint $table) {
$table->integer("employeeonboarding_id")->autoIncrement();
$table->integer("employee_id")->default(0);
$table->string("departmentName")->nullable();
$table->string("designation")->nullable();
$table->string("workingShift")->nullable();
$table->string("workingMode")->nullable();
$table->string("dayFrom")->nullable();
$table->string("dayTo")->nullable();
$table->string("departmentLogo")->nullable();
$table->datetime("createdOn")->nullable();;
$table->string("createdBy")->nullable();
$table->integer("updatedBy")->default(0);
$table->integer("alias")->default(0);
$table->integer("status")->default(0);
$table->text("remarks")->nullable();;
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_employeeonboarding");
    }
};