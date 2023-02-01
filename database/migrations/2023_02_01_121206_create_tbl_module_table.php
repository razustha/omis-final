<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_module", function (Blueprint $table) {
$table->integer("module_id")->autoIncrement();
$table->string("moduleName")->nullable();
$table->string("alias")->nullable();
$table->datetime("createdOn")->nullable();;
$table->integer("createdBy")->default(0);
$table->integer("updatedBy")->default(0);
$table->text("remarks")->nullable();;
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_module");
    }
};