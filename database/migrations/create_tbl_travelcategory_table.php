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
$table->string("categoryType");
$table->string("details");
$table->string("amountInWords");
$table->string("claimedBy");
$table->string("verifiedBy");
$table->string("approvedBy");
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
     Schema::dropIfExists("tbl_travelcategory");
    }
};