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
$table->string("employeeName")->nullable();
$table->string("paymentMethod")->nullable();
$table->string("selectDepartment")->nullable();
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
     Schema::dropIfExists("tbl_newpayment");
    }
};