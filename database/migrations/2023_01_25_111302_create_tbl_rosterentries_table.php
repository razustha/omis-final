<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_rosterentries", function (Blueprint $table) {
$table->integer("rosterentries_id")->autoIncrement();
$table->integer("entryType_id")->default(0);
$table->string("officerName")->nullable();
$table->integer("applicantName_id")->default(0);
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
     Schema::dropIfExists("tbl_rosterentries");
    }
};