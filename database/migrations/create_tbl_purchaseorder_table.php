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
$table->string("referenceNumber");
$table->string("telePhone");
$table->string("venderName");
$table->string("contractorPAN");
$table->string("address");
$table->integer("projectCode")->default(0);
$table->string("fundingSource");
$table->string("goodsDescription");
$table->integer("unit")->default(0);
$table->integer("totalUnit")->default(0);
$table->integer("unitRate")->default(0);
$table->string("specialRequest");
$table->string("adminName");
$table->string("adminDesignation");
$table->string("operationalName");
$table->string("operationalDesignation");
$table->string("vendorName");
$table->string("vendorDesignation");
$table->datetime("createdOn");
$table->string("createdBy");
$table->string("alias");
$table->integer("status")->default(0);
$table->text("remarks");
$table->integer("updatedBy")->default(0);
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_purchaseorder");
    }
};