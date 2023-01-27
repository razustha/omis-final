<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_purchaseservice", function (Blueprint $table) {
$table->integer("prchaseService_id")->default(0);
$table->string("purchaseTitle")->nullable();
$table->string("contractName")->nullable();
$table->string("referenceNumber")->nullable();
$table->integer("vatNumber")->default(0);
$table->string("address")->nullable();
$table->string("contact")->nullable();
$table->string("serialNumber")->nullable();
$table->string("descriptions")->nullable();
$table->integer("units")->default(0);
$table->integer("quantity")->default(0);
$table->integer("rate")->default(0);
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
     Schema::dropIfExists("tbl_purchaseservice");
    }
};