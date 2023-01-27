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
$table->string("totalAttendance")->nullable();
$table->string("totalWorkingDays")->nullable();
$table->string("totalAbsentDays")->nullable();
$table->string("attendanceReportBy")->nullable();
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
     Schema::dropIfExists("tbl_attendancereports");
    }
};