<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_travelrequest", function (Blueprint $table) {
$table->integer("travelrequest_id")->autoIncrement();
$table->string("travellerName");
$table->string("destination");
$table->integer("totalDays")->default(0);
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
     Schema::dropIfExists("tbl_travelrequest");
    }
};