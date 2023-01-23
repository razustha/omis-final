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
$table->string("meetingTitle");
$table->string("meetingNote");
$table->string("selectCompany");
$table->string("selectDepartment");
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
     Schema::dropIfExists("tbl_meeting");
    }
};