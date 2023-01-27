<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_fleetroster", function (Blueprint $table) {
$table->integer("fleetRoster_id")->default(0);
$table->string("placeVisit")->nullable();
$table->string("purpose")->nullable();
$table->string("driverName")->nullable();
$table->string("staffName")->nullable();
$table->string("staffPosition")->nullable();
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
     Schema::dropIfExists("tbl_fleetroster");
    }
};