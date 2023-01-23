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
$table->string("jobRole");
$table->string("applicantsDepartment");
$table->string("reportBy");
$table->string("reportDescription");
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
     Schema::dropIfExists("tbl_financereports");
    }
};