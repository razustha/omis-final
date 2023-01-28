<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_leavetype", function (Blueprint $table) {
$table->integer("leavetype_id")->autoIncrement();
$table->string("leaveType")->nullable();
$table->string("leavePaidStatus")->nullable();
$table->string("numberOfLeave")->nullable();
$table->string("monthlyLimit")->nullable();
$table->string("colorCode")->nullable();
$table->string("assignEmployee")->nullable();
$table->datetime("createdOn")->nullable();;
$table->integer("updatedBy")->default(0);
$table->string("alias")->nullable();
$table->integer("status")->default(0);
$table->text("remarks")->nullable();;
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_leavetype");
    }
};