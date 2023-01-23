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
$table->string("purchaseTitle");
$table->string("contractName");
$table->string("referenceNumber");
$table->integer("vatNumber")->default(0);
$table->string("address");
$table->string("contact");
$table->string("serialNumber");
$table->string("descriptions");
$table->integer("units")->default(0);
$table->integer("quantity")->default(0);
$table->integer("rate")->default(0);
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
     Schema::dropIfExists("tbl_purchaseservice");
    }
};