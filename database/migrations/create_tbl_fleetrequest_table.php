<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_fleetrequest", function (Blueprint $table) {
$table->integer("fleetRequest_id")->default(0);
$table->integer("fleet_id")->default(0);
$table->string("fleetName");
$table->string("modelNumber");
$table->integer("numberPlate_id")->default(0);
$table->string("numberPlateType");
$table->string("plateNumber");
$table->string("rootPermit");
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
     Schema::dropIfExists("tbl_fleetrequest");
    }
};