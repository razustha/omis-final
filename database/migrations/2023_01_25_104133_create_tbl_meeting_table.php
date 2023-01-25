<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_meeting", function (Blueprint $table) {
$table->integer("meeting_id")->autoIncrement();
$table->string("meetingTitle")->nullable();
$table->string("meetingNote")->nullable();
$table->string("selectCompany")->nullable();
$table->string("selectDepartment")->nullable();
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
     Schema::dropIfExists("tbl_meeting");
    }
};