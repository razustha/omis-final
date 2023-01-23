<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;
        
        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_dictonary", function (Blueprint $table) {
$table->integer("dictonary_id")->autoIncrement();
$table->string("nepaliWord");
$table->string("englishWord");
$table->string("created_by");
$table->datetime("created_on");
$table->text("remarks");
$table->integer("status")->default(0);
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_dictonary");
    }
};