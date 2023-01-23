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
$table->string("logbookTitle");
$table->string("subTitle");
$table->string("pageNumber");
$table->string("fullName");
$table->string("purpose");
$table->string("from");
$table->string("to");
$table->integer("dieselConsumed")->default(0);
$table->integer("mobileConsume")->default(0);
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
     Schema::dropIfExists("tbl_generatorlogbook");
    }
};