<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_proposal", function (Blueprint $table) {
$table->integer("proposal_id")->autoIncrement();
$table->integer("applicantName_id")->default(0);
$table->integer("deparmentName_id")->default(0);
$table->string("proposalTitle");
$table->string("proposalDetails");
$table->string("proposalSubmittedBy");
$table->string("proposalSubmittedTo");
$table->datetime("createdOn");
$table->string("createdBy");
$table->string("alias");
$table->integer("status")->default(0);
$table->string("remarks");
$table->string("updatedBy");
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_proposal");
    }
};