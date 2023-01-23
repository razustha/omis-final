<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_expensesreports", function (Blueprint $table) {
$table->integer("expensesReports_id")->default(0);
$table->integer("applicant_id")->default(0);
$table->string("expensesDesciption");
$table->string("expensesReportBy");
$table->string("totalExpenses");
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
     Schema::dropIfExists("tbl_expensesreports");
    }
};