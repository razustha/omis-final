<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_mangeholiday", function (Blueprint $table) {
$table->integer("mangeHoliday_id")->default(0);
$table->integer("companyName_id")->default(0);
$table->integer("eventStartDate")->default(0);
$table->integer("eventEndDate")->default(0);
$table->integer("holidayDescription")->default(0);
$table->integer("createdOn")->default(0);
$table->integer("createdBy")->default(0);
$table->integer("alias")->default(0);
$table->integer("status")->default(0);
$table->integer("remarks")->default(0);
$table->integer("created_at")->default(0);
$table->integer("updated_at")->default(0);
$table->string("updatedBy");
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_mangeholiday");
    }
};