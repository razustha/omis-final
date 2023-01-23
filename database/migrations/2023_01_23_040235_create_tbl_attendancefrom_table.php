<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_attendancefrom", function (Blueprint $table) {
$table->integer("attendanceFrom_id")->default(0);
$table->string("attendanceFromLocation")->nullable();
$table->string("attendanceFromType")->nullable();
$table->string("attendanceFromDescription")->nullable();
$table->string("attendanceFromActiveFrom")->nullable();
$table->integer("attendanceFromApprovedEmployee_id")->default(0);
$table->integer("attendanceFromSupervisorEmployee_id")->default(0);
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
     Schema::dropIfExists("tbl_attendancefrom");
    }
};