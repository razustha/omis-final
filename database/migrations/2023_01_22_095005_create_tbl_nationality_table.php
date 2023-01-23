<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_nationality", function (Blueprint $table) {
$table->integer("nationality_id")->autoIncrement();
$table->string("nationalityName");
$table->datetime("createdOn");
$table->integer("createdBy")->default(0);
$table->integer("updatedBy")->default(0);
$table->string("alias");
$table->text("remarks");
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_nationality");
    }
};