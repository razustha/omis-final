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
$table->string("designation");
$table->string("dayAbsense");
$table->string("holidayApprovedBy");
$table->string("reasonAbsence");
$table->string("submittedBy");
$table->string("checkedBy");
$table->string("approvedBy");
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
     Schema::dropIfExists("tbl_absentreason");
    }
};