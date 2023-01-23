<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_vehiclelog", function (Blueprint $table) {
$table->integer("vehiclelog_id")->autoIncrement();
$table->string("riderName");
$table->string("vehicleNumber");
$table->string("from");
$table->string("to");
$table->string("purpose");
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
     Schema::dropIfExists("tbl_vehiclelog");
    }
};