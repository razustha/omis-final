<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_cashdeposite", function (Blueprint $table) {
$table->integer("cashDeposite_id")->default(0);
$table->string("mainTitle")->nullable();
$table->string("amountWords")->nullable();
$table->string("thousand")->nullable();
$table->string("fiveHundred")->nullable();
$table->string("hundred")->nullable();
$table->string("fifty")->nullable();
$table->string("twenty")->nullable();
$table->string("ten")->nullable();
$table->string("five")->nullable();
$table->string("two")->nullable();
$table->string("one")->nullable();
$table->string("fullName")->nullable();
$table->string("position")->nullable();
$table->string("approvedName")->nullable();
$table->string("approvedPosition")->nullable();
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
     Schema::dropIfExists("tbl_cashdeposite");
    }
};