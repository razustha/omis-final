<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_travelreports", function (Blueprint $table) {
$table->integer("travelReports_id")->default(0);
$table->string("title");
$table->string("fullName");
$table->string("departmentSector");
$table->string("visitedLocation");
$table->string("activities");
$table->string("visitObjectives");
$table->string("keyHighlights");
$table->string("achievement");
$table->string("observation");
$table->datetime("createdOn");
$table->string("createdBy");
$table->string("alias");
$table->integer("status")->default(0);
$table->text("remarks");
$table->integer("updatedBy")->default(0);
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_travelreports");
    }
};