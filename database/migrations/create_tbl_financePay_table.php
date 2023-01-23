<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;
        
        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_financePay", function (Blueprint $table) {
$table->integer("payeeName_id")->default(0);
$table->string("payeePhone");
$table->string("payeeAccount");
$table->string("payerName");
$table->string("payerPhone");
$table->string("payerAccount");
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
     Schema::dropIfExists("tbl_financePay");
    }
};