<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_jobinterview", function (Blueprint $table) {
$table->integer("jobInterview_id")->default(0);
$table->string("jobInterviewType");
$table->string("jobTitle");
$table->string("candidatesName");
$table->string("interviewPlace");
$table->string("interviewers");
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
     Schema::dropIfExists("tbl_jobinterview");
    }
};