<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_goodreceivedreconcile", function (Blueprint $table) {
$table->integer("goodreceivedreconcile_id")->autoIncrement();
$table->string("goodReceivedReconcile_Title")->nullable();
$table->string("address")->nullable();
$table->integer("purchaseNumber")->default(0);
$table->integer("receiptNumber")->default(0);
$table->string("sn")->nullable();
$table->string("goodsDetails")->nullable();
$table->integer("unit")->default(0);
$table->integer("quanitity")->default(0);
$table->string("comments")->nullable();
$table->string("receiverdName")->nullable();
$table->string("receivedPosition")->nullable();
$table->string("receivedAddress")->nullable();
$table->string("organization")->nullable();
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
     Schema::dropIfExists("tbl_goodreceivedreconcile");
    }
};