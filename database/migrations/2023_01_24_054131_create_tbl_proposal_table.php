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
$table->string("proposalTitle")->nullable();
$table->string("proposalDetails")->nullable();
$table->string("proposalSubmittedBy")->nullable();
$table->string("proposalSubmittedTo")->nullable();
$table->datetime("createdOn")->nullable();;
$table->string("createdBy")->nullable();
$table->string("alias")->nullable();
$table->integer("status")->default(0);
$table->string("remarks")->nullable();
$table->string("updatedBy")->nullable();
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_proposal");
    }
};