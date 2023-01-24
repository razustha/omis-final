<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_expensesclaim", function (Blueprint $table) {
$table->integer("expensesClaim_id")->default(0);
$table->string("title")->nullable();
$table->string("fullName")->nullable();
$table->string("financialYear")->nullable();
$table->string("currency")->nullable();
$table->string("exchangeRate")->nullable();
$table->string("dailyAllowence")->nullable();
$table->string("food")->nullable();
$table->string("hotelBill")->nullable();
$table->string("officialMeeting")->nullable();
$table->string("transportation")->nullable();
$table->string("consultantAccomodation")->nullable();
$table->integer("receiptNumber")->default(0);
$table->integer("total")->default(0);
$table->integer("amount")->default(0);
$table->integer("recievedAdvance")->default(0);
$table->integer("totalExpense")->default(0);
$table->integer("payBalance")->default(0);
$table->string("requestedName")->nullable();
$table->string("requestedDesignation")->nullable();
$table->string("checkedName")->nullable();
$table->string("checkedDesignation")->nullable();
$table->string("recommendName")->nullable();
$table->string("recommendedDesignation")->nullable();
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
     Schema::dropIfExists("tbl_expensesclaim");
    }
};