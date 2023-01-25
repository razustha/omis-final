<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_travelcategory", function (Blueprint $table) {
$table->integer("travelcategory_id")->autoIncrement();
$table->string("categoryType")->nullable();
$table->string("details")->nullable();
$table->string("amountInWords")->nullable();
$table->string("claimedBy")->nullable();
$table->string("verifiedBy")->nullable();
$table->string("approvedBy")->nullable();
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
     Schema::dropIfExists("tbl_travelcategory");
    }
};