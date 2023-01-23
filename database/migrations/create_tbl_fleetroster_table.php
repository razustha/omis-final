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
$table->string("placeVisit");
$table->string("purpose");
$table->string("driverName");
$table->string("staffName");
$table->string("staffPosition");
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
     Schema::dropIfExists("tbl_fleetroster");
    }
};