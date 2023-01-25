<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_compensatoryleave", function (Blueprint $table) {
$table->integer("compensatoryleave_id")->autoIncrement();
$table->integer("applicant_id")->default(0);
$table->string("postion")->nullable();
$table->integer("department_id")->default(0);
$table->string("workingDay")->nullable();
$table->string("holidayReason")->nullable();
$table->string("from")->nullable();
$table->string("to")->nullable();
$table->string("workingReason")->nullable();
$table->string("recommendation")->nullable();
$table->string("verificationUnit")->nullable();
$table->string("approvedBy")->nullable();
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
     Schema::dropIfExists("tbl_compensatoryleave");
    }
};