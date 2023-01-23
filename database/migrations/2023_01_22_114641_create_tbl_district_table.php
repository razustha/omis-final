<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_district", function (Blueprint $table) {
$table->integer("district_id")->autoIncrement();
$table->integer("country_id")->default(0);
$table->integer("state_id")->default(0);
$table->string("districtName");
$table->datetime("createdOn");
$table->integer("createdBy")->default(0);
$table->integer("updatedBy")->default(0);
$table->string("alias");
$table->text("remarks");
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_district");
    }
};