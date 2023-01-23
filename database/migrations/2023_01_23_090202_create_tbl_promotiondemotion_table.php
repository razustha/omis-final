<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_promotiondemotion", function (Blueprint $table) {
$table->integer("promotiondemotion_id")->autoIncrement();
$table->integer("company_id")->default(0);
$table->integer("employee_id")->default(0);
$table->string("promotionTitle")->nullable();
$table->string("description")->nullable();
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
     Schema::dropIfExists("tbl_promotiondemotion");
    }
};