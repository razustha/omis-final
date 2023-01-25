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
$table->string("riderName")->nullable();
$table->string("vehicleNumber")->nullable();
$table->string("from")->nullable();
$table->string("to")->nullable();
$table->string("purpose")->nullable();
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
     Schema::dropIfExists("tbl_vehiclelog");
    }
};