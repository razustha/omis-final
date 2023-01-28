<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_generatorlogbook", function (Blueprint $table) {
$table->integer("generatorlogbook_id")->autoIncrement();
$table->string("logbookTitle")->nullable();
$table->string("subTitle")->nullable();
$table->string("pageNumber")->nullable();
$table->string("fullName")->nullable();
$table->string("purpose")->nullable();
$table->string("from")->nullable();
$table->string("to")->nullable();
$table->integer("dieselConsumed")->default(0);
$table->integer("mobileConsume")->default(0);
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
     Schema::dropIfExists("tbl_generatorlogbook");
    }
};