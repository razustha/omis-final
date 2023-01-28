<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_product", function (Blueprint $table) {
$table->integer("product_id")->autoIncrement();
$table->string("productName")->nullable();
$table->string("productPhoto")->nullable();
$table->string("useMaterials")->nullable();
$table->string("packing")->nullable();
$table->integer("company_id")->default(0);
$table->string("companyName")->nullable();
$table->string("companyAddress")->nullable();
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
     Schema::dropIfExists("tbl_product");
    }
};