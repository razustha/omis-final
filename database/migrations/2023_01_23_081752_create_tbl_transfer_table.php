<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_transfer", function (Blueprint $table) {
$table->integer("transfer_id")->autoIncrement();
$table->integer("employee_id")->default(0);
$table->string("employeeName_id")->nullable();
$table->string("fromDepartment")->nullable();
$table->string("toDepartment")->nullable();
$table->string("description")->nullable();
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
     Schema::dropIfExists("tbl_transfer");
    }
};