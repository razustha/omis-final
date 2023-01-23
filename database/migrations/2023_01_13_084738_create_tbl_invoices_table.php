<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_invoices", function (Blueprint $table) {
$table->integer("invoices_id")->autoIncrement();
$table->integer("company_id")->default(0);
$table->string("invoicesTitle");
$table->string("amountInWords");
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
     Schema::dropIfExists("tbl_invoices");
    }
};