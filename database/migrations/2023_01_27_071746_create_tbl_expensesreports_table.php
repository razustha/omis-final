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
$table->string("expensesDesciption")->nullable();
$table->string("expensesReportBy")->nullable();
$table->string("totalExpenses")->nullable();
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
     Schema::dropIfExists("tbl_expensesreports");
    }
};