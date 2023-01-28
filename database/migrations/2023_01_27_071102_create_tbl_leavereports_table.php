<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_leavereports", function (Blueprint $table) {
$table->integer("leaveReports_id")->default(0);
$table->integer("applicant_id")->default(0);
$table->string("leaveReason")->nullable();
$table->string("leaveApprovedBy")->nullable();
$table->string("totalLeaveDays")->nullable();
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
     Schema::dropIfExists("tbl_leavereports");
    }
};