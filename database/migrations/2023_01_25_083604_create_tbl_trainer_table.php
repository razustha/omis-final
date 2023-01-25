<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_trainer", function (Blueprint $table) {
$table->integer("trainer_id")->autoIncrement();
$table->string("trainerFullName")->nullable();
$table->string("trainerPhone")->nullable();
$table->string("trainerAddress")->nullable();
$table->string("trainerEmail")->nullable();
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
     Schema::dropIfExists("tbl_trainer");
    }
};