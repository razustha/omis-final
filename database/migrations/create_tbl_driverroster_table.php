<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_driverroster", function (Blueprint $table) {
$table->integer("driverRoster_id")->default(0);
$table->string("driverName");
$table->string("driverPhone");
$table->string("driverVehicle");
$table->string("vehicleNumber");
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
     Schema::dropIfExists("tbl_driverroster");
    }
};