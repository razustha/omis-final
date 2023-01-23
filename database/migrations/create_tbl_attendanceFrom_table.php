<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;
        
        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_attendanceFrom", function (Blueprint $table) {
$table->integer("attendanceFrom_id")->autoIncrement();
$table->string("attendanceFromLocation");
$table->string("attendanceFromType");
$table->string("attendanceFromDescription");
$table->string("attendanceFromActiveFrom");
$table->integer("attendanceFromApprovedEmployee_id")->default(0);
$table->integer("attendanceFromSupervisorEmployee_id")->default(0);
$table->datetime("createdOn");
$table->string("createdBy");
$table->string("alias");
$table->integer("status")->default(0);
$table->integer("remarks")->default(0);
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_attendanceFrom");
    }
};