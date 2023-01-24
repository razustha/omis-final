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
$table->string("jobInterviewType")->nullable();
$table->string("jobTitle")->nullable();
$table->string("candidatesName")->nullable();
$table->string("interviewPlace")->nullable();
$table->string("interviewers")->nullable();
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
     Schema::dropIfExists("tbl_jobinterview");
    }
};