<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_rosterentries", function (Blueprint $table) {
$table->integer("rosterEntries_id")->default(0);
$table->integer("entryType_id")->default(0);
$table->string("officerName");
$table->integer("applicantName_id")->default(0);
$table->datetime("createdOn");
$table->string("createdBy");
$table->string("alias");
$table->integer("status")->default(0);
$table->text("remarks");
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_rosterentries");
    }
};