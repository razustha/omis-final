<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_recuritreports", function (Blueprint $table) {
$table->integer("recuritreports_id")->autoIncrement();
$table->string("departmentName")->nullable();
$table->string("totalNumberOfApplication")->nullable();
$table->integer("applicantsId")->default(0);
$table->string("gender")->nullable();
$table->string("designation")->nullable();
$table->datetime("createdOn")->nullable();;
$table->string("createdBy")->nullable();
$table->integer("updatedBy")->default(0);
$table->string("alias")->nullable();
$table->integer("status")->default(0);
$table->text("remarks")->nullable();;
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_recuritreports");
    }
};