<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_financereports", function (Blueprint $table) {
$table->integer("financeReports_id")->default(0);
$table->integer("applicants_id")->default(0);
$table->integer("company_id")->default(0);
$table->string("jobRole")->nullable();
$table->string("applicantsDepartment")->nullable();
$table->string("reportBy")->nullable();
$table->string("reportDescription")->nullable();
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
     Schema::dropIfExists("tbl_financereports");
    }
};