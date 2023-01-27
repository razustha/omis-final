<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_travel", function (Blueprint $table) {
$table->integer("employeeName_id")->default(0);
$table->integer("arrangementType_id")->default(0);
$table->string("purposeOfVisit")->nullable();
$table->string("destination")->nullable();
$table->string("travelMode")->nullable();
$table->datetime("createdOn")->nullable();;
$table->string("createdBy")->nullable();
$table->string("alias")->nullable();
$table->integer("status")->default(0);
$table->text("remarks")->nullable();;
$table->string("updatedBy")->nullable();
$table->integer("companyName_id")->default(0);
$table->integer("travel_id")->autoIncrement();
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_travel");
    }
};