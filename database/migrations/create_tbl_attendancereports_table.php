<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_attendancereports", function (Blueprint $table) {
$table->integer("attendancereports_id")->autoIncrement();
$table->integer("applicants_id")->default(0);
$table->string("totalAttendance");
$table->string("totalWorkingDays");
$table->string("totalAbsentDays");
$table->string("attendanceReportBy");
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
     Schema::dropIfExists("tbl_attendancereports");
    }
};