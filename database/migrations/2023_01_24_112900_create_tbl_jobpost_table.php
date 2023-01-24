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
$table->string("jobTitle")->nullable();
$table->string("jobType")->nullable();
$table->integer("vacancyNumber")->default(0);
$table->string("jobCategory")->nullable();
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
     Schema::dropIfExists("tbl_jobpost");
    }
};