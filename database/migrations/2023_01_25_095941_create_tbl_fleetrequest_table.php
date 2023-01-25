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
$table->string("fleetName")->nullable();
$table->string("modelNumber")->nullable();
$table->integer("numberPlate_id")->default(0);
$table->string("numberPlateType")->nullable();
$table->string("plateNumber")->nullable();
$table->string("rootPermit")->nullable();
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
     Schema::dropIfExists("tbl_fleetrequest");
    }
};