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
$table->string("trainerFullName");
$table->string("trainerPhone");
$table->string("trainerAddress");
$table->string("trainerEmail");
$table->datetime("createdOn");
$table->string("createdBy");
$table->string("alias");
$table->integer("status")->default(0);
$table->text("remarks");
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_trainer");
    }
};