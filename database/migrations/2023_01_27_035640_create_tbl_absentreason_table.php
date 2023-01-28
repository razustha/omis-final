<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_absentreason", function (Blueprint $table) {
$table->integer("absentReason_id")->default(0);
$table->string("designation")->nullable();
$table->string("dayAbsense")->nullable();
$table->string("holidayApprovedBy")->nullable();
$table->string("reasonAbsence")->nullable();
$table->string("submittedBy")->nullable();
$table->string("checkedBy")->nullable();
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
     Schema::dropIfExists("tbl_absentreason");
    }
};