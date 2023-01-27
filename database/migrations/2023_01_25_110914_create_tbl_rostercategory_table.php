<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_rostercategory", function (Blueprint $table) {
$table->integer("rostercategory_id")->autoIncrement();
$table->string("titleName")->nullable();
$table->integer("titleType_id")->default(0);
$table->string("officerName")->nullable();
$table->integer("applicants_id")->default(0);
$table->string("applicantName")->nullable();
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
     Schema::dropIfExists("tbl_rostercategory");
    }
};