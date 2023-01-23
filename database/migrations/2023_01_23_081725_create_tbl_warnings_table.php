<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_warnings", function (Blueprint $table) {
$table->integer("warnings_id")->autoIncrement();
$table->string("warningTo")->nullable();
$table->string("warningSubject")->nullable();
$table->string("warningType_id")->nullable();
$table->string("warningDescription")->nullable();
$table->datetime("createdOn")->nullable();;
$table->integer("createdBy")->default(0);
$table->integer("updatedBy")->default(0);
$table->string("alias")->nullable();
$table->text("remarks")->nullable();;
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_warnings");
    }
};