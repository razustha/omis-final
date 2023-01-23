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
$table->string("productName");
$table->string("productPhoto");
$table->string("useMaterials");
$table->string("packing");
$table->integer("company_id")->default(0);
$table->string("companyName");
$table->string("companyAddress");
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
     Schema::dropIfExists("tbl_product");
    }
};