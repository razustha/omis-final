<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;
        
        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_ownership", function (Blueprint $table) {
$table->integer("ownership_id")->autoIncrement();
$table->string("ownerName");
$table->datetime("createdOn");
$table->string("createdBy");
$table->string("alias");
$table->integer("status")->default(0);
$table->integer("remarks")->default(0);
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_ownership");
    }
};