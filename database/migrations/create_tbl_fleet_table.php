<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;
        
        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_fleet", function (Blueprint $table) {
$table->integer("fleet_id")->autoIncrement();
$table->integer("fleetParent_id")->default(0);
$table->string("fleetName");
$table->string("fleetDetails");
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
     Schema::dropIfExists("tbl_fleet");
    }
};