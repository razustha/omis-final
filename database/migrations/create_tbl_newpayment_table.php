<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_newpayment", function (Blueprint $table) {
$table->integer("newpayment_id")->autoIncrement();
$table->integer("employeeAccountNumber")->default(0);
$table->string("employeeName");
$table->string("paymentMethod");
$table->string("selectDepartment");
$table->datetime("createdOn");
$table->string("createdBy");
$table->string("alias");
$table->integer("status")->default(0);
$table->text("remarks");
$table->string("updatedBy");
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_newpayment");
    }
};