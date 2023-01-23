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
$table->string("mainTitle");
$table->string("amountWords");
$table->string("thousand");
$table->string("fiveHundred");
$table->string("hundred");
$table->string("fifty");
$table->string("twenty");
$table->string("ten");
$table->string("five");
$table->string("two");
$table->string("one");
$table->string("fullName");
$table->string("position");
$table->string("approvedName");
$table->string("approvedPosition");
$table->datetime("createdOn");
$table->string("createdBy");
$table->string("alias");
$table->integer("status")->default(0);
$table->text("remarks");
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_cashdeposite");
    }
};