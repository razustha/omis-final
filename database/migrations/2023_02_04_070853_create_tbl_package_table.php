<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_package", function (Blueprint $table) {
$table->integer("package_id")->autoIncrement();
$table->text("description")->nullable();;
$table->text("feature")->nullable();;
$table->datetime("createdOn")->nullable();;
$table->integer("updatedBy")->default(0);
$table->integer("status")->default(0);
$table->text("remarks")->nullable();;
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_package");
    }
};