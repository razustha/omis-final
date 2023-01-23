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
$table->integer("employeeName_id")->default(0);
$table->string("fromDepartment");
$table->string("toDepartment");
$table->string("description");
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
     Schema::dropIfExists("tbl_transfer");
    }
};