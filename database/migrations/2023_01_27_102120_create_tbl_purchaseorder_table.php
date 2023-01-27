<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_purchaseorder", function (Blueprint $table) {
$table->integer("purchaseorder_id")->autoIncrement();
$table->string("referenceNumber")->nullable();
$table->string("telePhone")->nullable();
$table->string("venderName")->nullable();
$table->string("contractorPAN")->nullable();
$table->string("address")->nullable();
$table->integer("projectCode")->default(0);
$table->string("fundingSource")->nullable();
$table->string("goodsDescription")->nullable();
$table->integer("unit")->default(0);
$table->integer("totalUnit")->default(0);
$table->integer("unitRate")->default(0);
$table->string("specialRequest")->nullable();
$table->string("adminName")->nullable();
$table->string("adminDesignation")->nullable();
$table->string("operationalName")->nullable();
$table->string("operationalDesignation")->nullable();
$table->string("vendorName")->nullable();
$table->string("vendorDesignation")->nullable();
$table->datetime("createdOn")->nullable();;
$table->string("createdBy")->nullable();
$table->string("alias")->nullable();
$table->integer("status")->default(0);
$table->text("remarks")->nullable();;
$table->integer("updatedBy")->default(0);
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_purchaseorder");
    }
};