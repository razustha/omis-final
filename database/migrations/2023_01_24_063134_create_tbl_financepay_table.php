<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_financepay", function (Blueprint $table) {
$table->integer("payeeName_id")->default(0);
$table->string("payeePhone")->nullable();
$table->string("payeeAccount")->nullable();
$table->string("payerName")->nullable();
$table->string("payerPhone")->nullable();
$table->string("payerAccount")->nullable();
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
     Schema::dropIfExists("tbl_financepay");
    }
};