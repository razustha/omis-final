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
$table->string("goodReceivedReconcile_Title");
$table->string("address");
$table->integer("purchaseNumber")->default(0);
$table->integer("receiptNumber")->default(0);
$table->string("sn");
$table->string("goodsDetails");
$table->integer("unit")->default(0);
$table->integer("quanitity")->default(0);
$table->string("comments");
$table->string("receiverdName");
$table->string("receivedPosition");
$table->string("receivedAddress");
$table->string("organization");
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
     Schema::dropIfExists("tbl_goodreceivedreconcile");
    }
};