<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_rostercategory", function (Blueprint $table) {
$table->integer("rostercateogry_id")->default(0);
$table->string("titleName");
$table->integer("titleType_id")->default(0);
$table->string("officerName");
$table->datetime("applicants_id");
$table->integer("applicantName")->default(0);
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
     Schema::dropIfExists("tbl_rostercategory");
    }
};