<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;
        
        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_compensatoryLeave", function (Blueprint $table) {
$table->integer("tbl_compensatoryLeave_id")->default(0);
$table->integer("applicant_id")->default(0);
$table->string("postion");
$table->integer("department_id")->default(0);
$table->string("workingDay");
$table->string("holidayReason");
$table->string("from");
$table->string("to");
$table->string("workingReason");
$table->string("recommendation");
$table->string("verificationUnit");
$table->string("approvedBy");
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
     Schema::dropIfExists("tbl_compensatoryLeave");
    }
};