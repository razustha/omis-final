<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_jobpost", function (Blueprint $table) {
$table->integer("jobpost_id")->autoIncrement();
$table->string("jobTitle");
$table->string("jobType");
$table->integer("vacancyNumber")->default(0);
$table->string("jobCategory");
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
     Schema::dropIfExists("tbl_jobpost");
    }
};