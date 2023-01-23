<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_complaints", function (Blueprint $table) {
$table->integer("complaints_id")->autoIncrement();
$table->string("companyName")->nullable();
$table->string("companyTitle")->nullable();
$table->string("complaintFrom")->nullable();
$table->string("complaintAgainst")->nullable();
$table->string("complaintDescription")->nullable();
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
     Schema::dropIfExists("tbl_complaints");
    }
};