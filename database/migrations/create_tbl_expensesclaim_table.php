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
$table->string("title");
$table->string("fullName");
$table->string("financialYear");
$table->string("currency");
$table->string("exchangeRate");
$table->string("dailyAllowence");
$table->string("food");
$table->string("hotelBill");
$table->string("officialMeeting");
$table->string("transportation");
$table->string("consultantAccomodation");
$table->integer("receiptNumber")->default(0);
$table->integer("total")->default(0);
$table->integer("amount")->default(0);
$table->integer("recievedAdvance")->default(0);
$table->integer("totalExpense")->default(0);
$table->integer("payBalance")->default(0);
$table->string("requestedName");
$table->string("requestedDesignation");
$table->string("checkedName");
$table->string("checkedDesignation");
$table->string("recommendName");
$table->string("recommendedDesignation");
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
     Schema::dropIfExists("tbl_expensesclaim");
    }
};